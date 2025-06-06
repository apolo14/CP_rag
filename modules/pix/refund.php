<?php
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired();

// Configurações
$itemId = 512;          // ID da moeda
$itemAmount = 1;      // Quantidade de moedas por 1 unidade de valor

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)$this->params->get('id');
    $accountId = (int)$this->params->get('account_id');
    $quantidade = (float)$this->params->get('quantidade');
    
    try {
        // 1. Verificar transação
        $sqlCheck = "SELECT id, account_id, quantidade 
                    FROM {$server->loginDatabase}.saque 
                    WHERE id = ? AND status = 3 AND account_id = ?";
        $sthCheck = $server->connection->getStatement($sqlCheck);
        $sthCheck->execute(array($id, $accountId));
        
        if (!$transaction = $sthCheck->fetch()) {
            throw new Exception("Transação não encontrada ou já processada");
        }

        // 2. Obter personagem principal
        $sqlChar = "SELECT char_id, name FROM {$server->charMapDatabase}.`char` 
                   WHERE account_id = ? ORDER BY char_id ASC LIMIT 1";
        $sthChar = $server->connection->getStatement($sqlChar);
        $sthChar->execute(array($accountId));
        
        if (!$char = $sthChar->fetch()) {
            throw new Exception("Nenhum personagem encontrado para esta conta");
        }

        // 3. Calcular créditos
        $creditos = floor($quantidade * $itemAmount);
        $mailTitle = "Estorno de Saque PIX #{$id}";
        $mailMessage = "Você recebeu {$creditos} moedas como estorno do saque PIX no valor de R$ {$quantidade}.";

        // 4. Criar registro na tabela mail
        $sqlMail = "INSERT INTO {$server->charMapDatabase}.mail 
                   (send_name, send_id, dest_name, dest_id, title, message, 
                    time, status, zeny, type)
                   VALUES (?, ?, ?, ?, ?, ?, 
                    UNIX_TIMESTAMP(), 0, 0, 0)";
        
        $sthMail = $server->connection->getStatement($sqlMail);
        $sthMail->execute([
            'Sistema de Saques', // send_name
            0,                   // send_id (0 para sistema)
            $char->name,         // dest_name
            $char->char_id,      // dest_id
            $mailTitle,          // title
            $mailMessage         // message
        ]);

        // 5. Obter o último ID inserido (forma compatível com FluxCP)
        $sqlLastId = "SELECT LAST_INSERT_ID() AS last_id";
        $sthLastId = $server->connection->getStatement($sqlLastId);
        $sthLastId->execute();
        
        $lastInsert = $sthLastId->fetch();
        $mailId = $lastInsert ? $lastInsert->last_id : 0;

        if (!$mailId) {
            throw new Exception("Falha ao criar o correio");
        }

        // 6. Adicionar moedas como anexo
        $sqlAttachment = "INSERT INTO {$server->charMapDatabase}.mail_attachments
                         (id, `index`, nameid, amount, refine, attribute, identify,
                          card0, card1, card2, card3, unique_id, bound, enchantgrade)
                         VALUES (?, 0, ?, ?, 0, 0, 1, 
                         0, 0, 0, 0, 0, 0, 0)";
        
        $sthAttachment = $server->connection->getStatement($sqlAttachment);
        $sthAttachment->execute([
            $mailId,        // id do email
            $itemId,        // ID da moeda
            $creditos       // quantidade
        ]);

        // 7. Atualizar status para estornado (4)
        $sqlUpdate = "UPDATE {$server->loginDatabase}.saque 
                     SET status = 4 
                     WHERE id = ?";
        $sthUpdate = $server->connection->getStatement($sqlUpdate);
        $sthUpdate->execute(array($id));

        // 8. Forçar atualização do cache
        $sqlFlush = "UPDATE {$server->charMapDatabase}.`char` 
                    SET last_login = NOW() 
                    WHERE char_id = ?";
        $sthFlush = $server->connection->getStatement($sqlFlush);
        $sthFlush->execute(array($char->char_id));

        $session->setMessageData("Estorno realizado! {$creditos} moedas enviadas para {$char->name} via correio.");
        
    } catch (Exception $e) {
        $session->setMessageData("Erro no estorno: " . $e->getMessage(), 'error');
        error_log("Erro no estorno (Account ID: $accountId): " . $e->getMessage());
    }
}

$this->redirect($this->url('pix'));
?>
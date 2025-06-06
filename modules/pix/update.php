<?php
if (!defined('FLUX_ROOT')) exit;
require_once 'Flux/TemporaryTable.php';
$this->loginRequired();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)$params->get('saque_id'); 
    $status = (int)$params->get('status'); 
    
    // Certifica que o status é válido para atualização
    if (in_array($status, [1, 2, 3])) {
        // Garante que a atualização para status 3 seja tratada corretamente
        $sql = "UPDATE {$server->loginDatabase}.saque 
                SET status = ? 
                WHERE id = ? AND (status = 0 OR status = 2)";
        
        $sth = $server->connection->getStatement($sql);
        $sth->execute(array($status, $id));
        
        $session->setMessageData("Status atualizado com sucesso para ".$status."!");
    }
}

$this->redirect($this->url('pix'));
?>

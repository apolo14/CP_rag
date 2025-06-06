<?php
if (!defined('FLUX_ROOT')) exit;
require_once 'Flux/TemporaryTable.php';
$this->loginRequired();

$title = 'Pagina de controle RMT';

// Consulta principal dos saques
$sql = "SELECT saque.*, pix.nome, pix.chave_pix ";
$sql .= "FROM saque ";
$sql .= "LEFT JOIN pix ON saque.account_id = pix.account_id ";
$sql .= "ORDER BY saque.data DESC";

//sql de cash dentro do game
$sqlCashPoints = "SELECT SUM(value) AS total_cashpoints FROM acc_reg_num WHERE `key` = '#CASHPOINTS'";
$sthCashPoints = $server->connection->getStatement($sqlCashPoints);
$sthCashPoints->execute();
$rowCashPoints = $sthCashPoints->fetch(PDO::FETCH_ASSOC);
$totalCashPoints = $rowCashPoints['total_cashpoints'] ?? 0;


$sth = $server->connection->getStatement($sql);
$sth->execute();
$saques = $sth->fetchAll();

if (!$saques) {
    $title = "Nenhum saque encontrado.";
}

// Soma das quantidades por account_id apenas para status 1
$somas = [];
if ($saques) {
    foreach ($saques as $saque) {
        $accountId = $saque->account_id;
        
        // Inicializa o array para esta conta se não existir
        if (!isset($somas[$accountId])) {
            $somas[$accountId] = [
                'account_id' => $accountId,
                'nome' => $saque->nome,
                'chave_pix' => $saque->chave_pix,
                'total' => 0
            ];
        }
        
        // Soma apenas se o status for 1
        if ($saque->status == 1) {
            $somas[$accountId]['total'] += $saque->quantidade;
        }
    }
}

//saques pedidos
$totalSaquesStatus0 =0;
if($saques) {
	foreach ($saques as $saque) {
		if($saque->status == 0) {
			$totalSaquesStatus0 += $saque->quantidade;
		}
	}
}

//saques aprovados
$totalSaquesStatus1 =0;
if($saques) {
	foreach ($saques as $saque) {
		if($saque->status == 1) {
			$totalSaquesStatus1 += $saque->quantidade;
		}
	}
}

//lucro referente ao saque
$lucro = $totalSaquesStatus1 * 0.10;


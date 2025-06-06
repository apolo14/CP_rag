<?php
if (!defined('FLUX_ROOT')) exit;

require_once 'vendor/autoload.php';
MercadoPago\SDK::setAccessToken(Flux::config('MercadoPagoAccessToken'));

$payload = @file_get_contents('php://input');
$payment = json_decode($payload);

if ($payment && $payment->status === 'approved') {
    $account_id = (int)$payment->external_reference;
    $amount = (float)$payment->transaction_amount;
    $payment_id = $payment->id;
    
    // Registrar no banco de dados
    $sql = "INSERT INTO flux_donations 
            (account_id, payment_id, amount, status, created_at) 
            VALUES (?, ?, ?, 'completed', NOW())";
    $sth = Flux::$connection->getConnection()->prepare($sql);
    $sth->execute([$account_id, $payment_id, $amount]);
    
    // Adicionar créditos (exemplo)
    if (Flux::config('DonationCreditRate') > 0) {
        $credits = $amount * Flux::config('DonationCreditRate');
        $sql = "UPDATE login SET cash = cash + ? WHERE account_id = ?";
        $sth = Flux::$connection->getConnection()->prepare($sql);
        $sth->execute([$credits, $account_id]);
    }
    
    http_response_code(200);
} else {
    http_response_code(400);
}
?>
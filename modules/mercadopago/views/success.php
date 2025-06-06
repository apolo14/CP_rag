<?php
if (!defined('FLUX_ROOT')) exit;

$title = 'Doação Concluída com Sucesso';
include $this->themePath('mercadopago/views/success.php');


<!-- views/success.php -->
<div class="mercadopago-success">
    <h2>Obrigado por sua doação!</h2>
    <p>Seu pagamento foi aprovado e os créditos foram adicionados à sua conta.</p>
    <p>Transação ID: <?php echo htmlspecialchars($params->get('payment_id')) ?></p>
    <a href="<?php echo $this->url('account', 'view') ?>" class="btn btn-primary">
        Voltar para Minha Conta
    </a>
</div>
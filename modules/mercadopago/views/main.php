<div class="mercadopago-donation">
    <h2><?php echo htmlspecialchars($title) ?></h2>
    
    <?php if (!empty($errorMessage)): ?>
        <div class="error"><?php echo htmlspecialchars($errorMessage) ?></div>
    <?php endif ?>
    
    <form method="POST" action="<?php echo $this->url('mercadopago') ?>">
        <div class="form-group">
            <label for="amount">Valor (R$):</label>
            <input type="number" name="amount" id="amount" 
                   min="<?php echo htmlspecialchars(Flux::config('MinDonationAmount')) ?>" 
                   step="0.01" required>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <img src="<?php echo $this->themePath('img/mercadopago-logo.png') ?>" alt="Mercado Pago">
                Pagar com Mercado Pago
            </button>
        </div>
    </form>
    
    <div class="info">
        <p>Você será redirecionado para o Mercado Pago para concluir o pagamento.</p>
    </div>
</div>
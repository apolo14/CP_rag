<?php if (!defined('FLUX_ROOT')) exit; ?>

        <?php if (!$session->isLoggedIn()): ?>
            <!-- Carrega a caixa de login -->
			<?php include $this->themePath('news/view.php', true) ?> 
        <?php else: ?>
            <!-- Conteúdo para usuários logados -->
                <?php include $this->themePath('news/view.php', true) ?> 
            </div>
        <?php endif ?>
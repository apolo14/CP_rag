<?php if (!defined('FLUX_ROOT')) exit; ?>

<?php if ($session->isLoggedIn()): ?>
   <p class="error" style="color: white;">Você precisa estar logado para acessar esta página.</p>
<h2 style="color: yellow;">Informações</h2>
<div class="info-container" style="max-width: 900px; width: 100%; backdrop-filter: blur(8px); background-color: rgba(128, 0, 128, 0.3);">
    <div class="info-table-wrapper">
        <h3 style="color: yellow;">Informações da Conta</h3>
        <table class="info-table" style="color: white;">
            <tr>
                <th>Nome de Usuário</th>
                <td><?php echo htmlspecialchars($session->account->userid) ?></td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td><?php echo htmlspecialchars($session->account->email) ?></td>
            </tr>
            <tr>
                <th>Grupo</th>
                <td><?php echo (int)$session->account->group_id ?></td>
            </tr>
            <tr>
                <th>Estado da Conta</th>
                <td><?php echo $this->accountStateText($session->account->state) ?></td>
            </tr>
            <tr>
                <th>Saldo de Créditos</th>
                <td><?php echo number_format((int)$session->account->balance) ?></td>
            </tr>
        </table>
    </div>

<?php else: ?>
<div class="info-container container-fluid d-flex justify-content-center align-items-center">
<div class="info-table-wrapper rounded-4">
            <h3>Informações sobre o <b>servidor</b>!</h3>
			<h4>Midgard Realms</h4>
            <table class="info-table" style="color: white;">
                <tr>
                    <th>Eps do Servidor</th>
                    <td>16.1</td>
                </tr>
                <tr>
                    <th>Taxa de Experiência</th>
                    <td>10x</td>
                </tr>
                <tr>
                    <th>Taxa de Drops</th>
                    <td>1x</td>
                </tr>
                <tr>
                    <th>Máx. de Nível Base</th>
                    <td>175</td>
                </tr>
                <tr>
                    <th>Máx. de Nível de Classe</th>
                    <td>70</td>
                </tr>
            </table>
        </div>
        </div>
<?php endif ?>

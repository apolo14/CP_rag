<?php if (!defined('FLUX_ROOT')) exit; ?>
<div class="box3">
    <div class="title">Controle PIX</div>
    <div class="content">
        <?php if ($session->account->group_id >= Flux::config('AdminGroup')): ?>
            <h2>Relatório de Transações PIX</h2>
            
            <?php
            try {
                // Filtros seguros
                $accountId = (int)$params->get('account_id');
                $statusFilter = $params->get('status');
                
                // Consulta segura com tratamento de erros
                $sql = "SELECT 
                            p.account_id, 
                            p.nome, 
                            p.chave_pix,
                            s.data as data_saque,
                            s.status,
                            s.quantidade
                        FROM 
                            {$server->loginDatabase}.pix p
                        INNER JOIN 
                            {$server->loginDatabase}.saque s ON p.account_id = s.account_id
                        WHERE 
                            1=1 ";
                
                $bind = array();
                
                if ($accountId) {
                    $sql .= "AND s.account_id = ? ";
                    $bind[] = $accountId;
                }
                
                if ($statusFilter !== null && $statusFilter !== '') {
                    $sql .= "AND s.status = ? ";
                    $bind[] = (int)$statusFilter;
                }
                
                $sql .= "ORDER BY s.data DESC";
                
                $sth = $server->connection->getStatement($sql);
                $sth->execute($bind);
                
                $saques = $sth->fetchAll();
                
                // Função para formatar data
                function formatarDataPIX($dataOriginal) {
                    if (empty($dataOriginal) || strlen($dataOriginal) < 8) {
                        return 'Data inválida';
                    }
                    return substr($dataOriginal, 6, 2).'-'.substr($dataOriginal, 4, 2).'-'.substr($dataOriginal, 0, 4);
                }
            } catch (Exception $e) {
                echo '<div class="error">Erro ao acessar o banco de dados: '.htmlspecialchars($e->getMessage()).'</div>';
                $saques = array();
            }
            ?>
            
            <form action="<?php echo $this->url('pixcontrol') ?>" method="get" style="margin-bottom: 20px;">
                <input type="hidden" name="module" value="admin">
                <input type="hidden" name="action" value="pixcontrol">
                
                <div style="margin-bottom: 10px;">
                    <label for="account_id" style="display: inline-block; width: 100px;">ID da Conta:</label>
                    <input type="number" name="account_id" id="account_id" value="<?php echo htmlspecialchars($accountId) ?>" style="padding: 5px;">
                </div>
                
                <div style="margin-bottom: 10px;">
                    <label for="status" style="display: inline-block; width: 100px;">Status:</label>
                    <select name="status" id="status" style="padding: 5px; width: 150px;">
                        <option value="">Todos</option>
                        <option value="1" <?php echo $statusFilter === '1' ? 'selected' : '' ?>>Pendente</option>
                        <option value="2" <?php echo $statusFilter === '2' ? 'selected' : '' ?>>Concluído</option>
                    </select>
                </div>
                
                <button type="submit" style="padding: 5px 15px; background: #4CAF50; color: white; border: none; cursor: pointer;">Filtrar</button>
            </form>

            <?php if (!empty($saques)): ?>
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                        <thead>
                            <tr style="background-color: #f2f2f2;">
                                <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">ID Conta</th>
                                <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Nome</th>
                                <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Chave PIX</th>
                                <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Data Saque</th>
                                <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Status</th>
                                <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Valor (R$)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($saques as $saque): ?>
                                <tr style="border: 1px solid #ddd;">
                                    <td style="padding: 10px; border: 1px solid #ddd;"><?php echo htmlspecialchars($saque->account_id) ?></td>
                                    <td style="padding: 10px; border: 1px solid #ddd;"><?php echo htmlspecialchars($saque->nome) ?></td>
                                    <td style="padding: 10px; border: 1px solid #ddd;"><?php echo htmlspecialchars($saque->chave_pix) ?></td>
                                    <td style="padding: 10px; border: 1px solid #ddd;"><?php echo htmlspecialchars(formatarDataPIX($saque->data_saque)) ?></td>
                                    <td style="padding: 10px; border: 1px solid #ddd;">
                                        <?php 
                                        // Converter status numérico para texto
                                        switch((int)$saque->status) {
                                            case 1: echo '<span style="color: orange;">Pendente</span>'; break;
                                            case 2: echo '<span style="color: green;">Concluído</span>'; break;
                                            default: echo '<span>'.htmlspecialchars($saque->status).'</span>';
                                        }
                                        ?>
                                    </td>
                                    <td style="padding: 10px; border: 1px solid #ddd;">R$ <?php echo number_format($saque->quantidade, 2, ',', '.') ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p style="margin-top: 20px; color: #666; font-style: italic;">
                    <?php echo isset($e) ? 'Erro na consulta' : 'Nenhum saque encontrado com os filtros atuais.' ?>
                </p>
            <?php endif ?>
            
        <?php else: ?>
            <p style="color: red;">Você não tem permissão para acessar esta página.</p>
        <?php endif ?>
    </div>
</div>

<section id="about">
<?php if ($saques): ?>
<h2 style="text-align: center; width: 100%;"><?php echo htmlspecialchars($title) ?></h2>
    <style>
        .cards-controle {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, auto);
            gap: 15px;
            padding: 20px;
            max-width: 900px;
            margin: auto;
        }
        .box {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            background-color: #f5f5f5;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
		
		.horizontal-table {
            max-width: 900px;
            border-collapse: collapse;
            margin: 20px auto;
        }
        .horizontal-table th, .horizontal-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
		.button-group {
			display: flex;
			gap: 10px; /* Espaçamento entre os botões */
			align-items: center;
		}

        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            color: #fff;
        }
        .btn-approve {
            background-color: #28a745;
        }
        .btn-reject {
            background-color: #dc3545;
        }
        .filter-btn {
            padding: 10px 15px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }

    </style>

<div class="cards-controle">
       <!-- <div class="box">R$ 490,00<br>Valor de RMT comprados</div> -->
        <div class="box">R$ <?php echo number_format($totalSaquesStatus1, 2, ',', '.'); ?><br>Total em Cash Sacado</div>
        <div class="box">R$ <?php echo number_format($lucro, 2, ',', '.'); ?><br>Lucro total no saque</div>
        <!--<div class="box">R$ 20,00<br>RMT In-Game</div> -->
        <div class="box">R$ 300,00<br>Valor de CASH comprados(n implementado)</div>
        <div class="box">300 CASH<br>Bônus de CASH por Cupom (n implementado)</div>
        <div class="box"><?php echo number_format($totalSaquesStatus0, 2, ',', '.'); ?><br>Total de saques solicitados</div>
        <div class="box"><?php echo number_format($totalCashPoints, 2, ',', '.'); ?><br>CASH In-Game</div>
    </div>


<table class="horizontal-table">
    <tr>
        <th>ID</th>
        <th>Account ID</th>
        <th>Nome</th>
        <th>Chave PIX</th>
        <th>Quantidade</th>
        <th>Status</th>
        <th>Data</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($saques as $saque): 
        // Se o status for 1 (Entregue) ou 3 (Estornado), pula para a próxima iteração
        if ($saque->status == 1 || $saque->status == 3) continue;
    ?>
    <tr>
        <td><?php echo $saque->id; ?></td>
        <td><?php echo $saque->account_id; ?></td>
        <td><?php echo htmlspecialchars($saque->nome); ?></td>
        <td><?php echo htmlspecialchars($saque->chave_pix); ?></td>
        <td><?php echo number_format($saque->quantidade); ?></td>
        <td>
            <?php
            $status = $saque->status;
            $statusText = 'Desconhecido';
            if ($status == 0) {
                $statusText = 'Pendente';
            } elseif ($status == 1) {
                $statusText = 'Entregue';
            } elseif ($status == 2) {
                $statusText = 'Rejeitado';
            } elseif ($status == 4) {
                $statusText = 'Estornado';
            }
            echo $statusText;
            ?>
        </td>
        <td><?php echo date('d/m/Y H:i', $saque->data); ?></td>
        <td>
            <?php if ($saque->status == 0): ?>
                <!-- Botão para atualizar de status 0 para 1: Realizar pagamento -->
                <div class="button-group">
					<form method="POST" action="index.php?module=pix&action=update" >
						<input type="hidden" name="saque_id" value="<?php echo $saque->id; ?>">
						<input type="hidden" name="status" value="1">
							<button type="submit">Realizar pagamento</button>
					</form>
					<!-- Botão para atualizar de status 0 para 2: Rejeitar -->
					<form method="POST" action="index.php?module=pix&action=update" >
						<input type="hidden" name="saque_id" value="<?php echo $saque->id; ?>">
						<input type="hidden" name="status" value="2">
						<button type="submit">Rejeitar</button>
					</form>
				</div>
            <?php elseif ($saque->status == 2): ?>
                <!-- Botão para atualizar de status 2 para 3: Estornar -->
					<form method="POST" action="index.php?module=pix&action=update" >
						<input type="hidden" name="saque_id" value="<?php echo $saque->id; ?>">
						<input type="hidden" name="status" value="3">
						<button type="submit">Estornar</button>
					</form>
            <?php else: ?>
                -
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
<p>Nenhum saque encontrado.</p>
<?php endif; ?>

<!-- Tabela de totais por conta -->
<h3>Totais por Conta</h3>
<table class="horizontal-table">
    <tr>
        <th>Account ID</th>
        <th>Nome</th>
        <th>Chave PIX</th>
        <th>Total Sacado</th>
    </tr>
    <?php foreach ($somas as $conta): ?>
    <tr>
        <td><?php echo $conta['account_id'] ?></td>
        <td><?php echo htmlspecialchars($conta['nome']) ?></td>
        <td><?php echo htmlspecialchars($conta['chave_pix']) ?></td>
        <td><?php echo number_format($conta['total']) ?></td>
    </tr>
    <?php endforeach ?>
</table>



</section>
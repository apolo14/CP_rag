<?php
if (!defined('FLUX_ROOT')) exit;
$this->loginRequired(); 
?>

<style>
table.vertical-table {
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 900px;
  margin: 0 auto; /* centraliza a tabela se necessário */
  border-collapse: collapse;
  overflow: hidden;
}

table.vertical-table th,
table.vertical-table td {

  border-bottom: 1px solid #ccc;
  color: #46305E; /* cor do texto alterada para o roxo desejado */
  font-family: Arial, sans-serif;
}

table.vertical-table th {
  text-align: left;
  width: 25%;
  font-weight: bold;
}

table.vertical-table td {
  width: 75%;
}

/* Remove a borda do último item, deixando o visual mais clean */
table.vertical-table tr:last-child td {
  border-bottom: none;
}

/* Responsividade semelhante ao formulário */
@media screen and (max-width: 600px) {
  table.vertical-table {
    padding: 15px;
    margin: 10px;
  }
}
input[type="submit"] {
  background-color: #46305E;
  text-align: center;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  line-height: 0;
}
  
  input[type="submit"]:hover {
    background-color: #8815D8;
  }
</style>

<section id="about">
	<div class="row about-intro">
	<?php if($ticketlist): ?>
	<h2><?php echo Flux::message('SDHeaderID') ?><?php echo htmlspecialchars($trow->ticket_id) ?> - <?php echo htmlspecialchars($trow->subject) ?></h2>
		<table class="vertical-table" width="100%"> 
			<tbody>
			<tr>
				<th>Conta</th>
					<td><?php echo $this->linkToAccount($trow->account_id, $session->account->userid) ?></td>
				<th>Personagem</th>
					<?php if($trow->char_id=='0'):?>
					<td><i>Todos os personagens</i></td>
					<?php elseif($trow->char_id=='-1'):?>
					<td><i>None on account</i></td>
					<?php else:?>
					<td><?php echo $this->linkToCharacter($trow->char_id,$char->name) ?></td>
					<?php endif ?>
			</tr>
			<tr>
				<th>Categoria</th>
				<td><?php echo $catname ?></td>
				<th>Status do ticket</th>
				<td><?php echo htmlspecialchars($trow->status) ?></td>
			</tr>
			<tr>
				<th>Data de criação</th>
					<td><?php echo htmlspecialchars($trow->timestamp) ?></td>
				<th>Time</th>
					<td><?php if($trow->team=='1'): ?><?php echo Flux::message('SDGroup1') ?>
					<?php elseif($trow->team=='2'): ?><?php echo Flux::message('SDGroup2') ?>
					<?php elseif($trow->team=='3'): ?><?php echo Flux::message('SDGroup3') ?>
					<?php endif ?></td>
			</tr>
			<tr>
				<th>Título</th>
					<td colspan="3"><?php echo nl2br($trow->subject) ?></td>
			</tr>
			<?php if($trow->chatlink!='0'): ?>
			<tr>
				<th>Chat Logs</th>
				<td colspan="3"><a href="<?php echo htmlspecialchars($trow->chatlink) ?>" target="_blank"><?php echo htmlspecialchars($trow->chatlink) ?></a></td></tr>
			</tr>
			<?php endif ?>
			<?php if($trow->sslink!='0'): ?>
			<tr>
				<th>Screenshots</th>
				<td colspan="3"><a href="<?php echo htmlspecialchars($trow->sslink) ?>" target="_blank"><img src="<?php echo htmlspecialchars($trow->sslink) ?>" width="100px" height="100"></a></td></tr>
			</tr>
			<?php endif ?>
			<?php if($trow->videolink!='0'): ?>
			<tr>
				<th>Video Capture</th>
				<td colspan="3"><?php echo htmlspecialchars($trow->videolink) ?></td></tr>
			</tr>
			<?php endif ?>
			<tr>
				<th>Body<br />&nbsp;<br />&nbsp;<br />&nbsp;</th>
				<td colspan="3"><?php echo nl2br($trow->text) ?></td></tr>
			</tr>
			</tbody>
		</table>
		<br />

		<?php if($replylist): ?>
		<?php foreach($replylist as $rrow): ?>
		<table class="vertical-table" width="100%"> 
			<tbody>
			<tr>
				<th width="100">Respondido por</th>
				<td>
					<?php if($rrow->isstaff==1): ?>
						<font color="<?php echo Flux::config('StaffReplyColour') ?>"><?php echo $rrow->author ?></font>
					<?php elseif($rrow->isstaff==0): ?>
						<?php echo $rrow->author ?>
					<?php endif ?>
				</td>
			</tr>
			<?php if($rrow->text!='0'): ?>
			<tr>
				<th>Resposta</th>
				<td><?php echo nl2br(stripslashes($rrow->text)) ?></td>
			</tr>
			
			<?php endif ?>
			<?php if($rrow->action!='0'): ?>
			<tr>
				<th>Ação</th>
				<td><?php echo $rrow->action ?></td>
			</tr>
			<?php endif ?>
			<tr>
				<th>Data da resposta</th>
				<td><?php echo $rrow->timestamp ?></td>
			</tr>
			</tbody>
		</table><br />
		<?php endforeach ?>
		<?php else: ?>
			<table class="vertical-table" width="100%"> 
			<tbody>
			<tr>
				<th>Este ticket não possue resposta no momento.</th>
			</tr>
			</tbody>
		</table>
		<?php endif ?>
		<br />
		<?php if($trow->status!='Resolved' || $trow->status!='Closed'): ?>
		<form action="<?php echo $this->urlWithQs ?>" method="post">
		<table class="vertical-table" width="100%"> 
			<tbody>
			<tr>
				<th width="100">Resposta</th>
				<td><textarea cols="30" rows="10" name="response" placeholder="Clique aqui para adicionar uma resposta."></textarea></td>
			</tr>
			<tr>
				<th>Ações</th>
				<td><table class="generic-form-table">
				<?php if($trow->status=="Resolved" || $trow->status=="Closed"): ?>
					<tr><td><?php echo Flux::message('SDRespTable6') ?>:</td><td><input type="radio" name="secact" value="6" checked="checked" /></td></tr>
				<?php else: ?>
				<tr><td><?php echo Flux::message('SDRespTable2') ?>:</td><td><input type="radio" name="secact" value="2" checked="checked" /></td></tr>
				<tr><td><?php echo Flux::message('SDRespTable3') ?>:</td><td><input type="radio" name="secact" value="3" /></td></tr>
				<?php endif ?>
				</table></td>
			</tr>
			<tr>
				<td colspan="2">
				<input type="hidden" name="postreply" value="gogolol" />
				<input type="submit" name="submit" value="Adicionar resposta" /></td>
			</tr>
			</tbody>
		</table>
		</form>
		<?php endif ?>
		
		
	<?php else: ?>
		<p>
			<?php echo htmlspecialchars(Flux::message('SDHuh')) ?>
		</p>
	<?php endif ?>
	</div>
</section>
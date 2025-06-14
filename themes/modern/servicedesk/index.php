<?php
if (!defined('FLUX_ROOT')) exit;
$this->loginRequired();
?>
<section id="about">
	<div class="row about-intro">
	
		<h2><?php echo htmlspecialchars(Flux::message('SDHeader')) ?></h2>
		<p><?php echo htmlspecialchars(Flux::message('SDWelcomeText')) ?>, <?php echo $session->account->userid ?>. </p> 
		<br /><br />
		<h3>Reportar outro jogador:</h3>
		<p>* Seja o mais detalhado possível sobre o caso e dependendo da acusação é necessário um vídeo.</p>
<br />
		<h3>Reporte de BUG:</h3>
		<p>* Seja o mais detalhado possível e se for falar sobre algum item, não diga apenas o nome, coloque o link do divine-pride.</p>
<br />
		<h3><img src="themes/modern/images/11010.png" alt="Suporte tecnico"> Suporte técnico:</h3>
		<p>* Seja o mais detalhado possível e mande prints do que aconteceu, não mande tickets como "Meu jogo não abre, fim", pois seu ticket será encerrado e aguardaremos por um outro com mais informações. Informe o que você acha que está acontecendo, envie uma print do erro que está tomando, diga se você estava conseguindo logar antes, o que fez antes de não conseguir logar mais e o máximo de informações que conseguir.</p>
<br />
		<h3>Problemas com Doações:</h3>
		<p>* Mande o ID da transação do Mercado Pago ou do PicPay para que você possa ser identificado, além do valor e do dia/hora da compra.</p>
		<br />
		<p>
				<strong><a href="<?php echo $this->url('servicedesk', 'create') ?>"><?php echo Flux::message('SDLinkOpenNew') ?></a></strong>
		</p>
		<br />
		<h3><?php echo Flux::message('SDH3ActiveTickets') ?></h3>
		<?php if($rowoutput): ?>
			<table class="horizontal-table" width="100%"> 
				<tbody>
				<tr>
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderID')) ?></th>
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderSubject')) ?></th>    
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderCategory')) ?></th>    
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderStatus')) ?></th> 
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderLastAuthor')) ?></th>
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderTeam')) ?></th>
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderTimestamp')) ?></th>   
				</tr>
				<?php echo $rowoutput ?>
				</tbody>
			</table>
		<?php else: ?>
			<p>
				<?php echo Flux::message('SDNoOpenTickets') ?><br />
			</p>
		<?php endif ?><br />
		<h3><?php echo Flux::message('SDH3InActiveTickets') ?></h3>
		<?php if($oldrowoutput): ?>
			<table class="horizontal-table" width="100%"> 
				<tbody>
				<tr>
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderID')) ?></th>
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderSubject')) ?></th>    
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderCategory')) ?></th>    
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderStatus')) ?></th> 
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderLastAuthor')) ?></th>
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderTeam')) ?></th>
					<th><?php  echo htmlspecialchars(Flux::message('SDHeaderTimestamp')) ?></th>   
				</tr>
				<?php echo $oldrowoutput ?>
				</tbody>
			</table>
		<?php else: ?>
			<p>
				<?php echo Flux::message('SDNoInactiveTickets') ?><br /><br />
			</p>
		<?php endif ?><br /><Br />
	</div>
</section>
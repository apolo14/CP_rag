<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../pmenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2><?php echo htmlspecialchars(Flux::message('TransferHeading')) ?></h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            <h4><?php echo htmlspecialchars(Flux::message('TransferHeading')) ?></h4>
                            
<p><?php if (!empty($errorMessage)): ?>
	<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>
<?php if ($session->account->balance): ?>
<h3><?php printf(htmlspecialchars(Flux::message('TransferSubHeading')), $server->serverName) ?></h3>
<p><?php printf(Flux::message('TransferInfo'), '<span class="remaining-balance">'.number_format($session->account->balance).'</span>') ?></p>
<p><?php echo htmlspecialchars(Flux::message('TransferInfo2')) ?></p>
<form action="<?php echo $this->url ?>" method="post" class="generic-form">
	<?php echo $this->moduleActionFormInputs('account', 'transfer') ?>

	<table class="generic-form-table">
		<tr>
			<th><label for="credits"><?php echo htmlspecialchars(Flux::message('TransferAmountLabel')) ?></label></th>
			<td><input type="text" name="credits" id="credits" value="<?php echo htmlspecialchars($params->get('credits') ?: '') ?>" /></td>
			<td><p><?php echo htmlspecialchars(Flux::message('TransferAmountInfo')) ?></p></td>
		</tr>
		<tr>
			<th><label for="char_name"><?php echo htmlspecialchars(Flux::message('TransferCharNameLabel')) ?></label></th>
			<td><input type="text" name="char_name" id="char_name" value="<?php echo htmlspecialchars($params->get('char_name') ?: '') ?>" /></td>
			<td><p><?php echo htmlspecialchars(Flux::message('TransferCharNameInfo')) ?></p></td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<button type="submit"
					onclick="return confirm('<?php echo htmlspecialchars(str_replace("'", "\\'", Flux::message('TransferConfirm'))) ?>')">
					<strong><?php echo htmlspecialchars(Flux::message('TransferButton')) ?></strong>
				</button>
			</td>
		</tr>
	</table>
</form>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('TransferNoCredits')) ?></p>
<?php endif ?>
</p>
<hr>

<p></p> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        if($(window).outerWidth() <= 1024){
            $('html, body').animate({
                scrollTop: $('.about__content').offset().top - 80
            }, 800);
        }
    });
</script>		
<?php include __DIR__ . "/../pfooter.php"; ?>
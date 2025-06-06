<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../pmenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Server features</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            
                            <?php if ($incomingXfers): ?>
<table class="vertical-table">
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('XferLogCreditsLabel')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('XferLogFromLabel')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('XferLogDateLabel')) ?></th>
	</tr>
	<?php foreach ($incomingXfers as $xfer): ?>
	<tr>
		<td align="right"><?php echo number_format($xfer->amount) ?></td>
		<td><?php echo htmlspecialchars($xfer->from_email) ?></td>
		<td><?php echo $this->formatDateTime($xfer->transfer_date) ?></td>
	</tr>
	<?php endforeach ?>
</table>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('XferLogNotReceived')) ?></p>
<?php endif ?>

<h3><?php echo htmlspecialchars(Flux::message('XferLogSentSubHead')) ?></h3>
<?php if ($outgoingXfers): ?>
<table class="vertical-table">
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('XferLogCreditsLabel')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('XferLogCharNameLabel')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('XferLogDateLabel')) ?></th>
	</tr>
	<?php foreach ($outgoingXfers as $xfer): ?>
	<tr>
		<td align="right"><?php echo number_format($xfer->amount) ?></td>
		<td>
			<?php if ($xfer->target_char_name): ?>
				<?php if ($auth->actionAllowed('character', 'view') && $auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($xfer->target_char_id, $xfer->target_char_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($xfer->target_char_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars($xfer->target_char_id) ?></span>
			<?php endif ?>
		</td>
		<td><?php echo $this->formatDateTime($xfer->transfer_date) ?></td>
	</tr>
	<?php endforeach ?>
</table>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('XferLogNotSent')) ?></p>
<?php endif ?>

                             </div>
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
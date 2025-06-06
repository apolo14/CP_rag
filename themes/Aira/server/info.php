<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../ymenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Basic information</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            <p>
                                <?php if($serverinfos): ?>
                                       <?php foreach($serverinfos as $prow):?>
                                       <?php echo $prow->option_body?>
                                       <?php endforeach;?>
    <?php endif ?>
    <hr>
<p><span style="color: #eac485;"><strong><?php echo htmlspecialchars(Flux::message('ServerInfoAccountLabel')) ?>&nbsp;</strong></span>- <?php echo number_format($info['accounts']) ?> <br>
<span style="color: #eac485;"><strong><?php echo htmlspecialchars(Flux::message('ServerInfoCharLabel')) ?>&nbsp;</strong></span>- <?php echo number_format($info['characters']) ?> <br>
<b><span style="color: #eac485;"><?php echo htmlspecialchars(Flux::message('ServerInfoGuildLabel')) ?></span>&nbsp;</b>- <?php echo number_format($info['guilds']) ?> <br>
<b><span style="color: #eac485;"><?php echo htmlspecialchars(Flux::message('ServerInfoPartyLabel')) ?></span>&nbsp;</b>- <?php echo number_format($info['parties']) ?> <br>
<b><span style="color: #eac485;"><?php echo htmlspecialchars(Flux::message('ServerInfoZenyLabel')) ?></span>&nbsp;</b>- <?php echo number_format($info['zeny']) ?></p>
<h2><?php echo htmlspecialchars(Flux::message('ServerStatusHeading')) ?></h2>
<p><?php echo htmlspecialchars(Flux::message('ServerStatusInfo')) ?></p>
<?php foreach ($serverStatus as $privServerName => $gameServers): ?>
<h3>Server Status for <?php echo htmlspecialchars($privServerName) ?></h3>
<table id="server_status">
	<tr>
		<td class="status"><?php echo htmlspecialchars(Flux::message('ServerStatusServerLabel')) ?></td>
		<td class="status"><?php echo htmlspecialchars(Flux::message('ServerStatusLoginLabel')) ?></td>
		<td class="status"><?php echo htmlspecialchars(Flux::message('ServerStatusCharLabel')) ?></td>
		<td class="status"><?php echo htmlspecialchars(Flux::message('ServerStatusMapLabel')) ?></td>
		<td class="status"><?php echo htmlspecialchars(Flux::message('ServerStatusOnlineLabel')) ?></td>
		<?php if(Flux::config('EnablePeakDisplay')): ?>
			<td class="status"><?php echo htmlspecialchars(Flux::message('ServerStatusPeakLabel')) ?></td>
		<?php endif ?>
	</tr>
	<?php foreach ($gameServers as $serverName => $gameServer): ?>
	<tr>
		<th class="server"><?php echo htmlspecialchars($serverName) ?></th>
		<td class="status"><?php echo $this->serverUpDown($gameServer['loginServerUp']) ?></td>
		<td class="status"><?php echo $this->serverUpDown($gameServer['charServerUp']) ?></td>
		<td class="status"><?php echo $this->serverUpDown($gameServer['mapServerUp']) ?></td>
		<td class="status"><?php echo $gameServer['playersOnline'] ?></td>
		<?php if(Flux::config('EnablePeakDisplay')): ?>
			<td class="status"><?php echo $gameServer['playersPeak'] ?></td>
		<?php endif ?>
	</tr>
	<?php endforeach ?>
</table>


<?php endforeach ?>

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
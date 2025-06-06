<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../ymenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Guilds</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            <p class="toggler"><a href="javascript:toggleSearchForm()">Search...</a></p>
<form action="<?php echo $this->url ?>" method="get" class="search-form">
	<?php echo $this->moduleActionFormInputs($params->get('module')) ?>
	<p>
		<label for="guild_name">Guild Name:</label>
		<input type="text" name="guild_name" id="guild_name" value="<?php echo htmlspecialchars($params->get('guild_name') ?: '') ?>" />
		
		<input type="submit" value="Search" />
		<input type="button" value="Reset" onclick="reload()" />
	</p>
</form>
<?php if ($guilds): ?>
<?php echo $paginator->infoText() ?>
<table class="horizontal-table">
	<tr>
		<th><?php echo $paginator->sortableColumn('guild.guild_id', 'Guild ID') ?></th>
		<th colspan="2"><?php echo $paginator->sortableColumn('guildName', 'Guild Name') ?></th>
		<th><?php echo $paginator->sortableColumn('charID', 'Leader ID') ?></th>
		<th><?php echo $paginator->sortableColumn('charName', 'Leader Name') ?></th>
		<th><?php echo $paginator->sortableColumn('guildLevel', 'Guild Level') ?></th>
		<th><?php echo $paginator->sortableColumn('connectMem', 'Online Members') ?></th>
		<th><?php echo $paginator->sortableColumn('maxMem', 'Capacity') ?></th>
		<th><?php echo $paginator->sortableColumn('avgLevel', 'Average Level') ?></th>
	</tr>
	<?php foreach ($guilds as $guild): ?>
	<tr>
		<td align="right">
			<?php if ($auth->actionAllowed('guild', 'view') && $auth->allowedToViewGuild): ?>
				<?php echo $this->linkToGuild($guild->guild_id, $guild->guild_id) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($guild->guild_id) ?>
			<?php endif ?>
		</td>
		<?php if ($guild->emblem): ?>
		<td width="24"><img src="<?php echo $this->emblem($guild->guild_id) ?>" /></td>
		<td><?php echo htmlspecialchars($guild->guildName) ?></td>
		<?php else: ?>
		<td colspan="2"><?php echo htmlspecialchars($guild->guildName) ?></td>
		<?php endif ?>
		<td>
			<?php if ($auth->allowedToViewCharacter): ?>
				<?php echo $this->linkToCharacter($guild->charID, $guild->charID) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($guild->charID) ?>
			<?php endif ?>
		</td>
		<td><?php echo htmlspecialchars($guild->charName) ?></td>
		<td><?php echo number_format($guild->guildLevel) ?></td>
		<td><?php echo number_format($guild->connectMem) ?></td>
		<td><?php echo number_format($guild->maxMem) ?></td>
		<td><?php echo number_format($guild->avgLevel) ?></td>
		
	</tr>
	<?php endforeach ?>
</table>
<?php echo $paginator->getHTML() ?>
<?php else: ?>
<p>No guilds found. <a href="javascript:history.go(-1)">Go back</a>.</p>
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
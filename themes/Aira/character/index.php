<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../pmenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>List Character</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            <form action="<?php echo $this->url ?>" method="get" class="search-form">
	<?php echo $this->moduleActionFormInputs($params->get('module')) ?>
	<p>
		
		<label for="char_name">Character:</label>
		<input type="text" name="char_name" id="char_name" value="<?php echo htmlspecialchars($params->get('char_name') ?: '') ?>" />
		<input type="submit" value="Search" />
		<input type="button" value="Reset" onclick="reload()" />
	</p>
</form>
<?php if ($characters): ?>
<?php echo $paginator->infoText() ?>
<table class="vertical-table">
	<tr>
		<th><?php echo $paginator->sortableColumn('ch.char_id', 'Character ID') ?></th>
		<th><?php echo $paginator->sortableColumn('userid', 'Account') ?></th>
		<th><?php echo $paginator->sortableColumn('char_name', 'Character') ?></th>
		<th>Job Class</th>
		<th><?php echo $paginator->sortableColumn('ch.base_level', 'Base Level') ?></th>
		<th><?php echo $paginator->sortableColumn('ch.job_level', 'Job Level') ?></th>
		<th><?php echo $paginator->sortableColumn('ch.zeny', 'Zeny') ?></th>
		<th colspan="2"><?php echo $paginator->sortableColumn('guild_name', 'Guild') ?></th>
		<th><?php echo $paginator->sortableColumn('partner_name', 'Partner') ?></th>
		<th><?php echo $paginator->sortableColumn('mother_name', 'Mother') ?></th>
		<th><?php echo $paginator->sortableColumn('father_name', 'Father') ?></th>
		<th><?php echo $paginator->sortableColumn('child_name', 'Child') ?></th>
		<th><?php echo $paginator->sortableColumn('ch.online', 'Online') ?></th>
		<th><?php echo $paginator->sortableColumn('ch.char_num', 'Slot') ?></th>
	</tr>
	<?php foreach ($characters as $char): ?>
	<tr>
		<td align="right">
			<?php if ($auth->actionAllowed('character', 'view') && $auth->allowedToViewCharacter): ?>
				<?php echo $this->linkToCharacter($char->char_id, $char->char_id) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($char->char_id) ?>
			<?php endif ?>
		</td>
		<td>
			<?php if ($auth->actionAllowed('account', 'view') && $auth->allowedToViewAccount): ?>
				<?php echo $this->linkToAccount($char->account_id, $char->userid) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($char->userid) ?>
			<?php endif ?>
		</td>
		<td><?php echo htmlspecialchars($char->char_name) ?></td>
		<td>
			<?php if ($job=$this->jobClassText($char->class)): ?>
				<?php echo htmlspecialchars($job) ?>
			<?php else: ?>
				<span class="not-applicable">Unknown</span>
			<?php endif ?>
		</td>
		<td><?php echo number_format((int)$char->base_level) ?></td>
		<td><?php echo number_format((int)$char->job_level) ?></td>
		<td><?php echo number_format((int)$char->zeny) ?></td>
		<?php if ($char->guild_name): ?>
			<?php if ($char->emblem): ?>
			<td width="24"><img src="<?php echo $this->emblem($char->guild_id) ?>" /></td>
			<?php endif ?>
			<td<?php if (!$char->emblem) echo ' colspan="2"' ?>>
				<?php if ($auth->actionAllowed('guild', 'view') && $auth->allowedToViewGuild): ?>
					<?php echo $this->linkToGuild($char->guild_id, $char->guild_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->guild_name) ?>
				<?php endif ?>
			</td>
		<?php else: ?>
			<td colspan="2" align="center"><span class="not-applicable">None</span></td>
		<?php endif ?>
		<td>
			<?php if ($char->partner_name): ?>
				<?php if ($auth->actionAllowed('character', 'view') && $auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->partner_id, $char->partner_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->partner_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
		<td>
			<?php if ($char->mother_name): ?>
				<?php if ($auth->actionAllowed('character', 'view') && $auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->mother_id, $char->mother_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->mother_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
		<td>
			<?php if ($char->father_name): ?>
				<?php if ($auth->actionAllowed('character', 'view') && $auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->father_id, $char->father_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->father_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
		<td>
			<?php if ($char->child_name): ?>
				<?php if ($auth->actionAllowed('character', 'view') && $auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->child_id, $char->child_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->child_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
		<td>
			<?php if ($char->online): ?>
				<span class="online">Online</span>
			<?php else: ?>
				<span class="offline">Offline</span>
			<?php endif ?>
		</td>
		<td><?php echo $char->char_num + 1 ?></td>
	</tr>
	<?php endforeach ?>
</table>
<?php echo $paginator->getHTML() ?>
<?php else: ?>
<p>No characters found. <a href="javascript:history.go(-1)">Go back</a>.</p>
<?php endif ?>
<hr>

<p></p>
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
<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../ymenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Server Monster</h2></div>
                    <div class="about__content-info">
                        <div class="text-area"> 
<p>
<form class="search-form" method="get">
	<?php echo $this->moduleActionFormInputs($params->get('module')) ?>
	<p>
		<label for="monster_id">Monster ID:</label>
		<input type="text" name="monster_id" id="monster_id" value="<?php echo htmlspecialchars($params->get('monster_id') ?: '') ?>"/>
		
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" value="<?php echo htmlspecialchars($params->get('name') ?: '') ?>" />
		
		<input type="submit" value="Search" />
		<input type="button" value="Reset" onclick="reload()" />
	</p>
</form>
<?php if ($monsters): ?>
<?php echo $paginator->infoText() ?>
<table class="horizontal-table">
	<tr>
		<th><?php echo $paginator->sortableColumn('monster_id', 'Monster ID') ?></th>
		<th><?php echo $paginator->sortableColumn('name_japanese', 'kRO Name') ?></th>
		<th><?php echo $paginator->sortableColumn('name_english', 'iRO Name') ?></th>
		<th><?php echo $paginator->sortableColumn('level', 'Level') ?></th>
		<th><?php echo $paginator->sortableColumn('hp', 'HP') ?></th>
		<th><?php echo $paginator->sortableColumn('size', 'Size') ?></th>
		<th><?php echo $paginator->sortableColumn('race', 'Race') ?></th>
		<th>Element</th>
		<th><?php echo $paginator->sortableColumn('base_exp', 'Base EXP') ?></th>
		<th><?php echo $paginator->sortableColumn('job_exp', 'Job EXP') ?></th>
		<th><?php echo $paginator->sortableColumn('origin_table', 'Custom') ?></th>
	</tr>
	<?php foreach ($monsters as $monster): ?>
	<tr>
		<td align="right">
			<?php if ($auth->actionAllowed('monster', 'view')): ?>
				<?php echo $this->linkToMonster($monster->monster_id, $monster->monster_id) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($monster->monster_id) ?>
			<?php endif ?>
		</td>
		<td>
			<?php if ($monster->mvp_exp): ?>
			<span class="mvp">MVP!</span>
			<?php endif ?>
			<?php echo htmlspecialchars($monster->name_english) ?>
		</td>
		<td><?php echo htmlspecialchars($monster->name_english) ?></td>
		<td><?php echo number_format($monster->level) ?></td>
		<td><?php echo number_format($monster->hp) ?></td>
		<td>
			<?php if ($size=Flux::monsterSizeName($monster->size)): ?>
				<?php echo htmlspecialchars($size) ?>
			<?php else: ?>
				<span class="not-applicable">Unknown</span>
			<?php endif ?>
		</td>
		<td>
			<?php if ($race=Flux::monsterRaceName($monster->race)): ?>
				<?php echo htmlspecialchars($race) ?>
			<?php else: ?>
				<span class="not-applicable">Unknown</span>
			<?php endif ?>
		</td>
		<td><?php echo Flux::elementName($monster->element) ?> (Lv <?php echo floor($monster->element_level) ?>)</td>
		<td><?php echo number_format($monster->base_exp * $server->expRates['Base'] / 100) ?></td>
		<td><?php echo number_format($monster->job_exp * $server->expRates['Job'] / 100) ?></td>
		<td>
			<?php if (preg_match('/mob_db2$/', $monster->origin_table)): ?>
				Yes
			<?php else: ?>
				No
			<?php endif ?>
		</td>
	</tr>
	<?php endforeach ?>
</table>
<?php echo $paginator->getHTML() ?>
<?php else: ?>
<p>No monsters found. <a href="javascript:history.go(-1)">Go back</a>.</p>
<?php endif ?>
</p>
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
<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../ymenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Items</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            
                            <form class="search-form" method="get">
	<?php echo $this->moduleActionFormInputs($params->get('module')) ?>
	<p>
		<label for="item_id">Item ID:</label>
		<input type="text" name="item_id" id="item_id" value="<?php echo htmlspecialchars($params->get('item_id') ?: '') ?>" />
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" value="<?php echo htmlspecialchars($params->get('name') ?: '') ?>" />
		
		<input type="submit" value="Search" />
		<input type="button" value="Reset" onclick="reload()" />
	</p>
</form>
<?php if ($items): ?>
<?php echo $paginator->infoText() ?>
<table class="horizontal-table">
	<tr>
		<th><?php echo $paginator->sortableColumn('item_id', 'Item ID') ?></th>
		<th colspan="2"><?php echo $paginator->sortableColumn('name', 'Name') ?></th>
		<th><?php echo $paginator->sortableColumn('type', 'Type') ?></th>
		<th><?php echo $paginator->sortableColumn('subtype', 'SubType') ?></th>
		<th>Equip Locations</th>
		<th><?php echo $paginator->sortableColumn('price_buy', 'NPC Buy') ?></th>
		<th><?php echo $paginator->sortableColumn('price_sell', 'NPC Sell') ?></th>
		<th><?php echo $paginator->sortableColumn('weight', 'Weight') ?></th>
		<th><?php echo $paginator->sortableColumn('attack', 'Attack') ?></th>
		<?php if($server->isRenewal): ?>
		<th><?php echo $paginator->sortableColumn('magic_attack', 'MATK') ?></th>
		<?php endif ?>
		<th><?php echo $paginator->sortableColumn('defense', 'Defense') ?></th>
		<th><?php echo $paginator->sortableColumn('range', 'Range') ?></th>
		<th><?php echo $paginator->sortableColumn('slots', 'Slots') ?></th>
		<th><?php echo $paginator->sortableColumn('refineable', 'Refineable') ?></th>
		<th><?php echo $paginator->sortableColumn('cost', 'For Sale') ?></th>
		<th><?php echo $paginator->sortableColumn('origin_table', 'Custom') ?></th>
	</tr>
	<?php foreach ($items as $item): ?>
	<tr>
		<td align="right">
			<?php if ($auth->actionAllowed('item', 'view')): ?>
				<?php echo $this->linkToItem($item->item_id, $item->item_id) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($item->item_id) ?>
			<?php endif ?>
		</td>
		<?php if ($icon=$this->iconImage($item->item_id)): ?>
			<td width="24"><img src="<?php echo htmlspecialchars($icon) ?>?nocache=<?php echo rand() ?>" /></td>
			<td><?php echo htmlspecialchars($item->name ?: '') ?></td>
		<?php else: ?>
			<td colspan="2"><?php echo htmlspecialchars($item->name ?: '') ?></td>
		<?php endif ?>
		<td>
			<?php if ($type=$this->itemTypeText($item->type)): ?>
				<?php echo htmlspecialchars($type) ?>
			<?php else: ?>
				<span class="not-applicable">Unknown</span>
			<?php endif ?>
		</td>
		<td>
			<?php if ($subtype=$this->itemSubTypeText($item->type, $item->subtype)): ?>
				<?php echo htmlspecialchars($subtype) ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
		<td>
			<?php if ($equip_locations=$this->equipLocations($item->equip_location)): ?>
				<?php echo $equip_locations ?>
			<?php else: ?>
				<span class="not-applicable">None</span>
			<?php endif ?>
		</td>
		<td><?php echo number_format((int)$item->price_buy) ?></td>
		<td><?php echo number_format((int)$item->price_sell) ?></td>
		<td><?php echo round($item->weight ?: 0, 1) ?></td>
		<td><?php echo number_format((int)$item->attack) ?></td>
		<?php if($server->isRenewal): ?>
			<td><?php echo number_format((int)$item->magic_attack) ?></td>
		<?php endif ?>
		<td><?php echo number_format((int)$item->defense) ?></td>
		<td><?php echo number_format((int)$item->range) ?></td>
		<td><?php echo number_format((int)$item->slots) ?></td>
		<td>
			<?php if ($item->refineable): ?>
				<span class="refineable yes">Yes</span>
			<?php else: ?>
				<span class="refineable no">No</span>
			<?php endif ?>
		</td>
		<td>
			<?php if ($item->cost): ?>
				<span class="for-sale yes"><a href="<?php echo $this->url('purchase') ?>" title="Go to Item Shop">Yes</a></span>
			<?php else: ?>
				<span class="for-sale no">No</span>
			<?php endif ?>
		</td>
		<td>
			<?php if (preg_match('/item_db2$/', $item->origin_table)): ?>
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
	<p>No items found. <a href="javascript:history.go(-1)">Go back</a>.</p>
	<?php if(Flux::config('Debug')): ?>
		<?php $msg = sprintf('Error info: %s', print_r($sth->errorInfo(), true)); ?>
		<?php echo $msg; ?>
	<?php endif ?>
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
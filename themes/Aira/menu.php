<?php
if (!defined('FLUX_ROOT')) exit;

$menus	= Flux::config('FluxTables.CMSSettingsTable');
$sql = "SELECT id, option_set, option_body, modified created FROM {$server->loginDatabase}.$menus WHERE id IN (2,3,4,5,6,7,8,9,10) ORDER BY id ASC";


$sth = $server->connection->getStatement($sql);
$sth->execute();

$menus = $sth->fetchAll();
?>
<?php
if (!defined('FLUX_ROOT')) exit;

$menus2	= Flux::config('FluxTables.CMSSettingsTable');
$sql = "SELECT id, option_set, option_body, modified created FROM {$server->loginDatabase}.$menus2 WHERE id IN (11,12,13,14,15) ORDER BY id ASC";


$sth = $server->connection->getStatement($sql);
$sth->execute();

$menus2 = $sth->fetchAll();
?>
<?php
if (!defined('FLUX_ROOT')) exit;

$menus3	= Flux::config('FluxTables.CMSSettingsTable');
$sql = "SELECT id, option_set, option_body, modified created FROM {$server->loginDatabase}.$menus3 WHERE id IN (28,29,30,31,32,33) ORDER BY id ASC";


$sth = $server->connection->getStatement($sql);
$sth->execute();

$menus3 = $sth->fetchAll();
?>
                <ul class="nav__links">
            <?php if($menus): ?>
            <?php foreach($menus as $prow):?>    
                    <li><a href="<?php echo $prow->option_body?>"><span><?php echo $prow->option_set?></span></a></li>
            <?php endforeach;?>
            <?php endif ?>
            <li>
                        <div class="drop-box">
                            <span>Social</span>
                            <div class="drop-box__links">
                                <?php if($menus3): ?>
            <?php foreach($menus3 as $prow):?>    
                    <a href="<?php echo $prow->option_body?>"><?php echo $prow->option_set?></a>
            <?php endforeach;?>
            <?php endif ?>
                            </div>
                        </div>
                    </li>
                    
                    <?php $adminMenuItems = $this->getAdminMenuItems();
            $menuItems = $this->getMenuItems();
            if( $params->get('module') != 'main' ): ?>
            <?php if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')): ?>
	        <?php $mItems = array(); foreach ($adminMenuItems as $menuItem) $mItems[] = sprintf('<a href="%s">%s</a>', $menuItem['url'], $menuItem['name']) ?>
	        <li><a href="/ypanel"><span>Ypanel</span></a></li>
            <?php endif ?>
            <?php endif ?>
                </ul>
                <div class="nav__sub">
                    <div class="nav__sub-content">
                        <div class="nav__content">
                            <ul class="nav__sublinks">
            <?php if($menus2): ?>
            <?php foreach($menus2 as $prow):?>    
                                <li><a href="<?php echo $prow->option_body?>"><span><?php echo $prow->option_set?></span></a></li>    
            <?php endforeach;?>
            <?php endif ?>
                            </ul>
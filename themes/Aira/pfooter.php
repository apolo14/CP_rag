<?php
if (!defined('FLUX_ROOT')) exit;

$fmenus	= Flux::config('FluxTables.CMSSettingsTable');
$sql = "SELECT id, option_set, option_body, modified created FROM {$server->loginDatabase}.$fmenus WHERE id IN (16,17,18,19) ORDER BY id ASC";


$sth = $server->connection->getStatement($sql);
$sth->execute();

$fmenus = $sth->fetchAll();
?>
<?php
if (!defined('FLUX_ROOT')) exit;

$fmenus2	= Flux::config('FluxTables.CMSSettingsTable');
$sql = "SELECT id, option_set, option_body, modified created FROM {$server->loginDatabase}.$fmenus2 WHERE id IN (20,21,22,23) ORDER BY id ASC";


$sth = $server->connection->getStatement($sql);
$sth->execute();

$fmenus2 = $sth->fetchAll();
?>
<?php
if (!defined('FLUX_ROOT')) exit;

$fmenus3	= Flux::config('FluxTables.CMSSettingsTable');
$sql = "SELECT id, option_set, option_body, modified created FROM {$server->loginDatabase}.$fmenus3 WHERE id IN (24,25,26,27) ORDER BY id ASC";


$sth = $server->connection->getStatement($sql);
$sth->execute();

$fmenus3 = $sth->fetchAll();
?>
<?php
if (!defined('FLUX_ROOT')) exit;

$fmenus4	= Flux::config('FluxTables.CMSSettingsTable');
$sql = "SELECT id, option_set, option_body, modified created FROM {$server->loginDatabase}.$fmenus4 WHERE id IN (34,35) ORDER BY id ASC";


$sth = $server->connection->getStatement($sql);
$sth->execute();

$fmenus4 = $sth->fetchAll();
?>
<?php
if (!defined('FLUX_ROOT')) exit;

$cfmenus	= Flux::config('FluxTables.CMSSettingsTable');
$sql = "SELECT id, option_set, option_body, modified created FROM {$server->loginDatabase}.$cfmenus WHERE id IN (36) ORDER BY id ASC";


$sth = $server->connection->getStatement($sql);
$sth->execute();

$cfmenus = $sth->fetchAll();
?>
<?php
if (!defined('FLUX_ROOT')) exit;

$cfmenus2	= Flux::config('FluxTables.CMSSettingsTable');
$sql = "SELECT id, option_set, option_body, modified created FROM {$server->loginDatabase}.$cfmenus2 WHERE id IN (37) ORDER BY id ASC";


$sth = $server->connection->getStatement($sql);
$sth->execute();

$cfmenus2 = $sth->fetchAll();
?>
<?php
if (!defined('FLUX_ROOT')) exit;

$cfmenus3	= Flux::config('FluxTables.CMSSettingsTable');
$sql = "SELECT id, option_set, option_body, modified created FROM {$server->loginDatabase}.$cfmenus3 WHERE id IN (38) ORDER BY id ASC";


$sth = $server->connection->getStatement($sql);
$sth->execute();

$cfmenus3 = $sth->fetchAll();
?>
        <footer class="footer">
    <div class="content-area">
        <div class="footer__cpr">
            <div class="footer__cpr-logo">
                <img class="footer__cpr-logo-emblem" src="/ragfile/core/logo.png" alt="" style="width: 55px;">
                <p class="footer__cpr-logo-text"><?php echo Flux::config('SiteTitle'); ?></p>
            </div>
            <div class="footer__cpr-title">© 2020-2024 <?php echo Flux::config('SiteTitle'); ?></div>
            <div class="footer__cpr-text">Cloning Site by RagProject.</div>
            <div class="footer__cpr-links">
                <?php if($fmenus4): ?>
            <?php foreach($fmenus4 as $prow):?>    
                    <a href="<?php echo $prow->option_body?>"><span><?php echo $prow->option_set?></span></a>
            <?php endforeach;?>
            <?php endif ?>
            </div>
            <a class="unsimple" href="https://ragproject.com/" target="_blank" rel="dofollow" title="Website Developed by RagProject">
                <div class="unsimple__copyright">
                    <p>Cloned by</p>
                    <span>RagProject</span>
                </div>
            </a>
        </div>
        <div class="footer__links">
            <?php if($cfmenus): ?>
            <?php foreach($cfmenus as $prow):?>
            <div class="footer__links-group">
                <div class="footer__links-group-title"><?php echo $prow->option_set?></div>
            <?php endforeach;?>
            <?php endif ?>
                <ul>
                    <?php if($fmenus): ?>
            <?php foreach($fmenus as $prow):?>    
                    <li><a href="<?php echo $prow->option_body?>"><span><?php echo $prow->option_set?></span></a></li>
            <?php endforeach;?>
            <?php endif ?>
                </ul>
            </div>
            <?php if($cfmenus2): ?>
            <?php foreach($cfmenus2 as $prow):?>
            <div class="footer__links-group">
                <div class="footer__links-group-title"><?php echo $prow->option_set?></div>
            <?php endforeach;?>
            <?php endif ?>
                <ul>
                    <?php if($fmenus2): ?>
            <?php foreach($fmenus2 as $prow):?>    
                    <li><a href="<?php echo $prow->option_body?>"><span><?php echo $prow->option_set?></span></a></li>
            <?php endforeach;?>
            <?php endif ?>
                </ul>
            </div>
            <?php if($cfmenus3): ?>
            <?php foreach($cfmenus3 as $prow):?>
            <div class="footer__links-group">
                <div class="footer__links-group-title"><?php echo $prow->option_set?></div>
            <?php endforeach;?>
            <?php endif ?>
                <ul>
                    <?php if($fmenus3): ?>
            <?php foreach($fmenus3 as $prow):?>    
                    <li><a href="<?php echo $prow->option_body?>"><span><?php echo $prow->option_set?></span></a></li>
            <?php endforeach;?>
            <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
    </div>

	<script src="<?php echo $this->themePath('assets/libs/jquery/jquery-3.6.0.min.js') ?>" ></script>
	<script src="<?php echo $this->themePath('assets/libs/jquery/jquery-migrate-1.4.1.min.js') ?>" ></script>
	<script src="<?php echo $this->themePath('assets/libs/swiper/swiper.js') ?>" ></script>
	<script src="<?php echo $this->themePath('assets/libs/select/jquery.mCustomScrollbar.js') ?>" ></script>
	<script src="<?php echo $this->themePath('assets/libs/select/jquery.nselect.js') ?>" ></script>
	<script src="<?php echo $this->themePath('assets/js/airascript.js') ?>" ></script>
	<script type="text/javascript" src="https://storage.sociabuzz.com/storage/js/main/buttononwebsite/index.min.js"></script><script>sbBoW.draw("ragproject","RG9uYXRpb24","position-bottom-left","#e20000","#FFFFFF")</script>
</body>

</html>
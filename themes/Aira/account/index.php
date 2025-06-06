<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../pmenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Server features</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            
                            <form action="<?php echo $this->url ?>" method="get" class="search-form">
	<?php echo $this->moduleActionFormInputs($params->get('module')) ?>
	<p>
		<
		<label for="username"><?php echo htmlspecialchars(Flux::message('UsernameLabel')) ?>:</label>
		<input type="text" name="username" id="username" value="<?php echo htmlspecialchars($params->get('username') ?: '') ?>" />
		
		<input type="submit" value="<?php echo htmlspecialchars(Flux::message('SearchButton')) ?>" />
		<input type="button" value="<?php echo htmlspecialchars(Flux::message('ResetButton')) ?>" onclick="reload()" />
	</p>
</form>
<?php if ($accounts): ?>
<?php echo $paginator->infoText() ?>
<table class="horizontal-table">
	<tr>
		<th><?php echo $paginator->sortableColumn('login.account_id', Flux::message('AccountIdLabel')) ?></th>
		<th><?php echo $paginator->sortableColumn('login.userid', Flux::message('UsernameLabel')) ?></th>
		<?php if ($showPassword): ?><th><?php echo $paginator->sortableColumn('login.user_pass', Flux::message('PasswordLabel')) ?></th><?php endif ?>
		<th><?php echo $paginator->sortableColumn('login.sex', Flux::message('GenderLabel')) ?></th>
		<th><?php echo $paginator->sortableColumn('group_id', Flux::message('AccountGroupIDLabel')) ?></th>
		<th><?php echo $paginator->sortableColumn('state', Flux::message('AccountStateLabel')) ?></th>
		<th><?php echo $paginator->sortableColumn('balance', Flux::message('CreditBalanceLabel')) ?></th>
		<th><?php echo $paginator->sortableColumn('login.email', Flux::message('EmailAddressLabel')) ?></th>
		<th><?php echo $paginator->sortableColumn('logincount', Flux::message('LoginCountLabel')) ?></th>
		<th><?php echo $paginator->sortableColumn('birthdate', Flux::message('AccountBirthdateLabel')) ?></th>
		<th><?php echo $paginator->sortableColumn('lastlogin', Flux::message('LastLoginDateLabel')) ?></th>
		<th><?php echo $paginator->sortableColumn('last_ip', Flux::message('LastUsedIpLabel')) ?></th>
		<!-- <th><?php echo $paginator->sortableColumn('reg_date', 'Register Date') ?></th> -->
	</tr>
	<?php foreach ($accounts as $account): ?>
	<tr>
		<td align="right">
			<?php if ($auth->actionAllowed('account', 'view') && $auth->allowedToViewAccount): ?>
				<?php echo $this->linkToAccount($account->account_id, $account->account_id) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($account->account_id) ?>
			<?php endif ?>
		</td>
		<td><?php echo htmlspecialchars($account->userid) ?></td>
		<?php if ($showPassword): ?><td><?php echo htmlspecialchars($account->user_pass) ?></td><?php endif ?>
		<td>
			<?php if ($gender = $this->genderText($account->sex)): ?>
				<?php echo htmlspecialchars($gender) ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('UnknownLabel')) ?></span>
			<?php endif ?>
		</td>
		<td><?php echo (int)$account->group_id ?></td>
		<td>
			<?php if (!$account->confirmed && $account->confirm_code): ?>
				<span class="account-state state-pending">
					<?php echo htmlspecialchars(Flux::message('AccountStatePending')) ?>
				</span>
			<?php elseif (($state = $this->accountStateText($account->state)) && !$account->unban_time): ?>
				<?php echo $state ?>
			<?php elseif ($account->unban_time): ?>
				<span class="account-state state-banned">
					<?php echo htmlspecialchars(sprintf(Flux::message('AccountStateTempBanned'), date(Flux::config('DateTimeFormat'), $account->unban_time))) ?>
				</span>
			<?php else: ?>
				<span class="account-state state-unknown"><?php echo htmlspecialchars(Flux::message('UnknownLabel')) ?></span>
			<?php endif ?>
		</td>
		<td><?php echo number_format((int)$account->balance) ?></td>
		<td>
			<?php if ($account->email): ?>
				<?php echo $this->linkToAccountSearch(array('email' => $account->email), $account->email) ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('NoneLabel')) ?></span>
			<?php endif ?>
		</td>
		<td><?php echo number_format((int)$account->logincount) ?></td>
		<td><?php echo $account->birthdate ?></td>
		<td>
			<?php if (!$account->lastlogin || $account->lastlogin <= '1000-01-01 00:00:00'): ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('NeverLabel')) ?></span>
			<?php else: ?>
				<?php echo $this->formatDateTime($account->lastlogin) ?>
			<?php endif ?>
		</td>
		<td>
			<?php if ($account->last_ip): ?>
				<?php echo $this->linkToAccountSearch(array('last_ip' => $account->last_ip), $account->last_ip) ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('NoneLabel')) ?></span>
			<?php endif ?>
		</td>
		<!-- <td>
			<?php if (!$account->reg_date || $account->reg_date <= '1000-01-01 00:00:00'): ?>
				<span class="not-applicable">Unknown</span>
			<?php else: ?>
				<?php echo $this->formatDateTime($account->reg_date) ?>
			<?php endif ?>
		</td> -->
	</tr>
	<?php endforeach ?>
</table>
<?php echo $paginator->getHTML() ?>
<?php else: ?>
<p>
	<?php echo htmlspecialchars(Flux::message('AccountIndexNotFound')) ?>
	<a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('GoBackLabel')) ?></a>
</p>
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
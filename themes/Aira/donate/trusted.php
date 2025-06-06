<?php include __DIR__ . "/../rheader.php"; ?>
                            <main id="main-container" style="min-height: 612px;">
                                                    <div class="content content-full">
                        <div class="my-10 text-center">
    <h2 class="font-w700 text-black mb-10"><?php echo Flux::config('SiteTitle'); ?></h2>
    <h3 class="h5 text-muted mb-0">Trusted PayPal E-mails</h3>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="block block-rounded block-fx-shadow">
            <div class="price">
                </br>
    <div class="text-center"><?php if ($emails): ?>
<p>Below is a list of your trusted PayPal e-mail addresses.</p>
<p>Trusted e-mails do not undergo any holding process, therefore donations made by them will allow you to receive your credits <strong>instantly</strong>.</p>
<table class="vertical-table">
	<tr>
		<th>E-mail Address</th>
		<th>Date/Time Established</th>
	</tr>
	<?php foreach ($emails as $email): ?>
	<tr>
		<td><?php echo htmlspecialchars($email->email) ?></td>
		<td><?php echo $this->formatDateTime($email->create_date) ?></td>
	</tr>
	<?php endforeach ?>
</table>
<?php else: ?>
<p>You do not have any trusted PayPal e-mail addresses.</p>
<?php if (!Flux::config('HoldUntrustedAccount')): ?>
<p>This is most likely because the credit holding system is currently <strong>not in effect</strong>, which means a donation made from any e-mail address is immediately accredited.</p>
<?php endif ?>
<?php endif ?>
</div>
    <br>
</div>
        </div>

    </div>

</div>
                    </div>
                            </main>
<?php include __DIR__ . "/../rfooter.php"; ?>
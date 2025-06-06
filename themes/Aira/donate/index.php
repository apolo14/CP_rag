<?php include __DIR__ . "/../rheader.php"; ?>
                            <main id="main-container" style="min-height: 612px;">
                                                    <div class="content content-full">
                        <div class="my-10 text-center">
    <h2 class="font-w700 text-black mb-10"><?php echo Flux::config('SiteTitle'); ?></h2>
    <h3 class="h5 text-muted mb-0">Top-up Balance</h3>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="block block-rounded block-fx-shadow">
            <div class="price">
                </br>
    <div class="text-center"><h2>Donate</h2>
<?php if (Flux::config('AcceptDonations')): ?>
	<?php if (!empty($errorMessage)): ?>
		<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
	<?php endif ?>
	
	<p>By donating, you're supporting the costs of <em>running</em> this server and <em>maintaining</em> it.  In return, you will be rewarded <span class="keyword">donation credits</span> that you may use to purchase items from our <a href="/store/cashshop">item shop</a>.</p>
	<h3>Are you ready to donate?</h3>
	<p>All donations towards us are received by PayPal, but don't worry!  Even if you don't have an account with PayPal, you can still use your credit card to donate!</p>
		
	<?php
	$currency         = Flux::config('DonationCurrency');
	$dollarAmount     = (float)+Flux::config('CreditExchangeRate');
	$creditAmount     = 1;
	$rateMultiplier   = 10;
	$hoursHeld        = +(int)Flux::config('HoldUntrustedAccount');
	
	while ($dollarAmount < 1) {
		$dollarAmount  *= $rateMultiplier;
		$creditAmount  *= $rateMultiplier;
	}
	?>
	
	<?php if ($hoursHeld): ?>
		<p>To prevent fraudulent payments, our server currently locks the crediting process for
			<span class="hold-hours"><?php echo number_format($hoursHeld) ?> hours</span>
			after the donation has been made to ensure legitimate gameplay and a healthy PayPal reputation.</p>
		<p>This hold is applied only once for the associated PayPal e-mail and RO account.</p>
	<?php endif ?>

	<div class="generic-form-div" style="margin-bottom: 10px">
		<table class="generic-form-table">
			<tr>
				<th><label>Current Credit Exchange Rate:</label></th>
				<td><p><?php echo $this->formatCurrency($dollarAmount) ?> <?php echo htmlspecialchars($currency) ?>
				= <?php echo number_format($creditAmount) ?> credit(s).</p></td>
			</tr>
			<tr>
				<th><label>Minimum Donation Amount:</label></th>
				<td><p><?php echo $this->formatCurrency(Flux::config('MinDonationAmount')) ?> <?php echo htmlspecialchars($currency) ?></p></td>
			</tr>
		</table>
	</div>
		
	<?php if (!$donationAmount): ?></div>
    <br>
</div>

	<form action="<?php echo $this->url ?>" method="post">
		<?php echo $this->moduleActionFormInputs($params->get('module')) ?>
		<input type="hidden" name="setamount" value="1" />
		<div class="block-content pl-50 pr-50">
                    <div class="row">
                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="recipient" id="recipient-label"><?php echo htmlspecialchars(Flux::config('DonationCurrency')) ?></label>
                                                <div class="input-group">
                                                    	<input class="form-control" type="number" min="0" name="amount"
					value="<?php echo htmlspecialchars($params->get('amount') ?: 0) ?>"
					size="<?php echo (strlen((string)+Flux::config('CreditExchangeRate')) * 2) + 2 ?>" />
                                                </div>
                                            </div>
                            </div>
                                                </div>
                    </div>
                    <div class="block-content block-content-sm block-content-full bg-body-light text-center mt-20">
                        <input type="submit" value="Confirm Donation Amount" type="submit" class="btn btn-alt-primary" />
                </div>
	</form>
	<?php else: ?>
	<p>When you're ready to donate, click the big “Donate” button to proceed with your transaction.
		(You can choose to donate from your existing PayPal balance or use your credit card if you don't have an account).</p>
		
	<p class="credit-amount-text">
		&mdash;
		<span class="credit-amount"><?php echo number_format(floor($donationAmount / Flux::config('CreditExchangeRate'))) ?></span> credits
		&mdash;
	</p>
		
	<p class="donation-amount-text">Amount:
		<span class="donation-amount">
		<?php echo $this->formatCurrency($donationAmount) ?>
		<?php echo htmlspecialchars(Flux::config('DonationCurrency')) ?>
		</span>
	</p>
	<p class="reset-amount-text">
		<a href="<?php echo $this->url('donate', 'index', array('resetamount' => true)) ?>">(Reset Amount)</a>
	</p>
	<p><?php echo $this->donateButton($donationAmount) ?></br></p>
	<?php endif ?>
<?php else: ?>
	<p><?php echo Flux::message('NotAcceptingDonations') ?></p>
<?php endif ?>

        </div>

    </div>

</div>



<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        $("#sum_slider").ionRangeSlider({
            min: 1,
            max: 15000,
            from: 50,
            grid: true,
            postfix: ' Balance',
            skin: 'round',
            prettify: function (num) {
                let bonus = 0;
                let bonus_item = [];
                let bonus_item_key = [];
                let bonus_item_html = '<div class="row border-bottom text-center pt-5" style="border-bottom-style: dashed !important;"><div class="col-12">Gift items</div></div>';
                let bonus_item_show = false;
                let payment_method = $("input[name='payment_method']:checked"). val();
                let price = parseFloat($("input[name='type_id']:checked").data('price'));

                
                                    let temp_agrigator_824 = ["all"];
                    if(temp_agrigator_824.includes(payment_method) || temp_agrigator_824.includes('all')){
                                    if (Math.floor(num * price) >= 5 && Math.floor(num * price) <= 49) {
                                bonus += (Math.floor(num * price) * 20 / 100);
                                                            }
                                    else if (Math.floor(num * price) >= 50 && Math.floor(num * price) <= 149) {
                                bonus += (Math.floor(num * price) * 30 / 100);
                                                            }
                                    else if (Math.floor(num * price) >= 150 && Math.floor(num * price) <= 349) {
                                bonus += (Math.floor(num * price) * 35 / 100);
                                                            }
                                    else if (Math.floor(num * price) >= 350 && Math.floor(num * price) <= 649) {
                                bonus += (Math.floor(num * price) * 40 / 100);
                                                            }
                                    else if (Math.floor(num * price) >= 650 && Math.floor(num * price) <= 1349) {
                                bonus += (Math.floor(num * price) * 45 / 100);
                                                            }
                                    else if (Math.floor(num * price) >= 1350 && Math.floor(num * price) <= 2749) {
                                bonus += (Math.floor(num * price) * 50 / 100);
                                                            }
                                    else if (Math.floor(num * price) >= 2750 && Math.floor(num * price) <= 3999) {
                                bonus += (Math.floor(num * price) * 55 / 100);
                                                            }
                                    else if (Math.floor(num * price) >= 4000 && Math.floor(num * price) <= 10000) {
                                bonus += (Math.floor(num * price) * 60 / 100);
                                                            }
                                        }
                                    
                $.each( bonus_item_key, function( key, value ) {
                    if (value !== "undefined"){
                        if (typeof bonus_item[key] !== "undefined") {
                            if (typeof bonus_item[key][value] !== "undefined") {
                                bonus_item_show = true;
                                $.each( bonus_item[key][value], function( idx, item ) {
                                    bonus_item_html += '<div class="row border-bottom pt-5"><div class="col-10"><img src="'+item.icon+'" width="15px"> '+item.name+' '+item.add_name+' '+(item.enc > 0 ? '<span style="color: #bbb529">+'.item.enc+'</span>' : '')+' </div><div class="col-2"><span class="pull-right"><span>'+item.count+'</span>x</span></div></div>';
                                });

                            }
                        }
                    }
                });

                if (bonus_item_show){
                    $('#calculation_board').removeClass('col-md-12').addClass("col-md-6");
                    $('#item_board').html(bonus_item_html);
                    $('#item_board').show();
                }else{
                    $('#calculation_board').removeClass('col-md-6').addClass("col-md-12");
                    $('#item_board').html('');
                    $('#item_board').hide();
                }


                /*calculation_board item_board*/

                if(bonus > 0){
                    $('#bonus_sum').html('+'+ Math.floor(bonus / price) + ' Bonus');
                    return num+", "+"+"+Math.floor(bonus / price)+" ";
                }else{
                    $('#bonus_sum').html('+'+ 0);
                    return num;
                }

            },
            onChange: function (data) {
                $('#coin').val(data.from);
                changeSum(data.from,true);
            }
        });
        var sum_slider = $("#sum_slider").data("ionRangeSlider");

        window.changeSum = function(sum,slider){

            let price = $("input[name='type_id']:checked").data('price');

            var sum_usd = Math.round(((sum*(1*parseFloat(price)))*1)*100)/100;

            $('.sum').val(sum_usd);
            let oi = 0;
                        oi = findFirstNonZeroIndex('1');
            $('#sum_USD').html(Math.ceil(sum_usd*1*oi)/oi);
                        oi = findFirstNonZeroIndex('87.251208');
            $('#sum_RUB').html(Math.ceil(sum_usd*87.251208*oi)/oi);
                        oi = findFirstNonZeroIndex('0.933926');
            $('#sum_EUR').html(Math.ceil(sum_usd*0.933926*oi)/oi);
                        oi = findFirstNonZeroIndex('40.518065');
            $('#sum_UAH').html(Math.ceil(sum_usd*40.518065*oi)/oi);
                        $('#sum_USD').html(sum_usd);

            if(!slider){
                sum_slider.update({
                    from: sum
                });
            }
        };
        function findFirstNonZeroIndex(num) {
            let numberString = Number(num).toLocaleString('fullwide', { maximumSignificantDigits: 21 }).replace('.', '');
            let oi = Array.from(numberString).findIndex(i => i > 0);
            let pos = '10';
            for (var i = 0; i < oi; i++) {
                pos += '0';
            }
            pos = parseInt(pos);
            if (pos < 100) pos = 100;
            return parseInt(pos);
        }
        function initInGame() {
            let input = $("input[name='type_id']:checked");
            let message = input.data('message');
            let long_name = input.data('long-name');
            let short_name = input.data('short-name');
            let type = input.data('type');
            setTextInputInGame(type, message, long_name, short_name);
        }
        function setTextInputInGame(type, message, long_name, short_name) {

            if (type == 'account'){
                $('#recipient-label').html('Specify any "Game Login" from the master account');
                $('.type_icon').html('<i class="fa fa-user"></i>');
                $('#recipient').attr("placeholder", "XX_Login");
            }else{
                $('#recipient-label').html('Specify name of the character');
                $('.type_icon').html('<i class="fa fa-street-view"></i>');
                $('#recipient').attr("placeholder", "MegaMag");
            }

            $('.short_name_icon').html('<i class="fa fa-plus-square"></i>');
            if (short_name.length) {
                $('.short_name_icon').html(short_name);
                let slider = $("#sum_slider").data("ionRangeSlider");
                if(slider){
                    slider.update({
                        postfix: ' '+short_name,
                    });
                }
            }
            if (long_name.length)
                $('#coin').attr("placeholder", "Specify quantity " + long_name);

            $('.in-game-message').html('');
            if (message.length)
                $('.in-game-message').html(message.replace(/\n/g, '<br>'));


        }
        initInGame();


        $('body').on('change', "input[name='type_id']", function (e) {
            let type = $(this).data('type');
            let message = $(this).data('message');
            let long_name = $(this).data('long-name');
            let short_name = $(this).data('short-name');

            setTextInputInGame(type, message, long_name, short_name);


            window.changeSum(document.getElementById("coin").value,true);
        });

        window.changeSum(document.getElementById("coin").value,true);
    });
</script>


                    </div>
                            </main>
<?php include __DIR__ . "/../rfooter.php"; ?>
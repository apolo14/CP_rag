<?php include __DIR__ . "/../rheader.php"; ?>
                            <main id="main-container" style="min-height: 612px;">
                                                    <div class="content content-full">
                        <div class="my-10 text-center">
    <h2 class="font-w700 text-black mb-10"><?php echo Flux::config('SiteTitle'); ?></h2>
    <h3 class="h5 text-muted mb-0">Donation Complete</h3>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="block block-rounded block-fx-shadow">
            <div class="price">
                </br>
    <div class="text-center"><p class="important">Your transaction has been processed and you should receive credits in a short amount of time.</p>
<?php $hoursHeld = +(int)Flux::config('HoldUntrustedAccount'); ?>
<?php if ($hoursHeld): ?>
	<p>
		Note: There is currently an account holding system in effect. If this is your first time donating with the selected account
		and configured PayPal e-mail address, you will not receive your credits for <?php echo number_format($hoursHeld) ?> hours.
	</p>
<?php endif ?>
<p>Additionally, an e-mail has been sent to you outlining the details of your transaction.</p>
<p>You may also view your account history from your PayPal account.</p>

<br />
<br />
<p class="important" style="text-align: center; font-weight: bold">“Thank you for your generous donation!”</p>
<p class="important" style="text-align: center">&mdash; <?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?></p>

</div>
    <br>
</div>
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
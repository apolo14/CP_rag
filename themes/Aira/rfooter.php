		<script>
    document.addEventListener("DOMContentLoaded", function (event) {


       /* function onSubmitReInv(token) {
            $('#captcha').val(token);
            document.getElementById("form_signup").submit();

        }*/

        $('.nav-tabs').on('click', '.nav-link',function(){
            $('#type_reg').val($(this).attr('href'));
        });
        $('.nav-link.active').click();

                $("#eye").click(function () {
            const this__ = $(this).find('.fa');
            const password = $("#t-signup-password");

            if (password.attr("type") === "password") {
                password.attr("type", "text");
                this__.removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                password.attr("type", "password");
                this__.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });

    });
</script>
		<script type="text/javascript">
			function updatePreferredServer(sel){
				var preferred = sel.options[sel.selectedIndex].value;
				document.preferred_server_form.preferred_server.value = preferred;
				document.preferred_server_form.submit();
			}

			function updatePreferredTheme(sel){
				var preferred = sel.options[sel.selectedIndex].value;
				document.preferred_theme_form.preferred_theme.value = preferred;
				document.preferred_theme_form.submit();
			}

			function updatePreferredLanguage(sel){
				var preferred = sel.options[sel.selectedIndex].value;
				setCookie('language', preferred);
				reload();
			}

			// Preload spinner image.
			var spinner = new Image();
			spinner.src = '<?php echo $this->themePath('img/spinner.gif') ?>';

			function refreshSecurityCode(imgSelector){
				$(imgSelector).attr('src', spinner.src);

				// Load image, spinner will be active until loading is complete.
				var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
				var image = new Image();
				image.src = "<?php echo $this->url('captcha') ?>"+(clean ? '?nocache=' : '&nocache=')+Math.random();

				$(imgSelector).attr('src', image.src);
			}
			function toggleSearchForm(){
				//$('.search-form').toggle();
				$('.search-form').slideToggle('fast');
			}

			function setCookie(key, value){
				var expires = new Date();
				expires.setTime(expires.getTime() + expires.getTime()); // never expires
				document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
			}
		</script>

		<?php if (Flux::config('EnableReCaptcha') && Flux::config('ReCaptchaTheme')): ?>
			<script type="text/javascript">
				var RecaptchaOptions = {
					theme : '<?php echo Flux::config('ReCaptchaTheme') ?>'
				};
			</script>
		<?php endif ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var inputs = 'input[type=text],input[type=password],input[type=file]';
				$(inputs).focus(function(){
					$(this).css({
						'background-color': '#f9f5e7',
						'border-color': '#dcd7c7',
						'color': '#726c58'
					});
				});
				$(inputs).blur(function(){
					$(this).css({
						'backgroundColor': '#ffffff',
						'borderColor': '#dddddd',
						'color': '#444444'
					}, 500);
				});
				$('.menuitem a').hover(
					function(){
						$(this).fadeTo(200, 0.85);
						$(this).css('cursor', 'pointer');
					},
					function(){
						$(this).fadeTo(150, 1.00);
						$(this).css('cursor', 'normal');
					}
				);
				$('.money-input').keyup(function() {
					var creditValue = parseInt($(this).val() / <?php echo Flux::config('CreditExchangeRate') ?>, 10);
					if (isNaN(creditValue))
						$('.credit-input').val('?');
					else
						$('.credit-input').val(creditValue);
				}).keyup();
				$('.credit-input').keyup(function() {
					var moneyValue = parseFloat($(this).val() * <?php echo Flux::config('CreditExchangeRate') ?>);
					if (isNaN(moneyValue))
						$('.money-input').val('?');
					else
						$('.money-input').val(moneyValue.toFixed(2));
				}).keyup();
			});

			function reload(){ window.location.href = '<?php echo $this->url ?>'; }
		</script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="<?php echo $this->themePath('assets/js/qAiri.core.min.js') ?>" ></script>
        <script src="<?php echo $this->themePath('assets/js/qAiri.app.min.js') ?>" ></script>
        <script src="<?php echo $this->themePath('assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js') ?>" ></script>
        <script src="<?php echo $this->themePath('assets/js/plugins/bootstrap-history-tabs/bootstrap-history-tabs.js') ?>" ></script>
        <script src="<?php echo $this->themePath('assets/js/plugins/masonry/masonry.pkgd.min.js') ?>" ></script>
        <script src="<?php echo $this->themePath('assets/js/Airimmoweb.js') ?>" ></script>
        <script>window.masonry_div = $('.grid').masonry({itemSelector: '.grid-item',columnWidth: '.grid-sizer',percentPosition: true});$('.nav-tabs a').historyTabs();</script>   
        <script type="text/javascript" src="https://storage.sociabuzz.com/storage/js/main/buttononwebsite/index.min.js"></script><script>sbBoW.draw("ragproject","RG9uYXRpb24","position-bottom-left","#e20000","#FFFFFF")</script>
        </body>
</html>
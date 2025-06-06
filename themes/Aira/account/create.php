<?php include __DIR__ . "/../rheader.php"; ?>
            <main id="main-container">
                                                    <div class="row mx-0 justify-content-center">
    <div class="col-lg-6 col-xl-4">
        <div class="content content-full overflow-hidden">
            <!-- Header -->
            <div class="pb-20 text-center">
                <h1 class="h4 font-w700 mt-30 mb-10">Welcome to the Account Panel</h1>
            </div>
            <!-- END Header -->

<form action="<?php echo $this->url ?>" method="post">
	<?php if (count($serverNames) === 1): ?>
	<input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
	<?php endif ?>
	<div class="block block-themed block-rounded block-shadow ">
	    <div class="block-header bg-gd-emerald">
                        <h3 class="block-title">Sign up a account</h3>
                        
                    </div>
	    <ul class="nav nav-tabs nav-tabs-alt row no-gutters">


                                                                                                                        <li class="nav-item col-12">
                            <a class="nav-link active "><i class="fa fa-user-plus"></i> Sign Up Form</a>
                        </li>
                        
                        
                    </ul>
		<?php if (count($serverNames) > 1): ?>
		
			<label for="register_server"><?php echo htmlspecialchars(Flux::message('AccountServerLabel')) ?></label>
			
				<select name="server" id="register_server"<?php if (count($serverNames) === 1) echo ' disabled="disabled"' ?>>
				<?php foreach ($serverNames as $serverName): ?>
					<option value="<?php echo htmlspecialchars($serverName) ?>"<?php if ($params->get('server') == $serverName) echo ' selected="selected"' ?>><?php echo htmlspecialchars($serverName) ?></option>
				<?php endforeach ?>
				</select>
			
		
		<?php endif ?>
        <div class="block-content">
		<div class="form-group row">
                                    <div class="col-12">
			<label for="register_username"><?php echo htmlspecialchars(Flux::message('AccountUsernameLabel')) ?></label>
			<input type="text" class="form-control" name="username" id="register_username" value="<?php echo htmlspecialchars($params->get('username') ?: '') ?>" />
			</div>
			</div>
		

		
		<div class="form-group row">
                                    <div class="col-12">
			<label for="register_password"><?php echo htmlspecialchars(Flux::message('AccountPasswordLabel')) ?></label>
			<input type="password" class="form-control" name="password" id="register_password" />
		</div>
		</div>

		
		<div class="form-group row">
                                    <div class="col-12">
			<label for="register_confirm_password"><?php echo htmlspecialchars(Flux::message('AccountPassConfirmLabel')) ?></label>
			<input type="password" class="form-control" name="confirm_password" id="register_confirm_password" />
		</div>
        </div>
		
		<div class="form-group row">
                                    <div class="col-12">
			<label for="register_email_address"><?php echo htmlspecialchars(Flux::message('AccountEmailLabel')) ?></label>
			<input type="text" name="email_address" class="form-control" id="register_email_address" value="<?php echo htmlspecialchars($params->get('email_address') ?: '') ?>" />
		</div>
        </div>
		
		<div class="form-group row">
                                    <div class="col-12">
			<label for="register_email_address"><?php echo htmlspecialchars(Flux::message('AccountEmailLabel2')) ?></label>
			<input type="text" name="email_address2" id="register_email_address2" class="form-control" value="<?php echo htmlspecialchars($params->get('email_address2') ?: '') ?>" />
		</div>
		</div>
		
		<div class="form-group add-login" >
                                <label for="t-signup-server"><?php echo htmlspecialchars(Flux::message('AccountGenderLabel')) ?> <strong title="<?php echo htmlspecialchars(Flux::message('AccountCreateGenderInfo')) ?>">?</strong></label>
                                                                                                <select class="form-control" name="gender" id="register_gender_m register_gender_f">
                                                                                                                                                                        <option value="M"<?php if ($params->get('gender') === 'M') echo ' checked="checked"' ?> > <?php echo $this->genderText('M') ?></option>
                            <option value="F"<?php if ($params->get('gender') === 'F') echo ' checked="checked"' ?> > <?php echo $this->genderText('F') ?></option>
                                                                                                                                                        </select>
                            </div>
		
        <div class="form-group row">
                                <div class="col-12">
                                    <label><?php echo htmlspecialchars(Flux::message('AccountBirthdateLabel')) ?></label>
                                    <div class="input-group">

                                        <input type="date" class="form-control" name="birthdate_date" id="birthdate_date" value="<?php echo htmlspecialchars($params->get('birthdate_date') ?: '') ?>" placeholder="Your Birthdate">
                                    </div>
                                </div>
                            </div>
                            
		<?php if (Flux::config('UseCaptcha')): ?>
		
		<div class="form-group row">
                                    <div class="col-12">
			<?php if (Flux::config('ReCaptchaPublicKey') === '...' || Flux::config('ReCaptchaPrivateKey') === '...'): ?>
            <label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label>
			<div class="no-recaptcha" style="color: red"><?php echo htmlspecialchars(Flux::message('AccountRecaptchaKey')) ?></div>
			<?php else: ?>
			<?php if (Flux::config('EnableReCaptcha')): ?>
			<label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label>
			<div class="g-recaptcha" data-theme = "<?php echo $theme;?>" data-sitekey="<?php echo $recaptcha ?>"></div>
			<?php else: ?>
			<label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label>
			
				<div class="security-code">
					<img src="<?php echo $this->url('captcha') ?>" />
				</div>

				<input type="text" name="security_code" id="register_security_code" />
				<div style="font-size: smaller;" class="action">
					<strong><a href="javascript:refreshSecurityCode('.security-code img')"><?php echo htmlspecialchars(Flux::message('RefreshSecurityCode')) ?></a></strong>
				</div>
			
			<?php endif ?>
			<?php endif ?>
		
		<?php endif ?>
		 <div class="form-group row mb-0">
                                <div class="col-sm-12 push">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="signup-terms" name="terms">
                                        <label class="custom-control-label" for="signup-terms">I have read and accept the User Agreement</label>
                                    </div>
                                                                            
                                                                    </div>
                                <div class="col-sm-12 text-sm-right push">

                                    <button type="submit" class="btn btn-alt-success">
                                       <?php echo htmlspecialchars(Flux::message('AccountCreateButton')) ?>                                    </button>
                                </div>
                            </div>
			
			</div>
			<div class="block-content bg-body-light">
                        <div class="form-group text-center">
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/terms" target="_blank">
                                <i class="fa fa-book text-muted mr-5"></i> Read the User Agreement                            </a>
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/account/create">
                                <i class="fa fa-user-plus text-muted mr-5"></i> Sign up                            </a>
                        </div>
                    </div>
		</div>
		
	</div>
</form>

    </div>
</div>
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
                 </main>
            <!-- END Main Container -->
                                <!-- Pop Out Modal -->
                <div class="modal fade" id="modal-ajax" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-popout" role="document">
                        <div class="modal-content">
                            <form class="modal-ajax-form" action="/input" method="post" onsubmit="return false;">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title modal-ajax-title"></h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content modal-ajax-content"></div>
                                </div>
                                <div class=" modal-ajax-footer block-content block-content-sm block-content-full bg-body-light block-settings-save-fix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END Pop Out Modal -->
        </div>
        <!-- END Page Container -->
<?php include __DIR__ . "/../rfooter.php"; ?>
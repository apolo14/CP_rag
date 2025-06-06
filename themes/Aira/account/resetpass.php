<?php include __DIR__ . "/../rheader.php"; ?>

<!-- END Header -->
            <!-- Main Container -->
            <main id="main-container">
                                                    <div class="row mx-0 justify-content-center">
    <div class="col-lg-6 col-xl-4">
        <div class="content content-full overflow-hidden">
            <!-- Header -->
            <div class="pb-20 text-center">
                <h1 class="h4 font-w700 mt-30 mb-10">Welcome to the Account Panel</h1>
            </div>
            <!-- END Header -->

            <form action="<?php echo $this->urlWithQs ?>" method="post">
	<?php if (count($serverNames) > 1): ?>
		
			<label for="login"><?php echo htmlspecialchars(Flux::message('ResetPassServerLabel')) ?></label>
			
				<select name="login" id="login"<?php if (count($serverNames) === 1) echo ' disabled="disabled"' ?>>
				<?php foreach ($serverNames as $serverName): ?>
					<option value="<?php echo htmlspecialchars($serverName) ?>"<?php if ($params->get('server') == $serverName) echo ' selected="selected"' ?>><?php echo htmlspecialchars($serverName) ?></option>
				<?php endforeach ?>
				</select>
			
			<p><?php echo htmlspecialchars(Flux::message('ResetPassServerInfo')) ?></p>
		
		<?php endif ?>
                <div class="block block-themed block-rounded block-shadow ">

                                        <div class="block-header bg-gd-emerald">
                        <h3 class="block-title">Account recovery</h3>
                        
                    </div>
                    

                    <ul class="nav nav-tabs nav-tabs-alt row no-gutters">


                                                                                                                        <li class="nav-item col-12">
                            <a class="nav-link active "><i class="bi bi-person-fill"></i> Reset Pass Form</a>
                        </li>
                        
                        
                    </ul>

                    <div class="block-content">
                                                    
                                                <div class="tab-content">
                                                        <div class="tab-pane active " id="r-email" role="tabpanel">

                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="userid"><?php echo htmlspecialchars(Flux::message('ResetPassAccountLabel')) ?></label>
                                        <input type="text" class="form-control" id="userid" name="userid" placeholder="your username">
                                                                                    <div class="form-text text-muted"><?php echo htmlspecialchars(Flux::message('ResetPassAccountInfo')) ?></div>
                                        
                                    </div>
                                </div>

                            </div>
                                                                                </div>




                                                    <div class="form-group row">
                                <div class="col-12">
                                    <label for="email"><?php echo htmlspecialchars(Flux::message('ResetPassEmailLabel')) ?></label>
                                    <div class="input-group">

                                        <input type="email" class="form-control" id="email" name="email" placeholder="your mail">
                                        <div class="form-text text-muted"><?php echo htmlspecialchars(Flux::message('ResetPassEmailInfo')) ?></div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                
                                <div class="col-sm-12 text-sm-right push">

                                    <button type="submit" class="btn btn-alt-success">
                                       <?php echo htmlspecialchars(Flux::message('ResetPassButton')) ?>                                   </button>
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
            </form>
            <!-- END Sign Up Form -->

        </div>
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
</script>                            </main>
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
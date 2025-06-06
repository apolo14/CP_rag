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

            <form action="<?php echo $this->url('account', 'login', array('return_url' => $params->get('return_url'))) ?>" method="post">
	<?php if (count($serverNames) === 1): ?>
	<input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
	<?php endif ?>
                <div class="block block-themed block-rounded block-shadow ">

                                        <div class="block-header bg-gd-emerald">
                        <h3 class="block-title">Login your Account</h3>
                        
                    </div>
                    

                    <ul class="nav nav-tabs nav-tabs-alt row no-gutters">


                                                                                                                        <li class="nav-item col-12">
                            <a class="nav-link active "><i class="bi bi-person-fill"></i> Sign In Form</a></br>
                            <?php if (isset($errorMessage)): ?>
<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php else: ?>

<?php if ($auth->actionAllowed('account', 'create')): ?>
<p><?php printf(Flux::message('LoginPageMakeAccount'), $this->url('account', 'create')); ?></p>
<?php endif ?>

<?php endif ?>
                        </li>
                        
                        
                    </ul>

                    <div class="block-content">
                                                    
                                                <div class="tab-content">
                                                        <div class="tab-pane active " id="r-email" role="tabpanel">

                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="login_username">Username</label>
                                        <input type="text" class="form-control" id="login_username" name="username" placeholder="your username">
                                                                                    <div class="form-text text-muted">please enter the username that you have registered.</div>
                                        
                                    </div>
                                </div>

                            </div>
                                                                                </div>




                                                    <div class="form-group row">
                                <div class="col-12">
                                    <label for="t-signup-password">Password</label>
                                    <div class="input-group">

                                        <input type="password" class="form-control" id="t-signup-password" name="password" placeholder="********">
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                
                                <div class="col-sm-12 text-sm-right push">

                                    <button type="submit" class="btn btn-alt-success">
                                       Login Master Account                                    </button>
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
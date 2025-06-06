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
                <div class="block block-themed block-rounded block-shadow ">

                                        <div class="block-header bg-gd-emerald">
                        <h3 class="block-title">Change Password</h3>
                        
                    </div>
                    

                    <ul class="nav nav-tabs nav-tabs-alt row no-gutters">


                                                                                                                        <li class="nav-item col-12">
                            <a class="nav-link active "><i class="bi bi-person-fill"></i> Reset pass form</a>
                            <?php if (!empty($errorMessage)): ?>
	<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php else: ?>
	<p><?php echo htmlspecialchars(Flux::message('PasswordChangeInfo')) ?></p>
<?php endif ?>
                            
                        </li>
                        
                        
                    </ul>

                    <div class="block-content">
                                                    
                                                <div class="tab-content">
                                                        <div class="tab-pane active " id="r-email" role="tabpanel">
                                                            
                                                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="t-signup-password"><?php echo htmlspecialchars(Flux::message('CurrentPasswordLabel')) ?></label>
                                        <input type="password" class="form-control" name="currentpass" id="currentpass" value="" />
                                        <div class="form-text text-muted"><p><?php echo htmlspecialchars(Flux::message('PasswordChangeNote')) ?></p>
				<p class="important"><?php echo htmlspecialchars(Flux::message('PasswordChangeNote2')) ?></p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane active " id="r-email" role="tabpanel">
                                                            
                                                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="t-signup-password"><?php echo htmlspecialchars(Flux::message('NewPasswordLabel')) ?></label>
                                       <input type="password" class="form-control" name="newpass" id="newpass" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane active " id="r-email" role="tabpanel">
                                                            
                                                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="t-signup-password"><?php echo htmlspecialchars(Flux::message('NewPasswordConfirmLabel')) ?></label>
                                       <input type="password" class="form-control" name="confirmnewpass" id="confirmnewpass" value="" />
                                    </div>
                                </div>
                            </div>
                                </div>
                                <div class="form-group row mb-0">
                                
                                <div class="col-sm-12 text-sm-right push">
                                    <input type="submit" class="btn btn-alt-success" value="<?php echo htmlspecialchars(Flux::message('PasswordChangeButton')) ?>" />
                                </div>
                            </div>
                                            </div>
                    <div class="block-content bg-body-light">
                        <div class="form-group text-center">
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/terms" target="_blank">
                                <i class="fa fa-book text-muted mr-5"></i> Read the User Agreement                            </a>
                        </div>
                    </div>
                </div>
            </form>
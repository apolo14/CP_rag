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
                        <h3 class="block-title">Change mail</h3>
                        
                    </div>
                    

                    <ul class="nav nav-tabs nav-tabs-alt row no-gutters">


                                                                                                                        <li class="nav-item col-12">
                            <a class="nav-link active "><i class="bi bi-person-fill"></i> Reset mail form</a>
                            <?php if (!empty($errorMessage)): ?>
                            </br>
                            <?php echo htmlspecialchars($errorMessage) ?>
                            <?php endif ?>
                            
                        </li>
                        
                        
                    </ul>

                    <div class="block-content">
                                                    
                                                <div class="tab-content">
                                                        <div class="tab-pane active " id="r-email" role="tabpanel">
                                                            
                                                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="t-signup-password"><?php echo htmlspecialchars(Flux::message('EmailChangeLabel')) ?></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="your mail">
                                        <div class="form-text text-muted"><?php echo htmlspecialchars(Flux::message('EmailChangeInputNote')) ?></div>
                                    </div>
                                </div>
                            </div>
                                </div>
                                <div class="form-group row mb-0">
                                
                                <div class="col-sm-12 text-sm-right push">

                                    <button type="submit" class="btn btn-alt-success">
                                       <?php echo htmlspecialchars(Flux::message('EmailChangeButton')) ?>                                   </button>
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
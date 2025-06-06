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
                            <?php if ($cost): ?>
                                        <p>
	<?php printf(Flux::message('GenderChangeCost'), '<span class="remaining-balance">'.number_format((int)$cost).'</span>') ?>
	<?php printf(Flux::message('GenderChangeBalance'), '<span class="remaining-balance">'.number_format((int)$session->account->balance).'</span>') ?>
</p>
<?php if (!$hasNecessaryFunds): ?>
<p><?php echo htmlspecialchars(Flux::message('GenderChangeNoFunds')) ?></p>
<?php elseif ($auth->allowedToAvoidSexChangeCost): ?>
<p><?php echo htmlspecialchars(Flux::message('GenderChangeNoCost')) ?></p>
<?php endif ?>
<?php endif ?>

<?php if ($hasNecessaryFunds): ?>
<?php if (empty($errorMessage)): ?>
<p><strong><?php echo htmlspecialchars(Flux::message('NoteLabel')) ?>:</strong> <?php printf(Flux::message('GenderChangeCharInfo'), '<em>'.implode(', ', array_values($badJobs)).'</em>') ?>.</p>
<h3><?php echo htmlspecialchars(Flux::message('GenderChangeSubHeading')) ?></h3>
<?php else: ?>
<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>
                        </li>
                        
                        
                    </ul>

                    <div class="block-content">
                                                    <input type="hidden" name="changegender" value="1" />
                                                    <?php printf(Flux::message('GenderChangeFormText'), '<strong>'.strtolower($this->genderText($session->account->sex == 'M' ? 'F' : 'M')).'</strong>') ?>
                                </br>
                                </br>
                                <div class="form-group row mb-0">
                                
                                <div class="col-sm-12 text-sm-right push">
                                    <button type="submit" class="btn btn-alt-success" 
						onclick="return confirm('<?php echo str_replace("\'", "\\'", Flux::message('GenderChangeConfirm')) ?>')"><strong><?php echo htmlspecialchars(Flux::message('GenderChangeButton')) ?></strong>
					</button>
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
                
            <?php endif ?>
            </form>
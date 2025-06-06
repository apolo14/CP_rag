    <?php include __DIR__ . "/../ypanel/header.php"; ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="bg-flower">
                                <img src="assets/images/flowers/img-3.png">
                            </div>

                            <div class="bg-flower-2">
                                <img src="assets/images/flowers/img-1.png">
                            </div>
        
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ypanel</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Referrals</a></li>
                                        <li class="breadcrumb-item active">Referrals List</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Referrals</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row g-4">
                        <div class="col-12">
                            <div class="mb-4">
                                <h4 class="fs-16">Referrals info</h4>
                                <p class="text-muted fs-14">
                                    Only admins can edit referrals on ypanel, admins can also change the status on approved, pending, not approved on the ypanel referrals page.
                                    </br><b>Note : Please be careful when clicking the delete button and if that happens the database will delete the data without being able to be restored, make sure to back up regularly so that the files that have been saved are safe.</b>
                                </p>

                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Transaction ID</th>
                                            <th>amount</th>
                                            <th>status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    <?php if($referrals): ?>
                                       <?php foreach($referrals as $prow):?>
                                        <tr>
                                            <td><?php echo $prow->name?>              </td>
                                            <td><?php echo $prow->idtrans?>              </td>
                                            <td><?php echo $prow->amount?>              </td>
                                            <td><?php echo $prow->status?>              </td>
                                            <td><a href="<?php echo $this->url('ypanel', 'referral-edit', array('id' => $prow->id)); ?>"><?php echo htmlspecialchars(Flux::message('CMSEdit')) ?></a></td>
                                            <td><a href="<?php echo $this->url('ypanel', 'referral-delete', array('id' => $prow->id)); ?>" onclick="return confirm('<?php echo htmlspecialchars(Flux::message('CMSConfirmDelete')) ?>');"><?php echo htmlspecialchars(Flux::message('CMSDelete')) ?></a></td>
                                        </tr>
                                        <?php endforeach;?>
					
<?php else: ?>
	<p>
		<?php echo htmlspecialchars(Flux::message('CMSreferralsEmpty')) ?>
		
	</p>
<?php endif ?>
                                    </tbody>
                                </table>

                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- container -->

            </div> <!-- content -->

    <?php include __DIR__ . "/../ypanel/footer.php"; ?>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Streamers</a></li>
                                        <li class="breadcrumb-item active">Streamers List</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Streamers</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row g-4">
                        <div class="col-12">
                            <div class="mb-4">
                                <h4 class="fs-16">Streamers info</h4>
                                <p class="text-muted fs-14">
                                    Only admins can add streamers on ypanel, you can add new streamers manually on the streamers page and admins can also change the status on active and inactive on the ypanel streamers page.
                                </p>

                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>Platform</th>
                                            <th>Live Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    <?php if($streamers): ?>
                                       <?php foreach($streamers as $prow):?>
                                        <tr>
                                            <td><?php echo $prow->name?>              </td>
                                            <td><?php echo $prow->platform?>              </td>
                                            <td><?php echo $prow->status?>              </td>
                                            <td><a href="<?php echo $this->url('ypanel', 'streamer-edit', array('id' => $prow->id)); ?>"><?php echo htmlspecialchars(Flux::message('CMSEdit')) ?></a></td>
                                            <td><a href="<?php echo $this->url('ypanel', 'streamer-delete', array('id' => $prow->id)); ?>" onclick="return confirm('<?php echo htmlspecialchars(Flux::message('CMSConfirmDelete')) ?>');"><?php echo htmlspecialchars(Flux::message('CMSDelete')) ?></a></td>
                                        </tr>
                                        <?php endforeach;?>
					
<?php else: ?>
	<p>
		<?php echo htmlspecialchars(Flux::message('CMSblogEmpty')) ?><br/><br/>
		<a href="<?php echo $this->url('ypanel', 'streamer-add') ?>"><?php echo htmlspecialchars(Flux::message('CMSstreanerCreate')) ?></a>
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
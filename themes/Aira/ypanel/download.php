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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Downloads</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Downloads Link</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row g-4">
                        <div class="col-12">
                            <div class="mb-4">
                                <h4 class="fs-16">Read before delete or add</h4>
                                <p class="text-muted fs-14">
                                   before you delete you must first understand ragproject limits the download link to only 9 links, namely 3 on the full client, and 3 on the small client, and 3 for other files, for the id on the full client make sure it is number 1, 2, and 3. for the lite client make sure it is number 4, 5, and 6. and for other files in number 7, 8, and 9. if you want more please contact us, we will add the features you want for free.
                                </p>

                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Links</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    <?php if($downloads): ?>
                                       <?php foreach($downloads as $prow):?>
                                        <tr>
                                            <td><?php echo $prow->id?>              </td>
                                            <td><?php echo $prow->title?>              </td>
                                            <td><?php echo $prow->link?>              </td>
                                            <td><a href="<?php echo $this->url('ypanel', 'download-edit', array('id' => $prow->id)); ?>"><?php echo htmlspecialchars(Flux::message('CMSEdit')) ?></a></td>
                                            <td><a href="<?php echo $this->url('ypanel', 'download-delete', array('id' => $prow->id)); ?>" onclick="return confirm('<?php echo htmlspecialchars(Flux::message('CMSConfirmDelete')) ?>');"><?php echo htmlspecialchars(Flux::message('CMSDelete')) ?></a></td>
                                        </tr>
                                        <?php endforeach;?>
					
<?php else: ?>
	<p>
		<?php echo htmlspecialchars(Flux::message('CMSblogEmpty')) ?><br/><br/>
		<a href="<?php echo $this->url('blog', 'add') ?>"><?php echo htmlspecialchars(Flux::message('CMSblogCreate')) ?></a>
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
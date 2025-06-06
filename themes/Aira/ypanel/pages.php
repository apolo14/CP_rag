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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                        <li class="breadcrumb-item active">Blog List</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Blogs</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row g-4">
                        <div class="col-12">
                            <div class="mb-4">
                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Path</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    <?php if($pages): ?>
                                       <?php foreach($pages as $prow):?>
                                        <tr>
                                            <td><?php echo $prow->title?>              </td>
                                            <td><?php echo $prow->path?>              </td>
                                            <td><a href="<?php echo $this->url('ypanel', 'page-edit', array('id' => $prow->id)); ?>"><?php echo htmlspecialchars(Flux::message('CMSEdit')) ?></a></td>
                                            <td><a href="<?php echo $this->url('ypanel', 'page-delete', array('id' => $prow->id)); ?>" onclick="return confirm('<?php echo htmlspecialchars(Flux::message('CMSConfirmDelete')) ?>');"><?php echo htmlspecialchars(Flux::message('CMSDelete')) ?></a></td>
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
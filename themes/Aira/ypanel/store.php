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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Store</a></li>
                                        <li class="breadcrumb-item active">Store List</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Cash Shop Item</h4>
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
                                            <th>Atribut Positions</th>
                                            <th>Price</th>
                                            <th>Currency</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    <?php if($cashshops): ?>
                                       <?php foreach($cashshops as $prow):?>
                                        <tr>
                                            <td><?php echo $prow->title?>              </td>
                                            <td><?php echo $prow->position?>              </td>
                                            <td><?php echo $prow->price?>              </td>
                                            <td><?php echo $prow->currency?>              </td>
                                            <td><a href="<?php echo $this->url('ypanel', 'store-edit', array('id' => $prow->id)); ?>"><?php echo htmlspecialchars(Flux::message('CMSEdit')) ?></a></td>
                                            <td><a href="<?php echo $this->url('ypanel', 'store-delete', array('id' => $prow->id)); ?>" onclick="return confirm('<?php echo htmlspecialchars(Flux::message('CMSConfirmDelete')) ?>');"><?php echo htmlspecialchars(Flux::message('CMSDelete')) ?></a></td>
                                        </tr>
                                        <?php endforeach;?>
					
<?php else: ?>
	<p>
		<?php echo htmlspecialchars(Flux::message('CMSCashShopsEmpty')) ?><br/><br/>
		<a href="<?php echo $this->url('ypanel', 'store-add') ?>"><?php echo htmlspecialchars(Flux::message('CMSCashShopsCreate')) ?></a>
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
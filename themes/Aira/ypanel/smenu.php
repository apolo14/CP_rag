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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                        <li class="breadcrumb-item active">Social Menu List</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Social Menu</h4>
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
                                            <th>Link</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    <?php if($smenus): ?>
                                       <?php foreach($smenus as $prow):?>
                                        <tr>
                                            <td><?php echo $prow->option_set?>              </td>
                                            <td><?php echo $prow->option_body?>              </td>
                                            <td><a href="<?php echo $this->url('ypanel', 'smenu-edit', array('id' => $prow->id)); ?>"><?php echo htmlspecialchars(Flux::message('CMSEdit')) ?></a></td>
                                        </tr>
                                        <?php endforeach;?>
                                        <?php endif ?>
                                    </tbody>
                                </table>

                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- container -->

            </div> <!-- content -->

    <?php include __DIR__ . "/../ypanel/footer.php"; ?>
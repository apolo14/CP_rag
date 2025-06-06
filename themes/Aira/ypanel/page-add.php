<?php include __DIR__ . "/../ypanel/header.php"; ?>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Add</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add a new page</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Form row -->
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="mb-4">
                                <p style="color:white;"><?php if (!empty($errorMessage)): ?>
                <p class="red" style="color:white;"><?php echo htmlspecialchars($errorMessage) ?></p>
                <?php endif ?></p>

                                <form action="<?php echo $this->urlWithQs ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="page_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="page_title" name="page_title" placeholder="Exm : Patch Update v1">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputAddress" class="form-label">Path</label>
                                        <input type="text" class="form-control" id="page_path" name="page_path" placeholder="Exm : patch-update-v1, will be good without (space)">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <textarea class="form-control" name="page_body" id="page_body"/></textarea></br>
                                    </div>
                                                
                                    <button type="submit" class="btn btn-primary">Add page</button>
                                </form>

                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> <!-- content -->
    <?php include __DIR__ . "/../ypanel/footer.php"; ?>
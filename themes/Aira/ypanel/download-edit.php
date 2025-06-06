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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit a  post</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Form row -->
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="mb-4">
                                <p class="text-muted fs-14">
                                    By adding <code>.row</code> & <code>.g-2</code>, you can have control over the gutter width in as well the inline as block direction.
                                </p>

                                <form>
                                    <div class="mb-3">
                                        <label for="inputAddress" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="download_title" name="download_title" placeholder="Exm : Patch Update v1" value="<?php echo htmlspecialchars($title) ?>">
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label for="fileToUpload" class="form-label">Link Download</label>
                                        <input type="link" class="form-control" id="download_link" name="download_link" value="<?php echo htmlspecialchars($link) ?>">
                                    </div>
                                                
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>

                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> <!-- content -->
    <?php include __DIR__ . "/../ypanel/footer.php"; ?>
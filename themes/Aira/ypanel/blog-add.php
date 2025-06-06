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
                                        <li class="breadcrumb-item active">Add</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add a new post</h4>
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
                                        <label for="inputAddress" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="blog_title" name="blog_title" placeholder="Exm : Patch Update v1">
                                    </div>

                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="blog_path" class="form-label">Path</label>
                                            <input type="text" class="form-control" id="blog_path" name="blog_path" placeholder="Exm : update-path-v1, for a good link please dont use space">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputState" class="form-label">Category</label>
                                            <select class="form-select" name="blog_category" id="blog_category" value="<?php echo htmlspecialchars($category) ?>">
                                                <option>News</option>
                                                <option>Events</option>
                                                <option>Updates</option>
                                                <option>Promotions</option>
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label for="fileToUpload" class="form-label">Poster</label>
                                        <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" value="<?php echo htmlspecialchars($image) ?>">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <textarea class="form-control" name="blog_body" id="blog_body" placeholder="Your Featured Desc"/><?php echo htmlspecialchars($body) ?></textarea></br>
                                    </div>
                                                
                                    <button type="submit" class="btn btn-primary">Add Article</button>
                                </form>

                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> <!-- content -->
    <?php include __DIR__ . "/../ypanel/footer.php"; ?>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">blog</a></li>
                                        <li class="breadcrumb-item active">edit</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit a Product</h4>
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
                                <input type="hidden" name="page_id" value="<?php echo $id?>" />
                                <input type="hidden" class="form-control" id="fileToUpload"  name="fileToUpload" value="<?php echo htmlspecialchars($image) ?>">
                                    <div class="mb-3">
                                        <label for="inputAddress" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="blog_title" name="blog_title" placeholder="Exm : Patch Update V1" value="<?php echo htmlspecialchars($title) ?>">
                                    </div>
                                    
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="blog_path" class="form-label">Path</label>
                                            <input type="text" class="form-control" id="blog_path" name="blog_path" placeholder="path-update-v1, for a good link please dont use space" value="<?php echo htmlspecialchars($path) ?>">
                                        </div>
                                         <div class="mb-3 col-md-6">
                                            <label for="inputState" class="form-label">Category</label>
                                            <select class="form-select" name="blog_category" id="blog_category">
                                                <option><?php echo htmlspecialchars($category) ?></option>
                                                <option>__________</option>
                                                <option>News</option>
                                                <option>Events</option>
                                                <option>Updates</option>
                                                <option>Promotions</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="inputAddress" class="form-label">Poster</label>
                                        <input type="text" class="form-control" id="fileToUpload" name="fileToUpload" value="<?php echo htmlspecialchars($image) ?>">
                                        Find image in gallery : <a href="/ypanel/blog-gallery/" target="_blank">Open Gallery</a>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <textarea class="form-control" name="blog_body" id="blog_body" placeholder="Your Featured Desc"/><?php echo htmlspecialchars($body) ?></textarea></br>
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
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">cashshop</a></li>
                                        <li class="breadcrumb-item active">Add</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add a new Product</h4>
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
                                        <input type="text" class="form-control" id="cashshop_title" name="cashshop_title" placeholder="Exm : Red Potion">
                                    </div>
                                    
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="blog_path" class="form-label">Path</label>
                                            <input type="text" class="form-control" id="cashshop_path" name="cashshop_path" placeholder="red-potion, for a good link please dont use space">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="cashshop_position" class="form-label">Atribut Position</label>
                                            <input type="text" class="form-control" id="cashshop_position" name="cashshop_position" placeholder="Costume Garment">
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="blog_path" class="form-label">Price</label>
                                            <input type="text" class="form-control" id="cashshop_price" name="cashshop_price" placeholder="100">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="cashshop_currency" class="form-label">Currency</label>
                                            <input type="text" class="form-control" id="cashshop_currency" name="cashshop_currency" placeholder="Premium Coin / CP">
                                        </div>
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label for="fileToUpload" class="form-label">Poster</label>
                                        <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" value="<?php echo htmlspecialchars($image) ?>">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <textarea class="form-control" name="cashshop_body" id="cashshop_body" placeholder="Your Featured Desc"/><?php echo htmlspecialchars($body) ?></textarea></br>
                                    </div>
                                                
                                    <button type="submit" class="btn btn-primary">Add Product</button>
                                </form>

                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> <!-- content -->
    <?php include __DIR__ . "/../ypanel/footer.php"; ?>
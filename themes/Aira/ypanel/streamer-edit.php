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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Streamers</a></li>
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>
                                <h4 class="page-title"><?php echo htmlspecialchars($name) ?> edit info</h4>
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
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="streamer_name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="streamer_name" name="streamer_name" placeholder="Streamer name" value="<?php echo htmlspecialchars($name) ?>">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="streamer_charname" class="form-label">Charname</label>
                                            <input type="text" class="form-control" id="streamer_charname" name="streamer_charname" placeholder="Streamer charname" value="<?php echo htmlspecialchars($charname) ?>">
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="streamer_path" class="form-label">Path</label>
                                            <input type="text" class="form-control" id="streamer_path" name="streamer_path" placeholder="Exm : RaGaming-channel, will be good without ( ) space" value="<?php echo htmlspecialchars($path) ?>">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="streamer_platform" class="form-label">Platform</label>
                                            <select class="form-select" name="streamer_platform" id="streamer_platform">
                                                <option><?php echo htmlspecialchars($platform) ?></option>
                                                <option>_________</option>
                                                <option>Youtube</option>
                                                <option>Twitch</option>
                                                <option>Facebook</option>
                                                <option>Tiktok</option>
                                                <option>Nimo</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="streamer_embed" class="form-label">Embed</label>
                                        <input type="textarea" class="form-control" name="streamer_embed" id="streamer_embed" placeholder="Your embed platform" value="<?php echo htmlspecialchars($embed) ?>">
                                        <p>Size Recommended Width : 893 Height: 500</p></br>
                                    </div>
                                    
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label for="streamer_name" class="form-label">Streamer Link</label>
                                            <input type="text" class="form-control" id="streamer_link" name="streamer_link" placeholder="Streamer link" value="<?php echo htmlspecialchars($link) ?>">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="streamer_status" class="form-label">Status</label>
                                            <select class="form-select" name="streamer_status" id="streamer_status">
                                                <option><?php echo htmlspecialchars($status) ?></option>
                                                <option>_________</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label for="fileToUpload" class="form-label">Picture streamer</label>
                                        <input type="text" class="form-control" id="streamer_picture" name="streamer_picture" value="<?php echo htmlspecialchars($picture) ?>">
                                        <p>Find image in gallery : <a href="/ypanel/streamer-gallery/" target="_blank">Open Gallery</a></p>
                                    </div>
                                                
                                    <button type="submit" class="btn btn-primary">Edit a streamer</button>
                                </form>

                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> <!-- content -->
    <?php include __DIR__ . "/../ypanel/footer.php"; ?>
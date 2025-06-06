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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Referrals</a></li>
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit a referral</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Form row -->
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="mb-4">
                                <p class="text-muted fs-14">
                                    Click photo to see full image of proof of transfer.
                                </p>

                                <form action="<?php echo $this->urlWithQs ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="referrals_name" id="referrals_name" value="<?php echo htmlspecialchars($name) ?>">
                                    <input type="hidden" name="referrals_idtrans" id="referrals_idtrans" value="<?php echo htmlspecialchars($idtrans) ?>">
                                    <input type="hidden" name="referrals_amount" id="referrals_amount" value="<?php echo htmlspecialchars($amount) ?>">
                                    <input type="hidden" name="referrals_image" id="referrals_image" value="<?php echo htmlspecialchars($image) ?>">
                                    <div class="mb-3">
                                        <a href="/<?php echo htmlspecialchars($image) ?>" target="_blank"><img src="/<?php echo htmlspecialchars($image) ?>" width="250" height="auto"></a></br></br>
                                        <label for="referrals_status" class="form-label">Status</label>
                                        <select class="form-select" name="referrals_status" id="referrals_status">
                                            <option><?php echo htmlspecialchars($status) ?></option>
                                            <option>________</option>
                                            <option>Approve</option>
                                            <option>Hold</option>
                                            <option>Disapprove</option>
                                            </select>
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
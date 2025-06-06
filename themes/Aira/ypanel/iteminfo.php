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
                                       
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Form row -->
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="mb-4">
  
<?php if (!empty($errorMessage)): ?>
    <p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>
<?php if (!empty($successMessage)): ?>
    <p class="green"><?php echo htmlspecialchars($successMessage) ?></p>
<?php endif ?>

<h3>PHP Configuration</h3>
<p>These values must be larger than the size of your itemInfo file.</p>
<table class="vertical-table">
	<tr>
		<th>PHP Configs</th><td>Value</td>
	</tr>
	<tr>
		<th>post_max_size</th><td><?php echo ini_get('post_max_size') ?></td>
	</tr>
	<tr>
		<th>upload_max_filesize</th><td><?php echo ini_get('upload_max_filesize') ?></td>
	</tr>
</table>
<p>ShowItemDesc is <?php if(Flux::config('ShowItemDesc')):?>enabled<?php else: ?>disabled<?php endif ?> in your configuration file.</p>

<h3>Upload itemInfo.lua</h3>
 <div class="mb-3">
                                        <label for="inputAddress" class="form-label">Title</label>
<form class="forms" method="post" enctype="multipart/form-data">
    <input type="file" name="iteminfo" class="form-control"><br>
    <input class="btn btn-primary" type="submit">
</form>

<h3>Current Count</h3>
<p>There are currently <?php echo number_format($return->count) ?> item descriptions in the database</p>

                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> <!-- content -->
    <?php include __DIR__ . "/../ypanel/footer.php"; ?>
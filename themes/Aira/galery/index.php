
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                        <li class="breadcrumb-item active">Blog List</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Blogs</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row g-4">
                        <div class="col-12">
                            <div class="mb-4">
                                <h4 class="fs-16">Basic Data Table</h4>
                                <p class="text-muted fs-14">
                                    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                                    function:
                                    <code>$().DataTable();</code>. KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual
                                    cells, columns, rows or all cells.
                                </p>

                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Link</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
        // define the folder where your media files are located
        $media_folder = "ragfile/blog/";

        // open the directory and loop through its contents
        if ($handle = opendir($media_folder)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    // display the media file with a link to its URL
                    echo "<tr>";
                    echo "<td>";
                    echo "<img src=\"" . $media_folder . $entry . "\" alt=\"" . $entry . "\" style=\"max-width: 200px; margin: 10px;\" />";
                    echo "<td>";
                    echo "<a href=\"" . $media_folder . $entry . "\" target=\"_blank\"> $media_folder$entry";
                    echo "</td>";
                    echo "</tr>";
                }
            }
            closedir($handle);
        }
    ?>
                                    </tbody>
                                </table>

                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- container -->

            </div> <!-- content -->

    <?php include __DIR__ . "/../ypanel/footer.php"; ?>
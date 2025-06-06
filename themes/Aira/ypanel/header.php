<link href="<?php echo $this->themePath('ypanel/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->themePath('ypanel/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->themePath('ypanel/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->themePath('ypanel/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->themePath('ypanel/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->themePath('ypanel/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') ?>" rel="stylesheet" type="text/css" />

    
        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="<?php echo $this->themePath('ypanel/assets/vendor/daterangepicker/daterangepicker.css') ?>">

        <!-- Vector Map css -->
        <link rel="stylesheet" href="<?php echo $this->themePath('ypanel/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') ?>">

        <!-- Theme Config Js -->
        <script src="<?php echo $this->themePath('ypanel/assets/js/config.js') ?>"></script>

        <!-- App css -->
        <link href="<?php echo $this->themePath('ypanel/assets/css/app.min.css') ?>" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="<?php echo $this->themePath('ypanel/assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tiny.cloud/1/<?php echo $tinymce_key ?>/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar container-fluid">
                    <div class="d-flex align-items-center gap-lg-2 gap-1">

                        <!-- Topbar Brand Logo -->
                        <div class="logo-topbar">
                            <!-- Logo light -->
                            <a href="index.html" class="logo-light">
                                <span class="logo-lg">
                                    <img src="/ragfile/core/logo.png" alt="logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="/ragfile/core/logo.png" alt="small logo">
                                </span>
                            </a>

                            <!-- Logo Dark -->
                            <a href="index.html" class="logo-dark">
                                <span class="logo-lg">
                                    <img src="/ragfile/core/logo.png" alt="dark logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="/ragfile/core/logo.png" alt="small logo">
                                </span>
                            </a>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Brand Logo Light -->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="/ragfile/core/favicon.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="/ragfile/core/favicon.png" alt="small logo">
                    </span>
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="/ragfile/core/logo.png" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="/ragfile/core/logo.png" alt="small logo">
                    </span>
                </a>
                <!-- Full Sidebar Menu Close Button -->
                <div class="button-close-fullsidebar">
                    <i class="ri-close-fill align-middle"></i>
                </div>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    

                    <!--- Sidemenu -->
                    <ul class="side-nav">
                        <li class="side-nav-item">
                            <a href="/ypanel" class="side-nav-link">
                                <i class="ri-dashboard-2-fill"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>


                        <li class="side-nav-title">RagProject Module</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                                    <i class="ri-quill-pen-line"></i>
                                <span> Blog </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarBaseUI">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/ypanel/blog">View all</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/blog-add">Add</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/blog-gallery">Gallery Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#DownloadLink" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                                <i class="ri-download-cloud-line"></i>
                                <span> Downloads Link </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="DownloadLink">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/ypanel/download">View all</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/download-add">Add</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#Feature" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                                <i class="ri-stack-fill"></i>
                                <span> Feature </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="Feature">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/ypanel/feature">View all</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/feature-add">Add</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#CashShop" aria-expanded="false" aria-controls="CashShop" class="side-nav-link">
                                <i class="ri-cash-line"></i>
                                <span> Cash Shop </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="CashShop">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/ypanel/store">View all</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/store-add">Add</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/store-gallery">Gallery Cash Shop</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#QuestShop" aria-expanded="false" aria-controls="QuestShop" class="side-nav-link">
                                <i class="ri-shopping-bag-2-line"></i>
                                <span> Quest Shop </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="QuestShop">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/ypanel/questshops">View all</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/questshop-add">Add</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/questshop-gallery">Gallery Quest</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#NPC" aria-expanded="false" aria-controls="NPC" class="side-nav-link">
                                <i class="ri-walk-line"></i>
                                <span> NPC </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="NPC">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/ypanel/npc">View all</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/npc-add">Add</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/npc-gallery">Gallery NPC</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#Streamer" aria-expanded="false" aria-controls="Streamer" class="side-nav-link">
                                <i class="ri-live-line"></i>
                                <span> Streamer </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="Streamer">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/ypanel/streamers">View all</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/streamer-add">Add</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/streamer-gallery">Gallery Streamer</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#Referral" aria-expanded="false" aria-controls="Referral" class="side-nav-link">
                                <i class="ri-coins-line"></i>
                                <span> Referral </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="Referral">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/ypanel/referrals">View all</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/referral-gallery">Gallery Referral</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title">Fluxcp Module</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#Pages" aria-expanded="false" aria-controls="Pages" class="side-nav-link">
                                <i class="ri-pages-line"></i>
                                <span> Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="Pages">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/ypanel/pages">View all</a>
                                    </li>
                                    <li>
                                        <a href="/ypanel/page-add">Add</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="side-nav-item">
                            <a href="/ypanel/iteminfo" class="side-nav-link">
                                <i class="ri-list-settings-line"></i>
                                <span> Item Info </span>
                            </a>
                        </li>
                        
                        <li class="side-nav-title">Server setting</li>

                        <li class="side-nav-item">
                            <a href="/ypanel/server/?id=1" class="side-nav-link">
                                <i class="ri-list-settings-line"></i>
                                <span> Server Info </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="/ypanel/menu" class="side-nav-link">
                                <i class="ri-apps-line"></i>
                                <span> Edit Menu </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="/ypanel/fmenu" class="side-nav-link">
                                <i class="ri-apps-line"></i>
                                <span> Edit Footer Menu </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="/ypanel/cfmenu" class="side-nav-link">
                                <i class="ri-apps-line"></i>
                                <span>Edit Footer more Menu </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="/ypanel/smenu" class="side-nav-link">
                                <i class="ri-apps-line"></i>
                                <span> Edit Social Menu </span>
                            </a>
                        </li>
                    </ul>
                    <!--- End Sidemenu -->

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->
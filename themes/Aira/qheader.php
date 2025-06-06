<link rel="stylesheet" href="<?php echo $this->themePath('assets/fonts/angelus_medieval/stylesheet.css') ?>" >
	<link rel="stylesheet" href="<?php echo $this->themePath('assets/fonts/intro/stylesheet.css') ?>" >
	<link rel="stylesheet" href="<?php echo $this->themePath('assets/libs/bootstrap-icons/bootstrap-icons.min.css') ?>" >
	<link rel="stylesheet" href="<?php echo $this->themePath('assets/libs/RpgAwesome/css/rpg-awesome.css') ?>" >
	<link rel="stylesheet" href="<?php echo $this->themePath('assets/libs/swiper/swiper.css') ?>" >
	<link rel="stylesheet" href="<?php echo $this->themePath('assets/libs/select/jquery.mCustomScrollbar.css') ?>" >
	<link rel="stylesheet" href="<?php echo $this->themePath('assets/libs/select/jquery.nselect.css') ?>" >
	<link rel="stylesheet" href="<?php echo $this->themePath('assets/css/AiriPage.css') ?>" >
	<link rel="stylesheet" href="<?php echo $this->themePath('assets/css/FontAwesome.css') ?>" >
	<link rel="stylesheet" href="<?php echo $this->themePath('assets/css/flaticon_aina.css') ?>" >
	</script>
 </head>
 <body class="body ">

	<div class="wrapper ">

        <nav class="nav">
    <div class="nav__main">
        <div class="nav__content">
            <a href="/" class="nav__emblem"><img src="/ragfile/core/logo.png" alt=""></a>
            <div class="nav__response">
<?php include 'menu.php'; ?>
                            <ul class="nav__servers">
            <li class="on">
            <span class="nav__servers-name">Online</span>
            <span class="nav__servers-rate"><?php echo $onlinecount; ?></span>
                    </li>
            <li class="on">
            <span class="nav__servers-name">Map</span>
            <span class="nav__servers-rate"><?php if ( $maponline ) { echo $online; } else { echo $offline; } ?></span>
                    </li>
            <li class="on">
            <span class="nav__servers-name">Char</span>
            <span class="nav__servers-rate"><?php if ( $charonline ) { echo $online; } else { echo $offline; } ?></span>
                    </li>
            <li class="on">
            <span class="nav__servers-name">Login</span>
            <span class="nav__servers-rate"><?php if ( $loginonline ) { echo $online; } else { echo $offline; } ?></span>
                    </li>
    </ul>                        </div>
                    </div>
                </div>
            </div>
            <div class="nav__langs">
    
</div>            <a href="/account/view" class="nav__auth btn"><span>Account</span><i class="bi bi-person-fill"></i></a>
            <div class="open-main-menu">
                <div class="open-main-menu__item"></div>
            </div>
        </div>
    </div>
</nav>
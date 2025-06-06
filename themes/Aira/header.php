<?php include 'main/servinfo.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
		<?php endif ?>
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?></title>
	<meta property="og:title" content="<?php echo Flux::config('SiteTitle'); ?>" >
	<meta property="og:site_name" content="<?php echo Flux::config('SiteTitle'); ?>" >
	<meta property="og:type" content="website" >
	<meta property="og:url" content="https://ragproject.com" >
	<meta name="twitter:image:src" content="<?php echo $this->themePath('assets/images/ragproject.jpg') ?>" >
	<meta property="og:image" content="<?php echo $this->themePath('assets/images/ragproject.jpg') ?>" >
	<meta property="vk:image" content="<?php echo $this->themePath('assets/images/ragproject.jpg') ?>" >
	<meta name="description" content="<?php echo Flux::config('SiteTitle'); ?> Ragnarok Online Private Server." >
	<meta property="og:description" content="<?php echo Flux::config('SiteTitle'); ?> Ragnarok Online Private Server." >
	<meta property="twitter:description" content="Let's Play <?php echo Flux::config('SiteTitle'); ?> Ragnarok Private server" >
	<meta name="keywords" content="<?php echo Flux::config('SiteTitle'); ?>" >
	<link rel="canonical" href="https://ragproject.com/" >
	<meta charset="utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<link rel="icon" sizes="16x16" href="/ragfile/core/favicon.png" type="image/png" >
	<link rel="icon" sizes="32x32" href="/ragfile/core/favicon.png" type="image/png" >
	<link rel="apple-touch-icon-precomposed" href="/ragfile/core/favicon.png" >
	<link rel="apple-touch-icon" href="/ragfile/core/favicon.png" >
	<link rel="apple-touch-icon" sizes="57x57" href="/ragfile/core/favicon.png" >
	<link rel="apple-touch-icon" sizes="60x60" href="/ragfile/core/favicon.png" >
	<link rel="apple-touch-icon" sizes="72x72" href="/ragfile/core/favicon.png" >
	<link rel="apple-touch-icon" sizes="76x76" href="/ragfile/core/favicon.png" >
	<link rel="apple-touch-icon" sizes="114x114" href="/ragfile/core/favicon.png" >
	<link rel="apple-touch-icon" sizes="120x120" href="/ragfile/core/favicon.png" >
	<link rel="apple-touch-icon" sizes="144x144" href="/ragfile/core/favicon.png" >
	<link rel="apple-touch-icon" sizes="152x152" href="/ragfile/core/favicon.png" >
	<link rel="apple-touch-icon" sizes="167x167" href="/ragfile/core/favicon.png" >
	<link rel="apple-touch-icon" sizes="180x180" href="/ragfile/core/favicon.png" >
	
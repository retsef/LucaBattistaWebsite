<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Responsive Bootstrap Multi-Purpose Landing Page Template">
<meta name="keywords" content="LandX, Bootstrap, Landing page, Template, Registration, Landing">
<meta name="author" content="Mizanur Rahman">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- SITE TITLE -->
<title>Luca Battista</title>

<!-- =========================
      FAV AND TOUCH ICONS  
============================== -->
<link rel="icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- =========================
     STYLESHEETS   
============================== -->
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- FONT ICONS -->
<!-- IonIcons -->
<link rel="stylesheet" href="assets/ionicons/css/ionicons.css">

<!-- Font Awesome 
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
-->

<!-- Elegant Icons -->
<link rel="stylesheet" href="assets/elegant-icons/style.css">
<!--[if lte IE 7]><script src="assets/elegant-icons/lte-ie7.js"></script><![endif]-->



<!-- CAROUSEL AND LIGHTBOX -->
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/nivo_themes/default/default.css">

<!-- COLORS -->
<!--<link rel="stylesheet" href="css/colors/blue.css"> <!-- DEFAULT COLOR/ CURRENTLY USING -->
<!-- <link rel="stylesheet" href="css/colors/red.css"> -->
<!-- <link rel="stylesheet" href="css/colors/green.css"> -->
<!-- <link rel="stylesheet" href="css/colors/purple.css"> -->
<!-- <link rel="stylesheet" href="css/colors/orange.css"> -->
<!-- <link rel="stylesheet" href="css/colors/blue-munsell.css"> -->
<link rel="stylesheet" href="css/colors/slate.css">
<!-- <link rel="stylesheet" href="css/colors/yellow.css"> -->

<!-- CUSTOM STYLESHEETS -->
<link rel="stylesheet" href="css/styles.css">

<!-- RESPONSIVE FIXES -->
<link rel="stylesheet" href="css/responsive.css">

<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
<![endif]-->

<!-- ****************
      After neccessary customization/modification, Please minify HTML/CSS according to http://browserdiet.com/en/ for better performance
     **************** -->
     

<?php
    define('ROOT_PATH', realpath(__DIR__));
    define('FACEBOOK_SDK_V4_SRC_DIR', './facebook/src/Facebook/');
    require ROOT_PATH . '/facebook/autoload.php';
?>

</head>

<body>
<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">
  <div class="status">&nbsp;</div>
</div>

<!-- =========================
     HEADER   
============================== -->
<?php include './parts/home.html'; ?>

<!-- =========================
     SECTION 1   
============================== -->
<?php //include './parts/section1.html'; ?>

<!-- =========================
     SECTION 2   
============================== -->
<?php include './parts/section2.html'; ?>

<!-- =========================
     SECTION 3   
============================== -->
<?php include './parts/section3.html'; ?>

<!-- =========================
     SECTION 4   
============================== -->
<?php include './parts/section4.php'; ?>

<!-- =========================
     SECTION 5   
============================== -->
<?php include './parts/section5.html'; ?>

<!-- =========================
     SECTION 6   
============================== -->
<?php include './parts/section6.html'; ?>

<!-- =========================
     SECTION 7  
============================== -->
<?php include './parts/section7.html'; ?>

<!-- =========================
     SECTION 8 - CTA  
============================== -->
<?php include './parts/section8.html'; ?>

<!-- =========================
     SECTION 9 - CONTACT US  
============================== -->
<?php include './parts/section9.html'; ?>

<!-- =========================
     SECTION 10 - FOOTER 
============================== -->
<?php include './parts/section10.html'; ?>

<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.min.js"></script>

<script>
/* =================================
   LOADER                     
=================================== */
// makes sure the whole site is loaded
jQuery(window).load(function() {
	"use strict";
        // will first fade out the loading animation
	jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(1000).fadeOut("slow");
})

</script>

<script src="js/bootstrap.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.localScroll.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/simple-expand.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://w.soundcloud.com/player/api.js"></script>
<!-- ****************
      After neccessary customization/modification, Please minify JavaScript/jQuery according to http://browserdiet.com/en/ for better performance
     **************** -->
</body>
</html>
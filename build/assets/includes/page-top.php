<!DOCTYPE html>
<html>
	<head>
		<!-- ASCII ART HERE -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
		<?php include('config.php'); ?><title><?php echo @$title; ?></title>
		<link rel="shortcut icon" href="<?php echo "$genurl" ?>files/images/fav.ico"><!-- !!! VERGEET DIT NIET !!! -->
		<link rel="stylesheet" type="text/css" href="<?php echo "$genurl" ?>files/styles/gen.css"><!-- !!! COMPRIMEREN (ZET ER DAN _min ACHTER)!!! -->
		<link rel="stylesheet" type="text/css" href="<?php echo "$genurl" ?>assets/css/main.min.css">

		<meta name="description" content="<?php echo @$discp; ?>">
		<!-- <meta name="robots" content="index, follow"> !!! BIJ LANCERING <!- EN -> WEGHALEN !!! -->
		<meta name="robots" content="noindex, nofollow"><!-- !!! BIJ LANCERING WEGHALEN !!! -->
		<meta property="og:locale" content="nl_NL" />
		<meta property="og:title" content="<?php echo @$title; ?>" />
		<meta property="og:type" content="<?php echo @$ptype; ?>" />
		<meta property="og:description" content="<?php echo @$discp; ?>" />
		<meta property="og:determiner" content="auto" />
		<meta property="og:locale:alternate" content="en_EN" />
		<meta property="og:site_name" content="<?php echo @$name; ?>" />
		<meta property="og:image" content="<?php echo @$ogimg; ?>" />

		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo "$genurl" ?>files/images/touch-icon-ipad.png"><!-- !!! VERGEET DIT NIET !!! -->
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo "$genurl" ?>files/images/touch-icon-iphone-retina.png"><!-- !!! VERGEET DIT NIET !!! -->
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo "$genurl" ?>files/images/touch-icon-ipad-retina.png"><!-- !!! VERGEET DIT NIET !!! -->

		<!-- GOOGLE ANALYTICS HERE -->

		<script src="https://use.fontawesome.com/c9563fea43.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script>
			$(function() {
			    var header = $(".header-container");
			    $(window).scroll(function() {
			        var scroll = $(window).scrollTop();

			        if (scroll >= 50) {
			            header.addClass("header-container-filled");
			        } else {
			            header.removeClass("header-container-filled");
			        }
			    });
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
			  $("a").on('click', function(event) {
			    if (this.hash !== "") {
			      event.preventDefault();
			      var hash = this.hash;
			      $('html, body').animate({
			        scrollTop: $(hash).offset().top
			      }, 800, function(){
			        window.location.hash = hash;
			      });
			    }
			  });
			});
		</script>
	</head>
	<body>
		<div class="container">
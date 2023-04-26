<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShenAleph
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!--	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.jpg" /> -->
<link rel="stylesheet" href="https://use.typekit.net/nci7nxi.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- start Bootstrap container -->
<div id="page" class="site">

			<section class="topbanner container-fluid" id="typelogo-container">
				<div class="row">
								<a href="https://shenandoahliterary.org/" class="img-fluid-link" rel="home" itemprop="url"><img width="1600" height="228" src="https://shenandoahliterary.org/681/files/2018/12/Shenandoah-1600.jpg" class="img-fluid" alt="Shenandoah Volume 68, Number 1" itemprop="logo" srcset="https://shenandoahliterary.org/681/files/2018/12/Shenandoah-1600.jpg 1600w, https://shenandoahliterary.org/681/files/2018/12/Shenandoah-1600-300x43.jpg 300w, https://shenandoahliterary.org/681/files/2018/12/Shenandoah-1600-768x109.jpg 768w, https://shenandoahliterary.org/681/files/2018/12/Shenandoah-1600-1024x146.jpg 1024w" sizes="(max-width: 1600px) 100vw, 1600px" /></a>
				</div>
				<div class="row">
		<div class="col-md-10 offset-md-1">
			<p id="typelogo"><a href="https://shenandoahLiterary.org/">Shenandoah</a></p>
		</div>
		</div>
		<div class="row">
			<div class="col-md-5 offset-md-1">
				<div class="volumeIssueBanner">
				<span class=""></span>
				</div>
		</div>
			<div class="col-md-5">
				<div class="shen-nav d-flex flex-column flex-sm-row" >
					<a class="nav-item nav-link" href="https://shenandoahliterary.org/about/">About</a>
					<a class="nav-item nav-link" href="https://shenandoahliterary.org/issues/">Issues</a>
					<a class="nav-item nav-link" href="https://shenandoahliterary.org/submissions/">Submit</a>
					<a class="nav-item nav-link" href="https://shenandoahliterary.org/thepeak">The Peak</a>
				</div>
				</div>
		</div>
		</section>


	<div id="content" class="site-content">

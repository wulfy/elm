<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage ELM
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/wordpress_style.css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div id="topbar" class="topbar">
		<header id="nav_header" class="<?php if(is_admin_bar_showing()) echo 'under_admin'; ?>">
        <div class="container clearfix">
          <div id="sitelogo">
            <a href="<?php bloginfo('url');?>"><h1 id="logo"><img src="http://www.lmsecurite.fr/titre_fichiers/lm.jpg"/> </h1></a>
          </div>
          <div id="nav_content">
            <div class="account_and_cart">
                <?php echo do_shortcode('[get_login_container]')?>
                <?php echo do_shortcode('[wps_mini_cart]') ?>
                <?php /*echo do_shortcode('[wpshop_breadcrumb]') */?> 
                <br/>
                <div id="searchBox">
                  <?php get_search_form(); ?>
                </div>
              </div>
            <nav>
                  <a href='javascript:scrollToId("#group2")'><i class="fa fa-bus fa-fw"></i>EQUIPEMENT URBAIN</a>
                  <a href='javascript:scrollToId("#group3")'><i class="fa fa-print fafw"></i>IDENTIFICATION BRADY</a>
                  <a href="javascript:scrollToId('#group4')"><i class="fa fa-medkit fa-fw"></i>PROTECTION SÉCURITÉ</a>
                  <a href='<?php echo do_shortcode('[get_category_link term_id=7]') ?>'><i class="fa fa-exclamation-triangle fa-fw"></i>SIGNALISATION</a>
              </nav>
          </div>
        </div>
        
    
    </header>
  
		
	</div><!-- .sidebar -->

	<div id="main2" class="site-main">
    

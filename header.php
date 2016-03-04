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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
            <a href="<?php bloginfo('url');?>"><h1 id="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logolm.jpg"/> </h1></a>
          </div>
          <div id="nav_content">
            
            <nav>
              <ul>
                <li class="green">
                  <a href='javascript:scrollToId("#group2")'><span><i class="fa fa-bus fa-fw"></i>EQUIPEMENT URBAIN</span></a>
                </li>
                <li class="blue">
                  <a href='javascript:scrollToId("#group3")'><span><i class="fa fa-print fafw"></i>IDENTIFICATION BRADY</span></a>
                </li>
                <li class="red">
                  <a href="javascript:scrollToId('#group4')"><span><i class="fa fa-medkit fa-fw"></i>PROTECTION SÉCURITÉ</span></a>
                </li>
                <li class="orange">
                  <a href='<?php echo do_shortcode('[get_category_link term_slug="signalisation_vehicules"]') ?>'><span><i class="fa fa-exclamation-triangle fa-fw"></i>SIGNALISATION</span></a>
                </li>
              </ul>
              </nav>

              <div id="searchBox">
                <?php get_search_form(); ?>
              </div>

              <div class="account_and_cart">
                <?php echo do_shortcode('[get_login_container]')?>
                <?php echo do_shortcode('[wps_mini_cart]') ?>
                <?php /*echo do_shortcode('[wpshop_breadcrumb]') */?> 
                
              </div>
              <div id="contact">
                <span class="nou">contactez nous</span>
              </div>
          </div>


        </div>
        
    
    </header>
  
		
	</div><!-- .sidebar -->

	<div id="main2" class="site-main">


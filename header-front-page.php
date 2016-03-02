<?php
/**
 * @package WordPress
 * @subpackage Lmsecurite_2
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//FR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Lmsecurite</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/responsiveslides.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/front-page.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/wordpress_style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/responsiveslides.min.js"></script>
<?php wp_head(); ?>
</head>

<body>

  <div class="debug">
    <label><input type="checkbox"> Debug</input></label>
  </div>
  <div class="contact_us <?php if(is_admin_bar_showing()) echo 'under_admin'; ?>">
      <a href='javascript:scrollToId("#group6")'><img src="<?php bloginfo('template_directory'); ?>/images/contact.png"/></a>
    </div>
  <header id="nav_header" class="<?php if(is_admin_bar_showing()) echo 'under_admin'; ?>">
    <div class="container clearfix">
      <div id="sitelogo">
          <a href='javascript:scrollToId("#group1")'><h1 id="logo"><div class="vertical_align_helper"></div><img src="http://www.lmsecurite.fr/titre_fichiers/lm.jpg"/> </h1></a>
      </div>
      <div id="nav_content">
        <nav>
              <ul>
                <li>
                  <a href='javascript:scrollToId("#group2")'><i class="fa fa-bus fa-fw"></i><span>EQUIPEMENT URBAIN</span></a>
                </li>
                <li>
                  <a href='javascript:scrollToId("#group3")'><i class="fa fa-print fafw"></i><span>IDENTIFICATION BRADY</span></a>
                </li>
                <li>
                  <a href="javascript:scrollToId('#group4')"><i class="fa fa-medkit fa-fw"></i><span>PROTECTION SÉCURITÉ</span></a>
                </li>
                <li>
                  <a href='javascript:scrollToId("#group5")'><i class="fa fa-exclamation-triangle fa-fw"></i><span>SIGNALISATION</span></a>
                </li>
          </nav>
          <div id="contact">
            <i class="fa fa-at"></i>
            <span>contactez nous</span>
          </div>
          <div id="searchBox">
              <?php get_search_form(); ?>
          </div>

      </div>
      
    </div>
    
    <div class="account_and_cart">
          <a href="<?php echo get_permalink( wpshop_tools::get_page_id( get_option('wpshop_checkout_page_id ') ) ); ?>" class="wps-mini-cart-opener">
                <i class="wps-icon-basket"></i>
                <?php echo do_shortcode('[wps-numeration-cart]'); ?>
          </a>
        </div>
  </header>
<!-- end header -->
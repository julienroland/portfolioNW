<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>
  
  <meta name="title" content="<?php
          if (function_exists('is_tag') && is_tag()) {
             single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
          elseif (is_archive()) {
             wp_title(''); echo ' Archive - '; }
          elseif (is_search()) {
             echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
          elseif (!(is_404()) && (is_single()) || (is_page())) {
             wp_title(''); echo ' - '; }
          elseif (is_404()) {
             echo 'Not Found - '; }
          if (is_home()) {
             bloginfo('name'); echo ' - '; bloginfo('description'); }
          else {
              bloginfo('name'); }
          if ($paged>1) {
             echo ' - page '. $paged; }
       ?>">

	
	<?php include 'bits/favicons.php' ?>
	
	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/normalize.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/playmaker.css">
	

	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/vendor/custom.modernizr.js"></script>

<!-- 	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> -->

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
		
	<!-- Navigation (Topbar) -->
  <div class="contain-to-grid navigation">
    <nav class="top-bar">
      <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
          <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
       	<?php foundation_top_bar_l(); ?>

        <?php foundation_top_bar_r(); ?>
      </section>
    </nav>
  </div>

  <header id="header" class="row">
    <div class="small-12 columns">
      <h1>
        <a href="<?php echo get_option('home'); ?>/">
          <?php bloginfo('name'); ?> 
        </a>
        <small class="subheader"> - <?php bloginfo('description'); ?></small>
      </h1>
    </div>
  </header>
  <hr>

  <!-- Start the main container -->
  <section class="container row" role="document">

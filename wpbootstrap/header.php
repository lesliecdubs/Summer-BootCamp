<!DOCTYPE html>
<!-- Full Disclosure: This WordPress theme was developed with the assistance of a Treehouse tutorial, http://blog.teamtreehouse.com/responsive-wordpress-bootstrap-theme-tutorial -->
<html lang="en">
 <head>
    <meta charset="utf-8">
	<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    
  </head>
  <body>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#home">
        
        <!-- Full Disclosure: The following code was written with the assistance of a WPTuts tutorial, http://wp.tutsplus.com/tutorials/creative-coding/how-to-integrate-the-wordpress-media-uploader-in-theme-and-plugin-options/ -->
        <body <?php body_class(); ?>>  
    
            <?php $wptuts_options = get_option('theme_wptuts_options'); ?>  
  
            <?php if ( $wptuts_options['logo'] != '' ): ?>  
                <div id="logo">  
                    <img src="<?php echo $wptuts_options['logo']; ?>" />  
                </div>  
            <?php  endif; ?> 
            </a>            
            
        <div class="nav-collapse collapse">
          <ul class="nav" id="top-nav">
		
		<!-- Load WordPress custom menu -->
		<?php
           wp_nav_menu( array(
              'menu'            => 'main-menu',
              'container_class' => 'nav-collapse',
              'menu_class'      => 'nav',
              'fallback_cb'     => '',
              'menu_id' => 'main-menu',
          ) ); ?>

          </ul>
        </div><!--.nav-collapse -->
      </div>
    </div>
  </div>
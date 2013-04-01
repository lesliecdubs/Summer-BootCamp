<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
	<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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
        <a class="brand" href="<?php echo site_url(); ?>">
        
        <body <?php body_class(); ?>>  
    
            <?php $wptuts_options = get_option('theme_wptuts_options'); ?>  
  
            <?php if ( $wptuts_options['logo'] != '' ): ?>  
                <div id="logo">  
                    <img src="<?php echo $wptuts_options['logo']; ?>" />  
                </div>  
            <?php  endif; ?> 
            </a>
            
            
        <div class="nav-collapse collapse">
          <ul class="nav">

<?php
           /** Loading WordPress Custom Menu  **/
           wp_nav_menu( array(
              'menu'            => 'main-menu',
              'container_class' => 'nav-collapse',
              'menu_class'      => 'nav',
              'fallback_cb'     => '',
              'menu_id' => 'main-menu',
          ) ); ?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
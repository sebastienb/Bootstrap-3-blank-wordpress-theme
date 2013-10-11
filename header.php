<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf8" />
		
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen, projection" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
		
		
		<?php wp_head(); ?>
		
    
  </head>
 
  <body <?php body_class($class); ?>>
    
    <div id="main-container" class="container">
    <div class="row">
    
   <div class="col-md-3"> <a href="<?php bloginfo('url'); ?>"><img src="http://placehold.it/150x90$text=logo" alt="Logo" /></a></div>
   <div class="col-md-9"><?php wp_nav_menu( array('menu' => 'Top Menu', 'menu_class' => 'nav nav-pills pull-right', )); ?></div>
    
   </div>
    
    	
    	

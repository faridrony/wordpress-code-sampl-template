<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head> 
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name');?> <?php wp_title('|'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php wp_head(); ?>
</head>
<?php
/* just for checkout the class */
	if(is_home()):
		$custom_class=array('my-class');
	else:
		$custom_class=array('no-class');
	endif;
?>
<body <?php body_class($custom_class); ?>>


<!--
================================================================
Call to header image
================================================================
-->

<!-- <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="image"> -->
<!-- or -->
<style type="text/css">
	.class{
		background: url(<?php header_image();  ?>);
	}
</style>


<!--
================================================================ 
Call to menu 
================================================================
-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <!--  <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 
    <?php
wp_nav_menu(
	array(
		'theme-location'=>'menu-id',
    'container'=>false,
    'menu_class'=>'nav navbar-nav navbar-right',
    'walker'=>new Walker_Nav_Primary()
		)
	);
?>
 
 

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



		
<!-- search form -->
<?php get_search_form(); ?>
 



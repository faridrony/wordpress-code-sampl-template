<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">

		<div class="col-sm-9">
<!--
================================================================ 
Loop for posts by wp query
================================================================
-->

<?php



// $blog_posts=new WP_Query('type=post&posts_per_page=1&offset=1&category_name=nai');
$args=array(
	'post_type'=>'post',
	'posts_per_page'=>-1,
	'offset'=>1,// PRINT OTHER POSTS NOT THE FIRST POST
  	'category_name'=>'news',
   
	);
$blog_posts=new WP_Query($args);

if($blog_posts->have_posts()):
	while( $blog_posts->have_posts()) : $blog_posts->the_post();
?>

<?php get_template_part('content','featured'); ?>


<?php
	endwhile;
endif;


// actions to clean
wp_reset_postdata();

?>

 


</div>


<div class="col-sm-3">
<?php dynamic_sidebar('sidebar-2'); ?>
</div>




<div class="col-sm-6">
<div class="jumbotron page-selector">
<h2>Home page</h2><p>This text is for show you that in which page you are now</p>
</div>
</div>

	</div>
</div>




 

<?php get_footer(); ?>
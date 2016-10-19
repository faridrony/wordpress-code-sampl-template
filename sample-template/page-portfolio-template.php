<?php
/*  
Template Name: portfolio
*/
 get_header(); ?>




<div class="container-fluid">
	<div class="row">

		<div class="col-sm-12">
<!--
================================================================ 
Loop for posts 
================================================================
-->
<?php

$args = array(
	'post_type'=>'portfolio',
	'posts_per_page'=>-1
	);
$loop = new WP_Query($args);

if($loop ->have_posts()):
	while($loop ->have_posts()):$loop ->the_post();
?>
 
<p><small>
	
 

	<?php  
	/*$field_list=wp_get_post_terms($post->ID,'field');
	$i=0;
	foreach ($field_list as $field) {
		$i++;
		if ($i>1) { echo " | ";}
		echo $field->name;
	};*/
	echo  simple_get_taxonomy($post->ID,'field'); ?>
	||
	<?php echo  simple_get_taxonomy($post->ID,'software'); ?>

	<?php 
	if(current_user_can('manage_options')){
		echo '|| '; edit_post_link('Edit This Post');
	};
	?>

	 

</small></p>


<?php get_template_part('content','archive'); ?>
  
 

<?php
	endwhile;
endif;
?>

</div>





<div class="col-sm-6">
<div class="jumbotron page-selector">
<h2>portfolio template page</h2><p>This text is for show you that in which page you are now</p>
</div>
</div>


</div>
</div>



<?php get_footer(); ?>
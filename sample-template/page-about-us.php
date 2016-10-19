<?php
/*  
Template Name: About Us
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
if(have_posts()):
	while(have_posts()):the_post();
?>
<div class="post">

	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php the_post_thumbnail(); ?>

	 <?php the_content(); ?> 
  

</div>

<?php
	endwhile;
endif;
?>

</div>





<div class="col-sm-6">
<div class="jumbotron page-selector">
<h2>About us page</h2><p>This text is for show you that in which page you are now</p>
</div>
</div>


</div>
</div>



<?php get_footer(); ?>
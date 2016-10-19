<?php get_header(); ?>


<div class="container-fluid">
	<div class="row">

		<div class="col-sm-9">
<!--
================================================================ 
Loop for posts 
================================================================
-->
 
 
<?php
if(have_posts()):
	while(have_posts()):the_post();
?>

<article <?php post_class('post','page'); ?> id="<?php the_id(); ?>">

	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php the_post_thumbnail('medium',array( 'class'=> "img-responsive")); ?>

	<span>
	Posted by: <?php the_author(); ?>, 
	Posted on: <a href="<?php the_permalink(); ?>"> <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></a> 
	<?php comments_popup_link('no comments','one comments','% comments','link class','disable'); ?>
	</span>

	<?php the_content(); ?>
 
	 

</article>


<?php endwhile; ?>



<?php endif; ?>
 
 
</div>


<div class="col-sm-3">
	<?php get_sidebar(); ?>
</div>





<div class="col-sm-6">
<div class="jumbotron page-selector">
<h2> normal page</h2><p>This text is for show you that in which page you are now</p>
</div>
</div>

	</div>
</div>



<?php get_footer(); ?>
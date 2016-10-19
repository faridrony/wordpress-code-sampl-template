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

 
<article <?php post_class(array('post','single')); ?> id="<?php the_id(); ?>">
 
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

<p><small>
	
	
	<?php if(has_category()):?>
	<?php the_category(' , ');  ?> || 
	<?php endif; ?> 


	<?php if(has_tag()):?>
	<?php the_tags(' '); ?> ||
	<?php endif; ?> 
	

	<?php edit_post_link('EDIT THE POST'); ?>

</small></p>

	<?php the_post_thumbnail('large',array( 'class'=> "img-responsive")); ?>

	<?php the_content(); ?>
  	
 <hr>

 
 
<div class="row">
<div class="col-sm-6">
	<div class="prev">
	<?php previous_post_link(); ?>
	</div>
</div>
<div class="col-sm-6">
	<div class="next text-right">
	<?php next_post_link(); ?>
	</div>
</div>
</div>



  	<hr>
  	<?php if( comments_open() ){ comments_template(); } ?>

</article>

<?php
	endwhile;
endif;
?>



<div class="col-sm-6">
<div class="jumbotron page-selector">
<h2>Single page</h2><p>This text is for show you that in which page you are now</p>
</div>
</div>

</div>
</div>
</div>


 
<?php get_footer(); ?>
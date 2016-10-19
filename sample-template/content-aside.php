 
<article <?php post_class(array('post','aside')); ?> id="<?php the_id(); ?>">
 
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php the_post_thumbnail('small'); ?>

	<p><?php readmore(50); ?> </p>
 
	<a href="<?php the_permalink(); ?>"><small>read more</small></a>

</article>
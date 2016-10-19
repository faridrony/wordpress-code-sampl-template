<article <?php post_class('post'); ?> id="<?php the_id(); ?>">

	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php the_post_thumbnail('small'); ?>

	<span>
	Posted by: <?php the_author(); ?>, 
	Posted on: <a href="<?php the_permalink(); ?>"> <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></a> 
	<?php comments_popup_link('no comments','one comments','% comments','link class','disable'); ?>
	</span>

	<p><?php readmore(50); ?> </p>
 
	<p><a href="<?php the_permalink(); ?>"><small>read more</small></a></p>

</article>
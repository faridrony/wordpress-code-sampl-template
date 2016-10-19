


<article <?php post_class(array('post','search')); ?> id="<?php the_id(); ?>">


	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php the_post_thumbnail(); ?>

<?php the_content(); ?>
 
</article>
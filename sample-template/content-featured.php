


<article <?php post_class(array('post','featured')); ?> id="<?php the_id(); ?>">

<?php if( has_post_thumbnail()): ?>
 

 <?php the_post_thumbnail('small', array()); ?>

<?php else: ?>

<?php the_content(); ?>
 

<?php endif; ?>



<p>Category :<i> <?php  the_category(); ?> </i></p>
</article>
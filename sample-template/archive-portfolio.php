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
if(have_posts()):?>
<div class="jumbotron text-center">
	<?php the_archive_title('<h2>','</h2>'); ?>
	<?php the_archive_description('<em>','</em>'); ?>
</div>
<?php
	while(have_posts()):the_post();
?>


<?php get_template_part('content','archive'); ?>

<?php endwhile; ?>

 

<?php endif; ?>
 
 
</div>


<div class="col-sm-3">
	<?php get_sidebar(); ?>
</div>





<div class="col-sm-6">
<div class="jumbotron page-selector">
<h2>portfolio archive page</h2><p>This text is for show you that in which page you are now</p>
</div>
</div>

	</div>
</div>



<?php get_footer(); ?>
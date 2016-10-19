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
// by this code can handle control the post limit 
$current_page=(get_query_var('paged')) ? get_query_var('paged'): 1 ;
$args = array('posts_per_page' => -1, 'paged'=>$current_page);
query_posts($args);

?>


<?php
if(have_posts()):
	while(have_posts()):the_post();
?>

<?php get_template_part('content',get_post_format()); ?>

<?php endwhile; ?>

<!-- -->
<div class="row">
<div class="col-sm-6">
	<div class="prev">
		<?php previous_posts_link('<< Newer Posts'); ?>
	</div>
</div>
<div class="col-sm-6">
	<div class="next text-right">
		<?php next_posts_link(' Older Posts >>'); ?>
	</div>
</div>
</div>

<?php endif; ?>
 
 
</div>


<div class="col-sm-3">
	<?php get_sidebar(); ?>
</div>





<div class="col-sm-6">
<div class="jumbotron page-selector">
<h2>Index / blog page</h2><p>This text is for show you that in which page you are now</p>
</div>
</div>

	</div>
</div>



<?php get_footer(); ?>
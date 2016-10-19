<?php get_header(); ?>



<div class="container-fluid">
	<div class="row">

<div class="col-sm-12">

<div class="jumbotron page-selector text-center">
<h2>404 page</h2>
<h1>Sorry page not found</h1>
<h3>It looks like nothing was found at this location</h3>
</div>

</div>

<div class="col-sm-8">

<?php the_widget('WP_Widget_Recent_Posts'); ?>

<hr>

<h3>Check the most used categories</h3>

<ul>
	<?php 
		wp_list_categories(array(
			'orderby'=>'count',
			'order'=>'DESC',
			'show_count'=>1,
			'title_li'=>'',
			'number'=>'5'
			));
	?>


</ul>
<hr>
<?php the_widget('WP_Widget_Archives','dropdown=0',"after_title=</h2> $archive_content"); ?>

</div>
 
</div>
</div>


 
<?php get_footer(); ?>
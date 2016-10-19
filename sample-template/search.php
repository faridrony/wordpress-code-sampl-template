<?php get_header(); ?>



<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9">
<!--
================================================================ 
Loop for posts by wp query
================================================================
-->

<?php

if(have_posts()):
	while(have_posts()) : the_post();
?>

<?php get_template_part('content','search'); ?>


<?php
	endwhile;

else: ?>

<h1>No posts Here </h1>
 
<?php
endif;

?>

  
</div>

 <div class="col-sm-3">
<?php dynamic_sidebar('sidebar-2'); ?>
</div>


<div class="col-sm-6">
<div class="jumbotron page-selector">
<h2>Search page</h2><p>This text is for show you that in which page you are now</p>
</div>
</div>

	</div>
</div> 

<?php get_footer(); ?>
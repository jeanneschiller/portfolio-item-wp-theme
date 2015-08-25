<div class="about-me-container">
	<div class="about-me-header">	
		<?php

		/*
			Template Name: About Me, No Sidebar
		*/

		get_header();  ?>
	</div>
	<div class="main">
	  <div class="container container-container clearfix">
		<div class="page-full-text">
		    <?php // Start the loop ?>
		    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		      <h2 class="about-title"><?php the_title(); ?></h2>
		      <div class="about-post">
		      	<p><?php the_content(); ?></p>
		      </div>
		    <?php endwhile; // end the loop?>
			
		</div> <!-- /.page-full-text -->
		<div class="page-full-img">    
		    <?php 
		    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		    	the_post_thumbnail(contain);
		    } 
		    ?>
		</div> <!-- /.page-full-img -->    
	  </div> <!-- /.container -->
	</div> <!-- /.main -->
</div>	
<div class="about-me-footer footer-container content-grey">
	<?php get_footer(); ?>
</div>

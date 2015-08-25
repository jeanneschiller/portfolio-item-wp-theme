<?php

/*
  Template Name: blog
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content blog-container">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /.content -->



  </div> <!-- /.container -->
</div> <!-- /.main -->
  
<div class="footer-container content-grey">
<?php get_footer(); ?>
</div>
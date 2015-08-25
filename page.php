<?php get_header();  ?>

<div class="main page-main">
  <div class="container">

    <div class="content page-content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="page-content-title">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="page-content-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->
    <?php get_sidebar(); ?> 
  </div> <!-- /.container -->
</div> <!-- /.main -->
<div class="footer-container content-grey">
<?php get_footer(); ?>
</div>
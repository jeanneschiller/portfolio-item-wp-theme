<?php 

/*
  Template Name: archives
*/

get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <h1>Tag Archives: <?php single_tag_title(); ?></h1>
      <?php get_template_part( 'loop', 'tag' ); ?>
    </div> <!-- /.content -->

  </div><!-- /.container -->
</div><!-- /.main -->

<div class="footer-container content-grey">
  <?php get_footer(); ?>
 </div> 
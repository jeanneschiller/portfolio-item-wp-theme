<?php

/*
  Template Name: archives
*/

get_header();  ?>


<div class="main">
  <div class="container">
    <div class="content-grey">

      <h1 class="category-title">Category Archives: <?php single_cat_title(); ?></h1>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?>
    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->
<div class="footer-container content-grey archive-footer">
  <?php get_footer(); ?>
 </div> 
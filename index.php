<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

	<!-- Content -->
    <div class="content">

    		<?php get_template_part( 'loop', 'index' );	?>

    </div> <!--/.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->
 <div class="footer-container content-grey">
<?php get_footer(); ?>
</div>
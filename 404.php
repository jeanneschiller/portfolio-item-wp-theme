<?php

/*
  Template Name: 404-not-found
*/

get_header();  ?>

<div class= "not-found-container">

	<div class="main">
	  <div class="container not-found-body">
	    <h2>Not Found</h2>
	    <br>
	    <p>Apologies, but the page you requested could not be found. Perhaps searching will help.</p>
	    <?php get_search_form(); ?>

	  </div> <!-- /.container -->
	</div> <!-- /.main -->

	<div class="footer-container content-grey">
		<?php get_footer(); ?>
	</div>
</div>
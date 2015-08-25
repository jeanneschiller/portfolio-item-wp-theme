<footer>
  <div class="container social-footer">
  	<?php  dynamic_sidebar( 'footer-logo' ); ?>
    <p>&copy; <a class="contact" href="http://evanolivia.com/">Evan Davis</a> &amp <a class="contact" href="http://jeanneschiller.com/">Jeanne Schiller </a><?php echo date('Y'); ?></p>
    <?php  dynamic_sidebar( 'footer-social' ); ?>
  </div>
</footer>


<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
<?php wp_footer(); ?>
</body>
</html>
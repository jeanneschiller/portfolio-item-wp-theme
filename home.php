<?php //template name: homepage?>
<?php get_header(); ?>

<div class="main">
  <div class="homepage-container">

	<!-- Content -->
    <div class="content-grey">
    <div class="boxes-container">
		<?php  if(have_posts()){
			while(have_posts()) {
				the_post();
				?>
                    <!-- Home page posts -->
                    <!-- content that is on the home page goes in this loop -->
                    <div class="main-photo-container">
                        <img class="main-photo"><?php the_post_thumbnail('square'); ?></img>
                        <h2 class="main-title"><?php the_content(); ?></h2>
                    </div>
                    
                    <?php 
                    $postsArgs = array('post_type' => 'post', 'posts_per_page' => 8);
                    $postsLoop = new WP_Query($postsArgs);

                    if($postsLoop->have_posts()) {
                        while($postsLoop->have_posts()) {
                            $postsLoop->the_post();
                            ?>
                            <!-- Blog posts -->
                            <!-- For each blog post you get to work with that in here -->
                            <div class="blog-photo-container">
                                 
                                <img class="blog-photo"><?php the_post_thumbnail('small-square'); ?>
                                 
                                 <a class="blog-link" href= <?php the_permalink( get_page_by_title("<?php the_title(); ?>")); ?> >
                                 <div class="blog-info">  
                                    <h3 class="blog-title"><?php the_title(); ?></h3>
                                    <p class="blog-date"><?php the_date('M j, Y'); ?></p>
                                </div> <!--/.blog-info-->
                                </a>
                               
                            </div><!--.blog-photo-container-->

                            <?php
                        }
                    }

                    ?>


				<?php
			}//end of while loop
		}//end of if statement
		?>
        </div> <!--/.boxes-container-->

    </div> <!--/.content-grey -->

  </div> <!-- /.container -->
</div> <!-- /.main -->
<div class="footer-container content-grey">
    <?php get_footer(); ?>
</div>
<?php

/*
  Template Name: blog
*/

get_header();  ?>
  </div> <!-- /.container --><div class="main">
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
                    
                    <?php 
                    $postsArgs = array('post_type' => 'post', 'posts_per_page' => 10);
                    $postsLoop = new WP_Query($postsArgs);

                    if($postsLoop->have_posts()) {
                        while($postsLoop->have_posts()) {
                            $postsLoop->the_post();
                            ?>
                            <!-- Blog posts -->
                            <!-- For each blog post you get to work with that in here -->
                            
                                 
                                <?php the_post_thumbnail('medium'); ?>
                                 
                                  
                                <h3 class="blog-title"><?php the_title(); ?></h3>
                                <p class="blog-date"><?php the_date('M j, Y'); ?></p>
                                <p> <?php the_content(); ?> </p>
                              

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

</div> <!-- /.main -->

<div class="footer-container content-grey">
  <?php get_footer(); ?>
</div>
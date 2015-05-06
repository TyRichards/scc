<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container">
        <div class="row">
            <section class="main-col page-content col-sm-7">
                <div id="main" class="site-main" role="main">
                    <?php
                    while (have_posts()) {
                      the_post();

                      get_template_part('content', 'page');

                      echo "\n\n";
                   // If comments are open or we have at least one comment, load up the comment template
                      if (comments_open() || '0' != get_comments_number()) {
                        comments_template();
                      }

                      echo "\n\n";

                    } //endwhile;
                    ?>                 
               </div>
            </section> 
            <section class="sidebar-col sidebar-right sidebar col-sm-5">
                <div class="col-sm-12 col-md-10 col-md-offset-2 col-no-padding-xs">
    <!--                 <?php 
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail('sidebar-thumb', array('class' => 'feature-image attachment-sidebar-thumb img-rounded' ));
                        } 
                        else {
                            ?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar-default.jpg" class="feature-image attachment-sidebar-thumb wp-post-image img-rounded col-md-9 col-no-padding" alt="<?php wp_title('|', true, 'right'); ?>"><?php
                        }
                    ?>   -->       
                    <?php get_sidebar('default'); ?>
                </div>
            </section>                   
        </div> <!-- .row -->
    </div>
</section>


<?php get_footer(); ?> 
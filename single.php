<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="<?php echo get_theme_mod('minimal_blogging_home_layout', 'col-md-8'); ?>">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <?php if (have_posts()) :
                            while (have_posts()) :
                                the_post();
                                ?>

                                <?php get_template_part( 'content-single' ); ?>

                                <?php if (!get_theme_mod('minimal_blogging_post_nav')) { ?>
                                    <div class="post-nav-area">
                                        <?php minimal_blogging_post_navigation(); ?>
                                    </div>
                                <?php } ?>

                                <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if (comments_open() || '0' != get_comments_number()) {
                                    comments_template();
                                }
                                ?>

                            <?php endwhile; // end of the loop. ?>

                        <?php else : ?>

                            <?php get_template_part('content', 'none'); ?>

                        <?php endif; ?>
                    </main> 
                </div>  
            </div> 

            
            <?php get_sidebar(); ?>

        </div> 
    </div> 
<?php get_footer(); ?>
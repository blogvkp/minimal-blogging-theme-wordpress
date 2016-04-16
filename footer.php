
    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">

                    <?php if (!get_theme_mod('minimal_blogging_footer_social_check' )) : ?>
                        <div class="footer-social-icons">
                            <?php if (get_theme_mod('minimal_blogging_facebook')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_facebook')); ?>"><i class="fa fa-facebook"></i></a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('minimal_blogging_twitter')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_twitter')); ?>"><i class="fa fa-twitter"></i></a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('minimal_blogging_google')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_google')); ?>"><i class="fa fa-google-plus"></i></a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('minimal_blogging_youtube')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_youtube')); ?>"><i class="fa fa-youtube"></i></a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('minimal_blogging_skype')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_skype')); ?>"><i class="fa fa-skype"></i></a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('minimal_blogging_pinterest')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_pinterest')); ?>"><i class="fa fa-pinterest"></i></a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('minimal_blogging_flickr')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_flickr')); ?>"><i class="fa fa-flickr"></i></a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('minimal_blogging_linkedin')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_linkedin')); ?>"><i class="fa fa-linkedin"></i></a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('minimal_blogging_vimeo')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_vimeo')); ?>"><i class="fa fa-vimeo-square"></i></a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('minimal_blogging_instagram')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_instagram')); ?>"><i class="fa fa-instagram"></i></a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('minimal_blogging_dribbble')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_dribbble')); ?>"><i class="fa fa-dribbble"></i></a>
                            <?php endif; ?>
                            <?php if (get_theme_mod('minimal_blogging_tumblr')) : ?>
                                <a class="btn btn-social fill-horizontal" href="<?php echo esc_url(get_theme_mod('minimal_blogging_tumblr')); ?>"><i class="fa fa-tumblr"></i></a>
                            <?php endif; ?>
                            
                        </div>
                    <?php endif; ?>

                    <p><?php
                        $copyright = get_theme_mod('minimal_blogging_footer_copyright');
                        $allowed_tags = array(
                            'strong' => array(),
                            'a' => array(
                                'href' => array(),
                                'title' => array()
                            )
                        );
                     echo wp_kses( $copyright, $allowed_tags ); ?></p>

                     <p class="please-dont-remove"><a href="http://wpvkp.com" target="_blank">Blogging WordPress Theme</a></p>

                </div>
            </div>
        </div>
    </footer>

    <?php if (!get_theme_mod('minimal_blogging_back_to_top')): ?>
        <div class="scroll-up">
            <a href="#"><i class="fa fa-angle-up"></i></a>
        </div>
    <?php endif; ?>
    

    <?php wp_footer();?>
    </body>
</html>
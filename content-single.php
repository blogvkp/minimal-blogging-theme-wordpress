<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
            <sup class="featured-post"><i class="fa fa-star"></i></sup>
        <?php } ?>

        <?php if ( has_post_thumbnail() && ! post_password_required() ) { ?>
        <div class="entry-thumbnail">
            <?php the_post_thumbnail('minimal_blogging-thumb', array('class' => 'img-responsive')); ?>
        </div>
        <?php } //.entry-thumbnail ?>

    </header> <!--/.entry-header -->

    <div class="clearfix post-content media">

        <h2 class="entry-title">
            <?php the_title(); ?>
        </h2> 

        <div class="clearfix entry-meta">
            <?php minimal_blogging_posted_on() ?>
        </div> <!--/.entry-meta -->
        
        <div class="entry-summary">
            <?php the_content(); ?>
        </div> 
        
        <?php if (!get_theme_mod('minimal_blogging_post_tags')): ?>
            <div class="entry-tags"><?php the_tags(__('<b>Tags:</b> ', 'minimal_blogging'), ', ', ''); ?></div>
        <?php endif; ?>

    </div>

</article> <!--/#post-->





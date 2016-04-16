

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
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
        
        <div class="entry-summary">
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'minimal_blogging' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div> 

    </div>

</article> <!--/#post-->
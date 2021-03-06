<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if(!get_theme_mod('_preloader') ): ?>
    <div id="st-preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>
<?php endif; ?>

<header id="header">    
    <div id="trueHeader">
        <div class="wrapper">
            <div class="container">
                
                <div class="menu_main">
                    <div class="navbar blogx-navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navber-collapse">
                                <span class="sr-only"><?php echo __('Toggle navigation', 'minimal_blogging'); ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <?php if(get_theme_mod('_logo')): ?>
                                <div class="logo">
                                    <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_theme_mod('_logo')); ?>"></a>
                                </div>
                            <?php else: ?>
                                <div class="text-logo">
                                    <h1 class="logo"><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name' ); ?></a></h1>
                                    <h3 class="description"><?php bloginfo('description' ); ?></h3>
                                </div>
                            <?php endif; ?>
                        </div>
                      
                        <div id="st-navber-collapse" class="navbar-collapse collapse pull-right">
                            <?php wp_nav_menu(array(
                                    'container'      => false,
                                    'theme_location' => 'primary',
                                    'items_wrap'     => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
                                    'walker'         => new wp_bootstrap_navwalker(),
                                    'fallback_cb'    => 'wp_bootstrap_navwalker::fallback'
                                    )
                                );
                            ?> 
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</header>
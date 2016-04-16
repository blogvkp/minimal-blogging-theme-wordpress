<?php

    /**
     * Set the content width based on the theme's design and stylesheet.
     */
    if ( ! isset( $content_width ) ) {
        $content_width = 1170; /* pixels */
    }

    if ( ! function_exists( 'minimal_blogging_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function minimal_blogging_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on minimal_blogging, use a find and replace
         * to change 'minimal_blogging' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'minimal_blogging', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );


        // Register menu.
        function minimal_blogging_register_menus() {
            register_nav_menus( array( 'primary'      => __( 'Primary Menu','minimal_blogging' ) ) );
        }
        add_action('init', 'minimal_blogging_register_menus');

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ) );

        // Post Formats.
        add_theme_support( 'post-formats', array( 
            'aside', 'image', 'audio', 'video', 'gallery', 'quote', 'link', 'chat'
        ) );

        // Post thumbnails
        add_theme_support( 'post-thumbnails' );
        add_image_size('minimal_blogging-thumb', 1140, 560, TRUE);


        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'minimal_blogging_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
    }
    endif; // minimal_blogging_setup
    add_action( 'after_setup_theme', 'minimal_blogging_setup' );

function load_fonts() {
            wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Poppins:500');
            wp_enqueue_style( 'googleFonts');

            wp_register_style('googleFonts1', 'https://fonts.googleapis.com/css?family=Lato:400italic');
            wp_enqueue_style( 'googleFonts1');

            wp_register_style('googleFonts2', 'https://fonts.googleapis.com/css?family=Quicksand');
            wp_enqueue_style( 'googleFonts2');
        }
    add_action('wp_print_styles', 'load_fonts');


    //////////////////////////////////////////////////////////////////
    // Register widget area.
    //////////////////////////////////////////////////////////////////
    function minimal_blogging_widgets_init()
    {
        register_sidebar(array(
            'name'          => __('Blog Sidebar', 'minimal_blogging'),
            'id'            => 'minimal_blogging-sidebar',
            'description'   => __('Appears in the blog sidebar.', 'minimal_blogging'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));

        register_sidebar(array(
            'name'          => __('Page Sidebar', 'minimal_blogging'),
            'id'            => 'minimal_blogging-page-sidebar',
            'description'   => __('Appears in the Page sidebar.', 'minimal_blogging'),
            'before_widget' => '<div id="%1$s" class="page-widget widget %2$s clear">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));

        
    }

    add_action('widgets_init', 'minimal_blogging_widgets_init');



    //////////////////////////////////////////////////////////////////
    // Enqueue scripts and styles.
    //////////////////////////////////////////////////////////////////

    function minimal_blogging_scripts() {
        
        // CSS

        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.5');
        wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.4.0');
        wp_enqueue_style( 'minimal_blogging-stylesheet', get_stylesheet_uri() );
        wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), NULL);

        // JS Files
        wp_enqueue_script( 'jquery');
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.5', TRUE );
        wp_enqueue_script( 'minimal_blogging-scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), NULL, TRUE );
        wp_enqueue_script( 'fitvids-js', get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array('jquery'), NULL, TRUE );
        wp_enqueue_script( 'smoothscroll-js', get_template_directory_uri() . '/assets/js/smoothscroll.js', array('jquery'), NULL, TRUE );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'minimal_blogging_scripts' );


    //////////////////////////////////////////////////////////////////
    // Comment
    //////////////////////////////////////////////////////////////////

    if(!function_exists('minimal_blogging_comment')):

        function minimal_blogging_comment($comment, $args, $depth)
        {
            $GLOBALS['comment'] = $comment;
            switch ( $comment->comment_type ) :
                case 'pingback' :
                case 'trackback' :
                // Display trackbacks differently than normal comments.
            ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                <p>Pingback: <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'minimal_blogging' ), '<span class="edit-link">', '</span>' ); ?></p>
            <?php
                    break;
                default :
                
                global $post;
            ?>
            <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                <div id="comment-<?php comment_ID(); ?>" class="comment-body media">
                    
                        <div class="comment-avartar pull-left">
                            <?php
                                echo get_avatar( $comment, $args['avatar_size'] );
                            ?>
                        </div>
                        <div class="comment-context media-body">
                            <div class="comment-head">
                                <?php
                                    printf( '<h3 class="comment-author">%1$s</h3>',
                                        get_comment_author_link());
                                ?>
                                <span class="comment-date"><?php echo get_comment_date() ?></span>
                            </div>

                            <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'minimal_blogging' ); ?></p>
                            <?php endif; ?>

                            <div class="comment-content">
                                <?php comment_text(); ?>
                            </div>

                            <?php edit_comment_link( __( 'Edit', 'minimal_blogging' ), '<span class="edit-link">', '</span>' ); ?>
                            <span class="comment-reply">
                                <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'minimal_blogging' ), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                            </span>

                        </div>
                    
                </div>
            <?php
                break;
            endswitch; 
        }

    endif;


function new_excerpt_more($more) {
       global $post;
    return '<a class="moretag" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Navwalker
require_once get_template_directory() . "/includes/wp_bootstrap_navwalker.php";

// Custom template tags for this theme.
require get_template_directory() . '/includes/template-tags.php';

// Custom functions that act independently of the theme templates.
require get_template_directory() . '/includes/extras.php';

// Load Jetpack compatibility file.
require get_template_directory() . '/includes/jetpack.php';

// Theme Customizer
include('admin/functions/customizer/minimal_blogging_customizer_settings.php');
include('admin/functions/customizer/minimal_blogging_color_customize.php');




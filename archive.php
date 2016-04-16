<?php get_header(); ?>

<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="<?php echo esc_attr(get_theme_mod('minimal_blogging_home_layout', 'col-md-8')); ?>">
				<header class="archive-title">
					<?php
						minimal_blogging_archive_title( '<h2 class="st-page-title">', '</h2>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header>
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
					<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ 
						while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content' ); ?>

						<?php endwhile; ?>

							<?php
							 	// Posts Pagination
								if (get_theme_mod('minimal_blogging_pagination') == 'navigation') {
									minimal_blogging_posts_navigation();
								}
								else{
									minimal_blogging_posts_pagination();
								}
							?>

						<?php else : ?>

							<?php get_template_part( 'content', 'none' ); ?>

						<?php endif; ?>

					</main>
				</div>
			</div> 

						
			<?php get_sidebar(); ?>
			
		</div> 
	</div>
</div>
<?php get_footer(); ?>

<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<header class="search-header">
				<h2 class="search-title"><?php printf( __( 'Search Results: %s', 'minimal_blogging' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

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

<?php get_footer(); ?>

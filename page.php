<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div id="primary" class="content-area col-md-8">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

    					<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
						?>


					<?php endwhile; // end of the loop. ?>

				</main>
			</div>

			<div class="col-md-4">
				<?php dynamic_sidebar('minimal_blogging-page-sidebar'); ?>
			</div>
			
		</div> 
	</div> 
<?php get_footer(); ?>
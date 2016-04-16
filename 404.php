<?php get_header('alternative'); ?>

<div id="content" class="site-content">	
	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<section class="error-404 not-found text-center">
						    <strong><?php _e( '404', "minimal_blogging" ); ?></strong>
						    <br/>
						    <span><?php _e( 'Page Not Found!', "minimal_blogging" ); ?></span>

							<footer class="page-footer">
								<a href="<?php echo esc_url(home_url());?>" class="btn btn-goback"><?php _e( 'Go Back to Home', "minimal_blogging" ); ?></a>
							</footer> 

						</section> 
					</main>
				</div>
			</div> 
		</div> 
	</div>	
</div> 

<?php get_footer('alternative'); ?>
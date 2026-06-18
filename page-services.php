<?php
/* Template Name: Page Services */

defined( 'ABSPATH' ) || exit;

get_header();


?>

<div class="wrapper pt-site-wrapper" id="page-wrapper">




			<section class="block-section">
				 

			<div class="wrapper_tw  pt-site-wrapper" id="page-wrapper">

				<div class="container" id="content" tabindex="-1">

					
						<div class="projects-intro">
							<div class="section-heading banner-title-name py-4">
								<h2 class="site-text-primary"><?php the_title(); ?></h2>
							</div>
							<div class="wt-bnr-inr-entry pt-3">
								<?php the_content(); ?>
							</div> 

						</div>
						
						<div class="wrapper_list_beco">
							<div class="it-sv-counter row justify-content-center justify-content-md-start text-md-start">
			
								<?php
								$args = array(
									'post_type' => 'service',
									'posts_per_page' => 6
								);

								$query = new WP_Query($args);

								if($query->have_posts()) :

								while($query->have_posts()) :
								$query->the_post();
								?>
							
								<div class="col-md-6 col-lg-4 pe-md-4 pe-lg-6">
									<div class="service-box-item">

										<div class="service-tilte cs-title text-2xl font-bold mb-3">
											<h3 class="wt-name"><?php the_title(); ?> </h3>
										</div>


									</div>
									
									
								</div>
								<?php endwhile; wp_reset_postdata(); endif; ?>

							</div>
						</div>

				

				</div><!-- #content -->

				</div><!-- #page-wrapper -->

			</section>
			
		


</div><!-- #page-wrapper -->

<?php get_footer();

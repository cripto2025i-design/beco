<?php
/* Template Name: Page FAQ */

defined( 'ABSPATH' ) || exit;

get_header();


?>

<div class="wrapper pt-site-wrapper" id="page-wrapper">


		<div class="row">


			<section class="block-section">
				 

			<div class="wrapper_tw  pt-site-wrapper" id="page-wrapper">

				<div class="container" id="content" tabindex="-1">

					<div class="row">
						<div class="projects-intro">
							<div class="section-heading banner-title-name py-4">
								<h2 class="site-text-primary"><?php the_title(); ?></h2>
							</div>
							<div class="wt-bnr-inr-entry pt-3">
								<?php the_content(); ?>
							</div> 

						</div>
						
						<div class="wrapper_list">
							<?php
							$args = array(
								'post_type' => 'faq',
								'posts_per_page' => 6
							);

							$query = new WP_Query($args);

							if($query->have_posts()) :

							while($query->have_posts()) :
							$query->the_post();
							?>
						
							<div class="wt-item">
								
								<div class="wt-tilte cs-title text-2xl font-bold mb-3">
									<h3 class="wt-name"><?php the_title(); ?> </h3>
								</div>
							</div>
							<?php endwhile; wp_reset_postdata(); endif; ?>

						</div>

					</div><!-- .row -->

				</div><!-- #content -->

				</div><!-- #page-wrapper -->

			</section>
			
		

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();

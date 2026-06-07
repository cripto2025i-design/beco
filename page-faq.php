<?php
/* Template Name: Page FAQ */

defined( 'ABSPATH' ) || exit;

get_header();


?>

<div class="wrapper pt-site-wrapper" id="page-wrapper">

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
						
						<div class="wrapper_faq">
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
						
							<div class="faq-item wt-item">
								
								<div class="faq-header wt-tilte cs-title text-2xl font-bold mb-3">
									<h3 class="wt-name"><?php the_title(); ?> </h3>
								</div>
                <div class="faq-content">
                  <div class="content-inner">
                      <?php the_content(); ?>
                  </div>

                </div>
							</div>
							<?php endwhile; wp_reset_postdata(); endif; ?>

						</div>

					</div><!-- .row -->

				</div><!-- #content -->

				</div><!-- #page-wrapper -->

			</section>
			
		
			 <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-9">

            <div class="faq-wrapper">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="150">
                <div class="faq-header">
                  <span class="faq-number">01</span>
                  <h4>Donec sollicitudin molestie malesuada proin eget tortor?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                      malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
                    </p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-header">
                  <span class="faq-number">02</span>
                  <h4>Sed porttitor lectus nibh vivamus magna justo?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                      Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor
                      volutpat.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="250">
                <div class="faq-header">
                  <span class="faq-number">03</span>
                  <h4>Pellentesque habitant morbi tristique senectus?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam
                      vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <div class="faq-header">
                  <span class="faq-number">04</span>
                  <h4>Lorem ipsum dolor sit amet consectetur adipiscing?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                      Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="350">
                <div class="faq-header">
                  <span class="faq-number">05</span>
                  <h4>Curabitur aliquet quam id dui posuere blandit?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                      deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->
	


</div><!-- #page-wrapper -->

<?php get_footer();

<?php
/* Template Name: Page FAQ */

defined( 'ABSPATH' ) || exit;

get_header();


?>

<div class="wrapper pt-site-wrapper" id="page-wrapper">

			
			 <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-9">

           
           <div class="faq-wrapper">
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
                            
                   <div class="faq-item" data-aos="fade-up" data-aos-delay="150">
                                    
                         <div class="faq-header">
                           
                            <h4><?php the_title(); ?></h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <?php the_content(); ?>
                            </div>

                        </div>
                    </div>
                                <?php endwhile; wp_reset_postdata(); endif; ?>

            </div>


          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->
	


</div><!-- #page-wrapper -->

<?php get_footer();

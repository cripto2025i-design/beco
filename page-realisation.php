<?php
/* Template Name: Réalisation */
get_header();
wp_reset_postdata();
$content = get_the_content();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wt-bnr-inr overlay-wraper bg-center">
    <div class="overlay-main site-bg-secondry opacity-07"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="section-heading banner-title-name py-4">
                    <h2 class="site-text-primary"><?php the_title(); ?></h2>
                </div>
            </div>                  
        </div>
    </div>
</div>
            
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			 <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30 aos-item" data-aos="fade-right" data-aos-delay="100">
                   <?php
                    
                        $args = array('post_type' => 'realisation', 
                                      'posts_per_page' => 99
                        
                        );
                        $wp_query = new WP_Query( $args );
                    ?>
                    <?php if ($wp_query->have_posts()): ?>
                    <div class="testimonial-slider ">
                        
                        
                        <?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
                        <div class="wt-item">
                            <div class="wt-content text-center">
                                 <?php the_post_thumbnail(); ?> 
                            </div>
                            <div class="wt-tilte  m-b10 m-t0 text-right">
                                <h3 class="wt-name"><?php the_title(); ?> </h3>
                            </div>
                        </div>

                        
                    <?php endwhile; ?>

                    </div>
                     <?php endif ?>
                    <?php wp_reset_query(); ?>
                </div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>

<?php
/* Template Name: Page contact */

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">


			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					
					
					<article id="post-<?php the_ID(); ?>" class="row">

                           <div class="col-12">
                                <header class="entry-header section-heading banner-title-name py-3 mb-4">

                                <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

                                </header><!-- .entry-header -->
                           </div>
                           

                            <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                            
                            <div class="col-lg-6">
                               <div class="entry-content">
                               
                               <div class="info-box  mb-4">
                                  <p class="mb-0 font-weight-bold"><i class="fal fa-mobile"></i> Téléphone</p>
                                  <p><a href="tel:+261376783362">+261376783362</a></p>
                                </div>
                                
                                <div class="info-box  mb-4">
                                  <p class="mb-0 font-weight-bold"><i class="fal fa-envelope"></i> Adresse e-mail</p>
                                  <p><a href="mailto:becomada@gmail.com" target="_blank">becomada@gmail.com</a></p>
                                </div>
                                
                                 <div class="info-box  mb-4">
                                  <p class="mb-0 font-weight-bold"><i class="fal fa-map-marker-alt"></i> Adresse</p>
                                  <p>Lot IVK 195QZ à Befelatanana Madagascar</p>
                                </div>
                                
                                
                                 

                                </div><!-- .entry-content -->
                           </div>
                           

                           <div class="col-lg-6">
                               <div class="entry-content">

                                <?php the_content(); ?>


                                </div><!-- .entry-content -->
                           </div>
                           
                          
                            

                            
                        </article><!-- #post-## -->
                

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
		

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();

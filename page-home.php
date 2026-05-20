<?php
/**
 *	Template Name: Home Template
 */	
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<section class="hero-block pt-site-wrapper">
    <div class="hero-bg" id="heroBgImg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/workplace-top-view-construction.jpg);">

		<div class="container hero-container">
			<div class="hero-wrap-item"> 
				<div class="hero-text">
					<h2 class="hero-title">Bureau d’études structure et modélisation BIM</h2>
					<p>Solutions techniques fiables, optimisées et conformes aux normes internationales.</p>
			
				</div>
			
			</div>

		</div>
		
    </div>
</section>
<section id="section-who-we-are" class="section-who-we-are py-4">
    
        <div class="container tf-container">

            <div class="who-we-are-inner">
            <h3 class="text-heading title mb-4">Qui sommes nous?</h3>
            <div class="who-we-are_description">
                <p>BET BECO (Bureau d’Études BECO) est un bureau d’étude malgache spécialisé en
                    ingénierie de structures et en modélisation BIM. Fondé en 2019, nous avons rapidement
                    gagné la confiance d’acteurs locaux et internationaux (DELGABAT, APAVE REUNION,
                    PIHOUEE & ASSOCIES, VERITAS, etc.) en collaborant sur des projets d’envergure.</p>
                <p>BET
                    BECO est aujourd’hui le partenaire stratégique indispensable pour les professionnels du
                    BTP, les architectes et les maîtres d’ouvrage pour des projets de toute taille.</p>
            </div>
            <a class="who-we-are-button d-none" href="#">Découvrir qui nous sommes</a>

         </div>
        
        </div>

</section>
<section id="chiffres-cles" class="chiffres-cles">
    <div class="container tf-container">
        <div class="statistics_container wrap-counter tf-grid-layout tf-col-2 gap_10">
            <div class="statistics_item counter-item d-flex flex-column">
                <div class="statistics_item_title counter text-display-2 text_primary fw-6 font-2"><span class="numberCounter" data-count="15"
                        data-duration="700">300</span><span class="sub-counter">+</span>
                </div>
                <div class="line"></div>
                <h5 class="sub-title text_secondary statistics_item_description">Projets livrés</h5>
            </div>
            <div class="statistics_item counter-item d-flex flex-column">
                <div class="statistics_item_title counter text-display-2 text_primary fw-6 font-2"><span class="numberCounter" data-count="15"
                        data-duration="700">10</span><span class="sub-counter">+</span></div>
                <div class="line"></div>
                <h5 class="sub-title text_secondary statistics_item_description">Ans d'expérience</h5>
            </div>
            <div class="statistics_item counter-item d-flex flex-column">
                <div class="statistics_item_title counter text-display-2 text_primary fw-6 font-2"><span class="numberCounter"
                        data-count="120" data-duration="700">30</span><span class="sub-counter">+</span></div>
                <div class="line"></div>
                <h5 class="sub-title text_secondary statistics_item_description">Collaborateurs</h5>
            </div>

        </div>

    </div>
    
</section>

<section id="section-realisation" class="block-section section-realisation py-4">
    <div class="container tf-container">
        <h3 class="text-heading title mb-4">
            Nos Réalisations
        </h3>

        <div class="wrapper_list">
        <?php
        $args = array(
            'post_type' => 'realisation',
            'posts_per_page' => 6
        );

        $query = new WP_Query($args);

        if($query->have_posts()) :

        while($query->have_posts()) :
        $query->the_post();
        ?>
    
        <div class="wt-item">
            <div class="wt-content text-center">
                    <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
            </div>
            <div class="wt-tilte cs-title text-2xl font-bold mb-3">
                <h3 class="wt-name"><?php the_title(); ?> </h3>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>

    </div>
    <div>
        <a href="#" class="d-none">Toutes nos réalisations</a> 
        
    </div>
       

    </div>
    
</section>
<section id="section-faq" class="block-section section-faq py-4">
    <div class="container tf-container">
        <h3 class="text-heading title mb-4">
            Questions fréquentes
        </h3>


</section>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->



<?php get_footer();

<?php
/**
 *	Template Name: Home Template
 */	
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<section class="hero-block">
    <div class="hero-bg" id="heroBgImg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/workplace-top-view-construction.jpg);">

		<div class="container hero-container">
			<div class="hero-wrap-item"> 
				<div class="hero-text">
					<h2 class="hero-title">Bâtir l'Avenir avec Expertise et Compétitivité</h2>
					<p>BET BECO est un bureau d'études spécialisé en conception de structures et modélisation BIM. Plus de 100 projets réalisés avec succès.</p>
					<p>Notre engagement est clair : vous fournir une prestation de qualité, abordable et parfaitement alignée sur vos besoins. </p>
				</div>
				<div class="hero-actions flex d-flex d-none">
					<a href="#metiers" class="site-button btn btn-outline-light hero_btn">Qui sommes-nous</a>
				</div>
			</div>

		</div>
		
    </div>
</section>
<!-- #hero -->
<section id="chiffres-cles" class="block-section chiffres-cles">
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
<section class="block-section section-service">
    <div class="tf-container large">
        <h4 class="sub-title">Services</h4>
    </div>
</section>
<section id="section-realisation" class="block-section section-realisation">
    <div class="">
        <h2 class="title mb-4">
            <span>Nos</span> réalisations
        </h2>
       

    </div>
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
        <a href="">Toutes nos réalisations</a>  <h3>Découvrez nos réalisations</h3>
        
    </div>
</section>
<section class="block-section section-white" aria-labelledby="about-title">
        <div class="wrapper self-stretch px-5 py-10 items-center lg:items-start lg:px-20 lg:py-20 flex flex-col gap-20">
            <div class="self-stretch flex flex-col justify-start items-center lg:items-start gap-10">
                <span class="label label-solid-orange" aria-label="About Us">
                    About Us
                </span>

                <div
                    class="self-stretch flex flex-col gap-y-10 lg:gap-y-0 lg:flex-row lg:justify-between items-center lg:items-end">
                    <div data-aos="fade"
                        class="max-w-[800px] w-full text-secondary-navy text-3xl font-medium leading-tight lg:mr-5 text-center lg:text-left"
                        id="about-title">
                        With decades of experience, we specialize in turning ideas into
                        <span class="text-primary-orange">well-designed structures</span>
                        that stand the test of time.
                    </div>
                    <a href="about.html" class="btn group btn-outline-dark" aria-label="Get to Know
                  Us" tabindex="0">
                        Get to Know
                        Us
                        <i class="btn-icon ph ph-arrow-right text-xl" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="self-stretch flex flex-col lg:flex-row justify-between items-center gap-y-20 lg:gap-y-0 lg:items-start"
                aria-label="Company statistics">
                <div data-aos="fade-up" data-aos-delay="000"
                    class="pt-8 border-t-[0.80px] border-base-grey-stroke flex flex-col justify-center items-center gap-4">
                    <div class="text-center justify-start text-secondary-navy text-6xl font-medium leading-tight"
                        aria-label="Years of Experience: 10+">
                        10+
                    </div>
                    <div class="text-center justify-start text-base-grey text-lg font-normal leading-tight">
                        Years of Experience
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100"
                    class="pt-8 border-t-[0.80px] border-base-grey-stroke flex flex-col justify-center items-center gap-4">
                    <div class="text-center justify-start text-secondary-navy text-6xl font-medium leading-tight"
                        aria-label="Projects Completed: 1500+">
                        1500+
                    </div>
                    <div class="text-center justify-start text-base-grey text-lg font-normal leading-tight">
                        Projects Completed
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200"
                    class="pt-8 border-t-[0.80px] border-base-grey-stroke flex flex-col justify-center items-center gap-4">
                    <div class="text-center justify-start text-secondary-navy text-6xl font-medium leading-tight"
                        aria-label="Customer Satisfaction Score: 4.8/5">
                        4.8/5
                    </div>
                    <div class="text-center justify-start text-base-grey text-lg font-normal leading-tight">
                        Customer Satisfaction Score
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300"
                    class="pt-8 border-t-[0.80px] border-base-grey-stroke flex flex-col justify-center items-center gap-4">
                    <div class="text-center justify-start text-secondary-navy text-6xl font-medium leading-tight"
                        aria-label="Project Success Rate: 98%">
                        98%
                    </div>
                    <div class="text-center justify-start text-base-grey text-lg font-normal leading-tight">
                        Project Success Rate
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			

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

			

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();

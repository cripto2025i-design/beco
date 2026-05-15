<?php
/* Template Name: Page Components */

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper pt-site-wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">


			<section class="block-section">
				 <div class="container tf-container">
					<div class="">

						<a href="#" class="bc-btn-outline">Cliquez ici pour en savoir plus</a>
						<p><a href="#" class="button-secondary">Cliquez ici pour en savoir plus</a></p>
					</div>
				</div>
			</section>
			
		

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();

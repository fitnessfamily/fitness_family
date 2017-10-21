<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

<!-- début code éric -->
	<body>	
	<div class="grand_carre_accueil">
		<div id="connexion" class="carre_accueil">
			<p><a href="?page_id=10">Se connecter</a></p>
		</div>
		<div id="repas" class="carre_accueil">
			<p><a href="?page_id=36">Repas</a></p>
		</div>
		<div id="activite" class="carre_accueil">
			<p><a href="activite_physique.php">Activité physique</a></p>
		</div>
		<div id="poids" class="carre_accueil">
			<p><a href="poids.php">Suivi du poids</a></p>
		</div>
	</div>
	</body>

<!-- fin code eric -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();

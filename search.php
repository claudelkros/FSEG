<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	<section class="col-sm-12 col-lg-1 single-aside">
	<?php
          setPostViews(get_the_ID());
	?>
	<div class="single-aside-descrip">
		<strong>FSEG <br></strong>
		<small><i class="fas fa-quote-right"></i> Faculté des Sciences Economiques et de Gestion <i class="fas fa-quote-left"></i></small><br><hr>
	</div>
	</section>

	<section id="primary" class="content-area col-sm-12 col-lg-6">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'fseg-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<section class="col-sm-12 col-lg-1"></section>

<?php
get_sidebar();
get_footer();

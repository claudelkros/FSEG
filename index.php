<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-8 col-md-8 <?php echo is_active_sidebar( 'sidebar-1' )?'col-lg-9':'col-lg-12'; ?>">
		<main id="main" class="site-main" role="main">
            <!-- Include of template part slider -->
            <?php //get_template_part('template-parts/slider'); ?>
            <?php echo do_shortcode('[metaslider id="65"]'); ?>

			<div class="entry-descript pl-3">
				<h1 class="color-site">Actualités</h1>
			</div>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif; ?>
			<div class="container-fluid">
				<div class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>
						<div class="col-md-4">
          					<div class="card mb-4 shadow-sm article-content__text">
								<?php
								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_format() ); ?>
							</div>
						</div>
						<?php endwhile; ?>
				</div>
			</div>
			<div class="pagination pr-3 float-right">
                <div class="nav-previous alignleft"><?php previous_posts_link( 'Afficher plus d\'actualité...' ); ?></div>
                <div class="nav-next alignright"><?php next_posts_link( 'Afficher plus d\'actualité...' ); ?></div>
			</div>
			<?php
			get_template_part('pagination');

        else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer wp-fseg-blue" role="contentinfo">
		<div class="container py-2">
            <div class="site-info">
				<ul class="list-inline d-inline-block">
					<li class="list-inline-item"><a class="" href="http://univ-ndere.cm">ABOUT US</a></li>
					<li class="list-inline-item"><a class="pl-3" href="http://univ-ndere.cm">LICENSES</a></li>
				</ul>
				<span class="float-right">
					&copy; <?php echo ('2019' === date('Y'))?date('Y'):'2019 - '.date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
					<span class="text-muted">All rights reserved.</span>
					<span class="sep"> | </span>
					<span class="text-muted">By </span>
					<a class="credits" href="http://univ-ndere.cm" target="_blank" title="Université de Ngaoundéré" alt="Bootstrap WordPress Theme">univ-ndere.cm</a>
				</span>
            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
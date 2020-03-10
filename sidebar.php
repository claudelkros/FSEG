<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside id="secondary" class="widget-area col-sm-12 col-lg-3" role="complementary">
	<!-- #show sidebar if it exit -->
		
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="rector" <?php if(get_doyen_image('fseg_doyen_image_settings') !== false) { ?> style='background: url("<?php echo get_doyen_image('fseg_doyen_image_settings') ?>"); <?php } ?>
            background-size:cover;
            background-repeat: no-repeat;
            height: 20em;
            '>
        
    </div>
	

	<div class="sidebar_doc bg-white mt-5">
		<?php
			$args = array('post_type' => 'documentation-fseg', 'posts_per_page' => 8);
			$the_query = new WP_Query( $args );
			$obj = get_post_type_object( 'documentation-fseg' ); ?>
			<h3 class="color-site text-center sidebar-custom_title"><?php echo $obj->labels->singular_name; ?></h3>
			<?php
				if (  $the_query->have_posts() ) :
				/* Start the Loop */
				while (  $the_query->have_posts() ) :
					$the_query->the_post(); ?>
					<ul class="list-group">
						<li class="sidebar-link">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					</ul>
				<?php
				endwhile; ?>
			<?php endif;
		?>
	</div>

    <!--<div class="social-link bg-danger">
        <?php dynamic_sidebar( 'social-5' ); ?>
    </div>-->

	<div class="sidebar_link_externe bg-white mt-3">
		<?php $menu = wp_get_nav_menu_object("Sites Rattachés" ); ?>
		<h4 class="color-site text-center sidebar-custom_title"><?php echo $menu->name; ?></h4> 
		<?php
		wp_nav_menu( array(
			'theme_location' => 'sidebar-menu',
			'menu_id'        => 'Menu-sidebar',
		) );
		?>
	</div>

</aside><!-- #secondary -->

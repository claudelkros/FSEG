<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fseg-theme' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?> ws-fseg-header" role="banner">
        <div class="mx-0 mb-0 p-0" style="margin-top:-8.995px !important">
            <?php /*if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )):*/ ?>
                <div <?php if(has_header_image()) { ?>class="wp-fseg-banniere" style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
                   <div class="container">
                        <h2 class="titre-page text-dark">
                            <?php
                            if(get_theme_mod( 'header_banner_title_setting' )){
                                echo get_theme_mod( 'header_banner_title_setting' );
                           }else{
                                echo 'FSEG';
                            }
                            ?>
                        </h2>
                        <h2 class="soustitre-page text-dark">
                            <?php
                            if(get_theme_mod( 'header_banner_tagline_setting' )){
                                echo get_theme_mod( 'header_banner_tagline_setting' );
                            }else{
                                echo esc_html__('Faculté des Sciences Économiques et de Gestion','fseg-theme');
                            }
                            ?>
                        </h2>
                    </div>
                </div>
            <?php //endif; ?>
            <nav class="navbar navbar-expand-xl p-0 px-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav mx-auto',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
	</header><!-- #masthead -->
	<div id="content" class="site-content col-lg-11 m-auto">
		<div class="container-fluid px-3">
			<div class="row">
                <?php endif; ?>
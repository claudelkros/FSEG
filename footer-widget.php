<?php
$footer = 0;
if(is_active_sidebar( 'footer-1' )) $footer++;
if(is_active_sidebar( 'footer-2' )) $footer++;
if(is_active_sidebar( 'footer-3' )) $footer++;
if(is_active_sidebar( 'footer-4' )) $footer++;
$grid_footer = 12/$footer;

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) {?>
        <div id="footer-widget" class="row py-2 m-0 wp-fseg-blue">
            <div class="container">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-12 col-md-<?php echo $grid_footer; if($footer > 1) echo " border-right"; ?>"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-12 col-md-<?php echo $grid_footer; if($footer > 2) echo " border-right"; ?>"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-12 col-md-<?php echo $grid_footer; if($footer > 3) echo " border-right"; ?>"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-4' )) : ?>
                        <div class="col-12 col-md-<?php echo $grid_footer; ?>"><?php dynamic_sidebar( 'footer-4' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
<?php }
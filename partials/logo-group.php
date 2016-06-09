<?php
/**
 * The logo group for the header 
 * @package Pure_and_Simple
 * @since 1.0.0
 */
?>

<div id="masthead" class="header-box" style="background-color: <?php echo get_theme_mod( 'header_bgccolour', '#ffffff' ); ?>;">
	<div class="header-bg" style=" background-image: url(<?php if (get_header_image() != '') : ?><?php header_image(); ?>
	<?php endif; ?>);">
							
		<div class="header-inner"  style="padding: <?php echo get_theme_mod( 'header_padding', '2rem 0 2rem 0' ); ?>;">
			<?php if ( get_option( 'puresimple_logo' ) ) : ?>
            
            	<div class="logo fade-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><img src="<?php echo get_option( 'puresimple_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>"></a>						        
				</div>
					
			<?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) : ?>
					
				<div class="site-info fade-logo" style="background-color: <?php echo get_theme_mod( 'site_infobg', '#fff' ); ?>;">
					<div class="site-title" style="font-size: <?php echo get_theme_mod( 'site_titlesize', '2.75rem' ); ?>;">
						<a style="color: <?php echo get_theme_mod( 'site_titlecolour', '#000' ); ?>;" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?> <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></a>
					</div>								
					<?php if ( get_bloginfo( 'title' ) ) { ?>
						<div class="site-tagline" style="font-size: <?php echo get_theme_mod( 'site_taglinesize', '1.375rem' ); ?>; color: <?php echo get_theme_mod( 'tagline_colour', '#b9b9b9' ); ?>;"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></div>
					<?php } ?>							
				</div>
							
			<?php endif; ?>
									
		</div>								
	</div>
</div> 

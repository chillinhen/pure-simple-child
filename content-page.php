<?php
/**
 * The template used for displaying page content in page.php 
 * @package Pure &amp; Simple Child Theme
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (!(is_front_page())): ?>
	<header class="entry-header">
	<?php 
		the_title( '<h1 class="entry-title">', '</h1>' ); 
        		?>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'pure-simple' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif;?>
	
	<footer class="entry-footer">
		<?php if( get_theme_mod( 'hide_edit' ) == '') { ?>
			<?php edit_post_link( __( 'Edit This Post', 'pure-simple' ), '<span class="edit-link">', '</span>' ); ?>
        <?php } ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

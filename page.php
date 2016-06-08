<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * @package Pure_and_Simple
 * @since 1.0.0
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div id="page-banner"><?php the_post_thumbnail('banner'); ?></div> 
<div class="container">

    <div class="row">
        <div class="col-md-9">        
        
                       
                <?php get_template_part( 'content', 'page' ); ?>           
            <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() ) :
                        comments_template();
                    endif;
                ?>           
            
             
      </div>
      
      <div class="col-md-3">
        <?php get_sidebar( 'right' ); ?>
      </div>
      
    </div>      
</div>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>

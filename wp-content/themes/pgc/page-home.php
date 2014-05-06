<?php
/*
Template Name: Homepage Only
*/

get_header(); ?>

	<div id="primary" class="content-full">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
            <div class="entry-content">
                <?php the_content(); ?>
                <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', '_s' ),
                        'after'  => '</div>',
                    ) );
                ?>
            </div><!-- .entry-content -->
            <?php edit_post_link( __( 'Edit', '_s' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
        </article><!-- #post-## -->

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

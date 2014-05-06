<?php get_header(); ?>

					<?php the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1 class="entry-title"><div class="box-padding"><?php the_title(); ?></div></h1>
                        
                        <div class="two-column-1-left"> 
                            <div class="box"> 
                                <div class="box-padding"> 
                                    <div class="entry-content">
                                        <?php the_content(); ?>
                                        
                                        <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sgc' ) . '&after=</div>') ?>
                                        <?php edit_post_link( __( 'Edit', 'sgc' ), '<span class="edit-link">', '</span>' ) ?>
                                                            </div><!-- .entry-content -->
                                                        </div><!-- #post-<?php the_ID(); ?> -->           
                                         
                                        <?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>

                                     </div>
                                 </div>

                    </div><!-- left column-->
                
                    <div class="two-column-1-right"> 
                    	<?php get_sidebar(); ?>
                    </div><!-- right column-->
            
        </div><!-- #content -->

</div> <!-- #wrapper -->
<?php get_footer(); ?>

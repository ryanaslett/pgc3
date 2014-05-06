<?php get_header(); ?>
 
<h1 class="entry-title"><div class="box-padding">News</div></h1>

<div class="two-column-1-left"> 
    <div class="box"> 
        <div class="box-padding"> 
 <?php the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <h2 class="entry-title"><?php the_title(); ?></h2>
<?php /* Microformatted, translatable post meta */ ?>
                    <div class="entry-meta">
			<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span><br />
                        <span class="meta-prep meta-prep-author"><?php _e('By ', 'sgc'); ?></span>
                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'sgc' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
                        <span class="meta-sep"> | </span>
                        <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'sgc' ); ?></span><?php echo get_the_category_list(', '); ?></span>
                        <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'sgc' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
                        <?php edit_post_link( __( 'Edit', 'sgc' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
                    </div><!-- #entry-meta -->
					<?php the_content(); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sgc' ) . '&after=</div>') ?>

                </div><!-- #post-<?php the_ID(); ?> -->           
 
                <div id="nav-below" class="navigation">
                    <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
                    <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
                </div><!-- #nav-below -->
                          
                <div class="entry-utility">
                                    <?php /* printf( __( 'This entry was posted in %1$s%2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>. Follow any comments here with the <a href="%5$s" title="Comments RSS to %4$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'sgc' ),
                                        get_the_category_list(', '),
                                        get_the_tag_list( __( ' and tagged ', 'sgc' ), ', ', '' ),
                                        get_permalink(),
                                        the_title_attribute('echo=0'),
                                        comments_rss() ) */ ?>
                 
                <?php if ( ('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Comments and trackbacks open ?>
                                        
                <?php elseif ( !('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Only trackbacks open ?>
                                        <?php printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'sgc' ), get_trackback_url() ) ?>
                <?php elseif ( ('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Only comments open ?>
                                        <?php _e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'sgc' ) ?>
                <?php elseif ( !('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Comments and trackbacks closed ?>
                                        <?php _e( 'Both comments and trackbacks are currently closed.', 'sgc' ) ?>
                <?php endif; ?>
                <?php edit_post_link( __( 'Edit', 'sgc' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>
                                    </div><!-- .entry-utility -->
                          
 				<?php comments_template('', true); ?>
 
</div>
	</div>

</div> 
	
    <div class="two-column-1-right"> 
    	<?php get_sidebar(); ?>
    </div><!-- right column-->

</div>

<?php get_footer(); ?>
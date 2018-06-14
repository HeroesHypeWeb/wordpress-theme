<?php get_header(); ?>
 
        <div id="container">
            <div id="content">

                <?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1 class="entry-title"><?php the_title(); ?></h1>
					
					<div class="entry-content">
                        
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
					</div><!-- .entry-utility -->
					
					<div class="entry-utility">
					                    <!-- <?php printf( __( 'This entry was posted in %1$s%2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>. Follow any comments here with the <a href="%5$s" title="Comments RSS to %4$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'hbd-theme' ),
					                        get_the_category_list(', '),
					                        get_the_tag_list( __( ' and tagged ', 'hbd-theme' ), ', ', '' ),
					                        get_permalink(),
					                        the_title_attribute('echo=0'),
					                        comments_rss() ) ?> -->


                    <?php if ( get_post_meta($post->ID, 'toornament_id', true) && get_post_meta($post->ID, 'toornament_stage_id', true) ) : // Comments and trackbacks open ?>
                      
                      <iframe width="100%" height="900" src="https://widget.toornament.com/tournaments/<?php $key="toornament_id"; echo get_post_meta($post->ID, $key, true) ?>/stages/<?php $key="toornament_stage_id"; echo get_post_meta($post->ID, $key, true) ?>/?_locale=en_US" frameborder="0" allowfullscreen="true"></iframe>
                    <?php endif; ?>

                </div><!-- #post-<?php the_ID(); ?> -->
 
                <!-- <div id="nav-below" class="navigation">
						<?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?> <span style="color: #bbb;">&#8226;</span> <?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?>
                </div> -->
                <!-- #nav-below -->     

            </div><!-- #content -->
        </div><!-- #container -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>
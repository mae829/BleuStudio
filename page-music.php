<?php
/*
Template Name: Music Page
*/
?>

<?php get_header(); ?>
				<div id="main">
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
                    <?php query_posts("paged=$paged&cat=35"); ?>
                    <?php while(have_posts()) : the_post(); 
                        $track = get_post_meta($post->ID, 'track-name',true);
                        $album = get_post_meta($post->ID, 'album',true);
						$playlist = get_post_meta($post->ID, 'playlist',true);
						$cover = get_post_meta($post->ID, 'cover',true);
					?>

                    <div class="artistBox">
                        <a href="<?php the_permalink();?>"><img src="<?php echo $cover; ?>" class="artist" alt="Artist" /></a>
                        <div class="artist-meta">
                            <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
                            <p><span class="blue">Album</span>:<br /><?php echo $album; ?></p>
                            <p><span class="blue">Track</span>:<br /><?php echo $track; ?></p>
                        </div>
						<div class="artist-desc">
                            <a href="<?php bloginfo('template_url'); ?>/inc/singlePlayer.swf?width=300&amp;height=100&amp;flashvars=xmlPath=<?php echo $playlist; ?>" rel="wp-prettyPhoto" title="<?php echo $track; ?>">Play track<img src="<?php bloginfo('template_url'); ?>/images/speaker.png" alt="<?php echo the_title();?>" /></a>
							<?php the_excerpt(); ?>
                            <a href="<?php the_permalink();?>" class="continue">Read more...</a>
                        </div>
                    </div><!--END ARTIST BOX-->
                    <?php endwhile; ?>
                    <div class="navigation">
                        <div class="alignright"><?php next_posts_link('Older Artists &raquo;') ?></div>
                        <div class="alignleft"><?php previous_posts_link('&laquo; Newer Artists') ?></div>
                    </div><!--END NAVIGATION-->
                </div><!--END MAIN-->
				<?php get_sidebar(); ?>
            <?php get_footer(); ?>
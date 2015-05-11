<?php get_header(); ?>

		<div id="main">
			<?php if (have_posts()) : ?>
                <h3>Search Results</h3>
            
                <?php while (have_posts()) : the_post(); ?>
            
                    <?php
                    // Portfolio
                    if(in_category('portfolio')) {
                    
                        $preview = get_post_meta($post->ID, 'preview',true);
                        $date = get_post_meta($post->ID, 'date',true);
                        $client = get_post_meta($post->ID, 'client',true);
                        $link = get_post_meta($post->ID, 'link',true); ?>
                    
                        <div class="work">
                            <?php if($preview) { ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo($preview); ?>" alt"<?php the_title(); ?>" /></a>
                            <?php } ?>
							<div class="work-desc search">                    
                            <p>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
                                <?php if($date) { echo"($date)"; } ?>
                            </p>
                    		</div><!--END WORK-DESC-->
                        </div><!--END WORK-->
                    
                    <?php
					}
					//Artist post
					elseif(in_category('artist')){
                        $track = get_post_meta($post->ID, 'track-name',true);
                        $album = get_post_meta($post->ID, 'album',true);
						$playlist = get_post_meta($post->ID, 'playlist',true);
						$cover = get_post_meta($post->ID, 'cover',true);
						?>

						<div class="artistBox-search">
                        	<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
							<a href="<?php the_permalink();?>"><img src="<?php echo $cover; ?>" class="artist" alt="Artist" /></a>
							<div class="artist-meta">
								<p><span class="blue">Album</span>:<br /><?php echo $album; ?></p>
								<p><span class="blue">Track</span>:<br /><?php echo $track; ?></p>
							</div>
							<div class="artist-desc">
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink();?>" class="continue">Read more...</a>
							</div>
						</div><!--END ARTIST BOX-->
                
                        
                    <?php
                    // Blog Post
                    }
					else { ?>
            
                        <div class="post-item">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <ul class="meta">
                                <li><?php the_category(', ') ?></li>
                                <li><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></li>
                                <li><?php the_time('F j, Y'); ?></li>
                            </ul>
                        </div><!--END POST-ITEM-->
                        <?php 
                    }
              
                endwhile;
                ?>
            
            <?php
            # No posts found
            else : ?>
            
                <h2>No posts found. Try a different search?</h2>
                <?php include (TEMPLATEPATH . '/searchform.php');
            
            endif; ?>
            
            
                <div class="navigation">
                    <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                    <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                </div>
            </div><!--END MAIN-->

	<?php get_sidebar(); ?>
<?php get_footer(); ?>
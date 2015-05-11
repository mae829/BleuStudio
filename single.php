<?php get_header(); ?>

<?php

$category = get_the_category(); 
$parent = $category[0]->category_parent;

?>
	<?php if (in_category(portfolio) || $parent == portfolio): ?>
				<div id="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="work">
                    	<div id="displayDiv">
                            <img id="mainImage" src="<?php $img = get_post_custom_values('preview'); echo $img[0]?>" alt="<?php the_title(); ?> " />
                        </div><!--END DISPLAYDIV-->
                        <div id="thumbnailDiv">
							<?php bleu_gallery();?>
                        </div><!--END THUMBS-HOLDER-->
                        <div class="work-desc">
                            <h2><?php the_title(); ?></h2>
                            <div class="meta-info">
                                <p><span class="blue">Client</span>: <?php $client = get_post_custom_values('client'); echo $client[0]?></p>
                                <p><span class="blue">Type</span>: <?php $type = get_post_custom_values('type'); echo $type[0]?></p>
                                <!--<p><span class="blue">Date</span>: <?php $date = get_post_custom_values('date'); echo $date[0]?></p>-->
                                <p><a href="<?php $link = get_post_custom_values('link'); echo $link[0]?>" target="_blank">Visit Project Site</a></p>
                            </div>
                            <br />
                            <div class="proj-desc">
								<?php the_content(); ?>
                            </div>
                        </div><!--END WORK-DESC-->
                    </div><!--WORK-->
					<?php endwhile; ?>
					<?php else : ?>
						<p>What are you looking for?</p>
					<?php endif;?>
                </div><!--END MAIN-->
				<?php get_sidebar('portfolio'); ?>


	<?php elseif(in_category(artists) || $parent == artists): ?>
    			<div id="main">
					<?php if (have_posts()) : while (have_posts()) : the_post();
						$track = get_post_meta($post->ID, 'track-name',true);
						$album = get_post_meta($post->ID, 'album',true);
						$playlist = get_post_meta($post->ID, 'playlist',true);
						$cover = get_post_meta($post->ID, 'cover',true);
					?>
                    <div class="post-item">
                        <h2><?php the_title(); ?></h2>
                        <img src="<?php echo $cover; ?>" class="artist" alt="<?php the_title(); ?>" />
                        <div class="artist-meta">
                            <p><span class="blue">Album</span>:<br /><?php echo $album; ?></p>
                            <p><span class="blue">Track</span>:<br /><?php echo $track; ?></p>
                        </div>
						<div class="artist-desc">
                            <a href="<?php bloginfo('template_url'); ?>/inc/singlePlayer.swf?width=300&amp;height=100&amp;flashvars=xmlPath=<?php echo $playlist; ?>" rel="wp-prettyPhoto" title="<?php echo $track; ?>">Play track<img src="<?php bloginfo('template_url'); ?>/images/speaker.png" alt="<?php echo the_title();?>" /></a>
							<?php the_content(); ?>
                        </div>
                    </div><!--END POST-ITEM-->
					<?php endwhile; ?>
					<?php else : ?>
						<p>What are you looking for?</p>
					<?php endif;?>
                    <div id="comments_template">
                    	<?php comments_template(); ?>
                    </div><!--END COMMENTS_TEMPLATE-->
                </div><!--END MAIN-->
				<?php get_sidebar(); ?>
                
	<?php else: ?>
				<div id="main">
                	<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
                        <div class="post-item">
                            <h2><?php the_title(); ?></h2>
                            <ul class="meta">
                                <li><?php the_category(', ') ?></li>
                                <li><?php the_time('F j, Y'); ?></li>
                            </ul>
                            <?php the_content(); ?>
                        </div><!--END POST-ITEM-->
                    <?php endwhile; ?>
                    <?php else : ?>
                    <p>We can't find what you are looking for?</p>
                    <?php endif; ?>
                    <div id="comments_template">
                    	<?php comments_template(); ?>
                    </div><!--END COMMENTS_TEMPLATE-->
                </div><!--END MAIN-->
				<?php get_sidebar(); ?>
	<?php endif; ?>

<?php get_footer(); ?>
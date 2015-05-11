<?php
/*
Template Name: Portfolio Page
*/
?>

<?php get_header(); ?>

				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
                <?php query_posts("paged=$paged&cat=3"); ?>
                <?php while(have_posts()) : the_post(); ?>
                    <div class="work">
                        <a href="<?php the_permalink(); ?>"><img src="<?php $img = get_post_custom_values('preview'); echo $img[0]?>" alt="<?php the_title(); ?>" /></a>
                        <div class="work-desc">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><span class="blue">Client</span>: <?php $client = get_post_custom_values('client'); echo $client[0]?></p>
                            <p><span class="blue">Type</span>: <?php $type = get_post_custom_values('type'); echo $type[0]?></p>
                            <p><span class="blue">Date</span>: <?php $date = get_post_custom_values('date'); echo $date[0]?></p>
                            <br />
                            <?php the_excerpt(); ?>
                            <br />
                            <a href="<?php the_permalink(); ?>">Read more...</a>
                        </div><!--END WORK-DESC-->
                    </div><!--END WORK-->
				<?php endwhile; ?>
                <div class="navigation">
                    <div class="alignright"><?php next_posts_link('Older Projects &raquo;') ?></div>
                    <div class="alignleft"><?php previous_posts_link('&laquo; Newer Projects') ?></div>
                </div><!--END NAVIGATION-->

<?php get_footer(); ?>
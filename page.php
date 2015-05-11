<?php get_header(); ?>
	
				<div id="main">
                	<div id="page-content">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>

					<?php endwhile; ?>
					<?php else : ?>
						<p>What are you looking for?</p>
					<?php endif;?>
                    </div><!--END PAGE-CONTENT-->
				</div><!--END MAIN-->
                <?php get_sidebar(); ?>
<?php get_footer(); ?>
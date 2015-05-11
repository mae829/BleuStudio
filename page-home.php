<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
				<div id="main">
                	<h3>Latest Project...</h3>
                    <?php query_posts('cat=3&showposts=1'); ?>
                    <?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
                            <div class="boxgrid slidedown">
                                <img class="cover" src="<?php $img = get_post_custom_values('preview'); echo $img[0]?>" alt="<?php the_title() ?>" />
                                <h2><?php the_title() ?></h2>
                                <p><span class="blue">Client</span>: <?php $client = get_post_custom_values('client'); echo $client[0]?></p>
                                <p><span class="blue">Type</span>: <?php $type = get_post_custom_values('type'); echo $type[0]?></p>
                                <!--<p><span class="blue">Date</span>: <?php $date = get_post_custom_values('date'); echo $date[0]?></p>-->
                                <br />
                                <?php the_excerpt(); ?>
                                <br />
                                <p><a href="<?php the_permalink(); ?>">Read more...</a></p>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                    	<p>No recent portfolio post</p>
                    <?php endif; ?>
                    <h5>Services</h5>
                    <div id="services-col1">
                        <p>Unique website designs</p>
                        <ul>
                            <li>HTML, CSS, Flash, jQuery</li>
                            <li>Valid W3C coding</li>
                            <li>Cross browser testing</li>
                            <li>Cross platform testing</li>
                        </ul>
                        <p>WordPress custom design</p>
                        <ul>
                            <li>Blog themes</li>
                            <li>Portfolio designs</li>
                        </ul>
                    </div><!--END SERVICES-COL1-->
                    <div id="services-col2">
                        <p>iPhone web design</p>
                        <ul>
                            <li>Unique designs</li>
                            <li>iPhone site optimization</li>
                            <li>Webkit coding</li>
                            <li>Javascript/jQuery coding</li>
                        </ul>
                        <p>MySpace custom pages</p>
                        <ul>
                            <li>Personal</li>
                            <li>Band pages</li>
                            <!--<li>MySpace 1.0 &amp; 2.0 coding</li>-->
                        </ul>
                    </div><!--END SERVICES-COL2-->
                </div><!--END MAIN-->
				<?php get_sidebar('home'); ?>
			<?php get_footer(); ?>
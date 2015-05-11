<?php get_header(); ?>
    <div id="main">
    
    <h2>404: Page Not Found</h2>
    
    <p>It seems you are looking for something that isn't here. Maybe a link is mis-directed.<br /><br /></p>
    <p>Try searching instead:<br /><br /></p>
    
    <?php include(TEMPLATEPATH . '/searchform.php');?>
    </div><!--END MAIN-->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
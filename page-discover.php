<?php
/*
Template Name: Discover IV page
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
               <?php
                  if (is_front_page()) {
                     bloginfo('name'); echo ' - '; bloginfo('description'); }
                  else {
                      bloginfo('name'); }
                  if (function_exists('is_tag') && is_tag()) {
                     single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
                  elseif (is_archive()) {
                     wp_title(''); echo ' Archive - '; }
                  elseif (is_search()) {
                     echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
                  elseif (!(is_404()) && (is_single()) || (is_page()) && !(is_front_page())) {
                     wp_title(''); echo ' - '; }
                  elseif (is_404()) {
                     echo 'Not Found - '; }
                  if ($paged>1) {
                     echo ' - page '. $paged; }
               ?>
        </title>
	<style>
		@font-face {
			font-family: 'BebasNeueRegular';
			src: url('<?php bloginfo('stylesheet_directory'); ?>/div/BebasNeue-webfont.eot');
			src: url('<?php bloginfo('stylesheet_directory'); ?>/div/BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
				 url('<?php bloginfo('stylesheet_directory'); ?>/div/BebasNeue-webfont.woff') format('woff'),
				 url('<?php bloginfo('stylesheet_directory'); ?>/div/BebasNeue-webfont.ttf') format('truetype'),
				 url('<?php bloginfo('stylesheet_directory'); ?>/div/BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
			font-weight: normal;
			font-style: normal;
		}
		*{
			margin:0;
			padding:0;
		}
		body{
			font: 12px/18px 'Lucida Grande', 'Lucida Sans Unicode', Helvetica, Arial, Verdana, sans-serif;
			color:#585858;
		}
		a{text-decoration:none;color:#a10003}
		a:hover{text-decoration:underline}
		h5{
			font-size:16px;
			margin-bottom:10px;
		}
	</style>
<?php wp_head(); ?> 
</head>

<body>
				<div id="main">
                	<div id="page-content" style="width:630px; margin:0 auto;">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; ?>
					<?php else : ?>
						<p>What are you looking for?</p>
					<?php endif;?>
                    </div><!--END PAGE-CONTENT-->
				</div><!--END MAIN-->
<?php wp_footer(); ?>
<style>
	ul.ytchagallery.ytc-td-top div.ytcthumb-cont{float:none!important;}
	ul.ytchagallery.ytccf{
		margin-top:90px!important;
	}
</style>
</body>
</html>
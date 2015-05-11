<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="Miguel Estrada, Miguel Alejando Estrada, bleu cellar, mae design, blog, portfolio, web design, web development, web programming" />
        <meta name="author" content="Miguel Alejandro Estrada, Bleu Mikey, MikeE, MAE Design, http://bleucellar.com" />
		<meta name="email" content="mikee@bleucellar.com" />
        <meta name="description" content="Miguel 'Mikey' Estrada's Portfolio site / Bleu Cellar Web Development's Home Page" />
        <meta name="copyright" content="2009-<?php echo date('Y'); ?> Bleu Cellar web design. All rights reserved." />
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="robots" content="index, follow" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

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

        <!--CSS CODE-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slidingbox.css" type="text/css" />

        <!--FAV ICONS-->
        <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon" />
        
        <!--[if IE]>
        	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" />
        <![endif]-->
        
        <!--[if lt IE 7]>
            <script src="<?php bloginfo('template_url'); ?>/js/unitpngfix.js" type="text/javascript"></script>
        <![endif]-->
        
        <!--PLUG-INs CODE-->
		<?php wp_head(); ?>        

	</head>
    
	<body <?php body_class(); ?>>
            <div id="header">
                <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <ul>
                    <?php wp_list_pages('exclude=147&title_li='); ?>
                </ul>
                <p>create, <span class="blue">design</span>, and <span class="blue">play</span>...all in a day's <span class="blue">work</span></p>
            </div><!--END HEADER-->
            <div id="content">
                <div id="content-wrapper">
            </div><!--END CONTENT-WRAPPER-->
        </div><!--END CONTENT-->
		<div id="footer">
			<div id="footer-wrapper">
				<div class="col1">
                    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                    <ul>
						<?php wp_list_pages('exclude=147&title_li='); ?>
                    </ul>
                </div><!--END COL1-->
                <div class="col2">
					<h6>Friends</h6>
						<ul>
							<?php wp_list_bookmarks('categorize=0&title_li='); ?>
 						</ul>
				</div><!--END COL2-->
                <div class="col3">
                    <p>&copy;Copyright 2009-<?php echo date('Y');?><br /><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>. <br />All Rights Reserved.</p><br />
                    <p>Designed &amp; Coded by<br /><a href="mailto:mikee@bleucellar.com">Miguel Estrada</a>.</p><br />
                    <p>Hosted by: <a href="http://www.dreamhost.com/r.cgi?521863"><img src="<?php bloginfo('template_url'); ?>/images/dreamhost-logo.png" alt="Dreamhost" /> Dreamhost</a>.</p>
                    <!--<p><small>Social media icons by:  <a href="http://komodomedia.com" target="_blank">komodomedia.com</a></small></p>-->
                </div><!--END COL3-->
          </div><!--END FOOTER-WRAPPER-->
        </div><!--END FOOTER-->
        
        <!--JAVASCRIPT CODE-->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.3.2.min.js"></script> 
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/Groject.ImageSwitch.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.form.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/js-functions.js"></script>
		<?php wp_footer(); ?>
    </body>
</html>

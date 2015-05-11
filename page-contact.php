<?php
/*
Template Name: Contact Page
*/

?>

<?php get_header(); ?>
				<div id="main">
					<div class="contactColumn">
                        <h2><?php the_title();?></h2>
                        <p>Need a website design?</p>
                        <p>Need programming done?</p>
                        <p>Need hosting?</p><br />
                        <p>Email me at:  <a href="mailto:mikee@bleucellar.com">mikee[AT]bleucellar.com</a></p><br />
                        <div class="contact_form_hint" id="hint">OR use the form to the right to reach me and I'll contact you as soon as possible</div>
                        <h2>HIRE ME! :)</h2>
                        <p>Check out my <a href="http://bleucellar.com/portfolio/">portfolio</a>.</p>
                        <p>Download my <a href="<?php bloginfo('template_url'); ?>/inc/miguelEstrada-Resume.doc">resume</a>.</p>
                        <!--<div id="social-sites">
                            <h2>Social Sites</h2>
                            <p>You can also reach me and look at some of my work on my own personal social sites:</p>
                            <p><a href="http://facebook.com/bleumikee" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="Facebook" /></a></p>
                            <p><a href="http://twitter.com/BleuMikey" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="Twitter" /></a></p>
                            <p><a href="http://myspace.com/elmikey" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/myspace.png" alt="MySpace" /></a></p>
                        </div>END SOCIAL-SITES-->
                    </div><!--END CONTACTCOLUMN-->
                    <div id="contact-wrapper">
                        <p id="success" class="successmsg">Your email has been sent! Thank you!</p>
                        <p id="bademail" class="errormsg">Please enter a valid email.</p>
                        <p id="badserver" class="errormsg">Your email failed. Try again later.</p>
                        <form id="contact" action="<?php bloginfo('template_url'); ?>/inc/sendmail.php" method="post">
                            <label>Your name: <span class="required">*</span></label>
                                <input type="text" id="nameinput" name="name" value=""/>
                            <label>Your email: <span class="required">*</span></label>
                                <input type="text" id="emailinput" name="email" value=""/>
                            <label>Subject: </label>
                                <input type="text" id="subjectinput" name="subject" value=""/>
                            <label>Your message: <span class="required">*</span></label>
                                <textarea cols="20" rows="7" id="commentinput" name="comment"></textarea><br />
                            <input type="submit" id="submitinput" class="submit" value="Send Email!!"/>
                        </form>
                    </div><!--END CONTACT-WRAPPER-->
				</div><!--END MAIN-->
				<?php get_sidebar(); ?>
			<?php get_footer(); ?>
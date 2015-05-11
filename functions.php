<?php 
/* ------------------------------- */
/* register sidebars */
	if ( function_exists('register_sidebar') )
		//register regular (blog) sidebar
		register_sidebar();
		//register second sidebar (portfolio)
		register_sidebar(
			array('name'=>'Sidebar 2',)
		);

/* ------------------------------- */
/* contact form function */
	function contact_me(){
		
		//set variables
		$error			= '';
        $fullname		= ''; 
        $email    		= ''; 
        $subject  		= ''; 
        $comments 		= ''; 
        $verify   		= '';
		$contact_path 	= TEMPLATEPATH."/inc/contactForm.php";
		
		include_once($contact_path);
		
		wp_mail($email, $subject, $comments);
		
	}

/* ------------------------------- */
/* single preview image function */
function singlePreview(){
}

/* thumbnail loop function */	
	
	function bleu_gallery() {
		$args = array(
			'post_parent'    => get_the_ID(),
			'post_type'      => 'attachment',
			'numberposts'    => -1, // show all
			'post_status'    => null,
			'post_mime_type' => 'image',
			'offset'		 => 1,
			'orderby'		 => 'menu_order',
			'order'			 => 'ASC'
		);
		$images = get_children($args);
		$counter = 0;
		$theme_url = get_bloginfo('template_url');

		if($images) {
			
			foreach($images as $image) {
				$imgThumb    = wp_get_attachment_image_src($image->ID,'thumbnail'); //thumbnail full img tag
				$imgMed      = wp_get_attachment_image_src($image->ID,'medium'); //medium full img tag
				$imageLarge  = wp_get_attachment_image_src($image->ID,'large'); //large image url
				$imgTitle    = apply_filters('the_title',$image->post_title);
				
				echo"<img class=\"thumbImage\" src=\"$imgThumb[0]\" alt=\"$imgTitle\" />\n";
			}
		} else {
			echo "<p>No images are in this gallery</p>";
		}
	}

?>
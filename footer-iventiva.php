<?php

/**
* Plugin Name: Footer-Iventiva	
* Plugin URI: http://iventiva.com/
* Description: A test plugin for iventiva.
* Version: 1.0
* Author: Armando Aliaga
* Author URI: http://iventiva.com/
**/
	


function your_function() {
    echo '<p>Nando</p>';
}
add_action('wp_footer', 'your_function');





/*function child_theme_footer_script() { ?>
   
 	<script type="text/javascript">
 	
	function replaceContentInContainer(matchClass, content) {
	    var elems = document.getElementsByTagName('*'), i;
	    for (i in elems) {
	        if((' ' + elems[i].className + ' ').indexOf(' ' + matchClass + ' ')
	                > -1) {
	            elems[i].innerHTML = content;
	        }
	    }
	}
 	replaceContentInContainer("site-info", "<h1>Iventiva</h1>");
 	</script>

<?php }
add_action( 'wp_footer', 'child_theme_footer_script' , 100);
*/


/*add_action('admin_menu', 'footer_iventiva_setup_menu');
 
function footer_iventiva_setup_menu(){
        add_menu_page( 'Footer Iventiva', 'Footer Iventiva', 'manage_options', 'footer-iventiva', 'test_init' );
}
 
function test_init(){
    deliver_mail();
    html_form_code();
}
 



function html_form_code() {
    echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
    echo '<p>';
    echo 'Your Message (required) <br/>';
    echo '<textarea rows="10" cols="35" name="cf-message">' . ( isset( $_POST["cf-message"] ) ? esc_attr( $_POST["cf-message"] ) : '' ) . '</textarea>';
    echo '</p>';
    echo '<p><input type="submit" name="cf-submitted" value="Send"></p>';
    echo '</form>';
}

function deliver_mail() {

    // if the submit button is clicked, send the email
    if ( isset( $_POST['cf-submitted'] ) ) {

         $name   = esc_textarea( $_POST["cf-message"] );
        
    }
}
*/





?>
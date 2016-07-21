<?php
function wpo_oyga_contacts() {
	if( isset($_POST) ){
		$contact = array();
		parse_str($_POST['postdata'], $contact);
		
		if ( $contact['name']== '' && $contact['email'] == ''  ) {
			
			echo false;

		}else {

		
		//Get the user for the post
		$user = get_user_by( 'email', 'fabio@oyga.me' );

		//Get the info from the post and sanitize it.
		$name = strip_tags(($contact['name']));
		$email = strip_tags($contact['email']);
		$company = strip_tags($contact['company']);
		$content = strip_tags($contact['content']);

		//Prepare the data
		$data = array(
	        'post_author' => $user->id,
	        'post_status'   => 'publish',
	        'post_content' => $content,
	        'post_title' => 'Contacto de: ' . $name,
	        'post_type' => 'contacts',
	    );

		//Get the custom fields



	    //Create the post
	    $post_id = wp_insert_post( $data );

	    //Update the custom fields
	    update_field( 'field_578fa2c6e1c2a', $name, $post_id );
	    update_field( 'field_578fa2d5e1c2b', $email, $post_id );
	    update_field( 'field_578fa2f2e1c2c', $company, $post_id );

		echo true;
		}
	}	
	die();
}
add_action( 'wp_ajax_wpo_oyga_contacts', 'wpo_oyga_contacts' );
add_action( 'wp_ajax_nopriv_wpo_oyga_contacts', 'wpo_oyga_contacts' );

function wpo_oyga_enable_frontend_ajax() {
?>

	<script>

		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';

	</script>

<?php
}
add_action( 'wp_head', 'wpo_oyga_enable_frontend_ajax' );


function wpo_theme_styles() {

	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'owl_css', get_template_directory_uri() . '/css/owl.css' );
	wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'awesome_fonts', get_template_directory_uri() . '/fonts/font-awesome-4.1.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'elegantsicons_fonts', get_template_directory_uri() . '/fonts/eleganticons/et-icons.css' );
	wp_enqueue_style( 'googlefont_fonts', 'https://fonts.googleapis.com/css?family=Assistant:200,400,700');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/oyga.css' );

}
add_action( 'wp_enqueue_scripts', 'wpo_theme_styles' );

function wpo_theme_scripts() {

	wp_enqueue_script('owl_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script('wow_js', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script('typewriter_js', get_template_directory_uri() . '/js/typewriter.js', array( 'jquery' ), '', true );
	wp_enqueue_script('jquery_onepage_js', get_template_directory_uri() . '/js/jquery.onepagenav.js', array( 'jquery' ), '', true );
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'owl_js', 'bootstrap_js', 'wow_js', 'typewriter_js', 'jquery_onepage_js'), '', true );

}
add_action( 'wp_enqueue_scripts', 'wpo_theme_scripts' );

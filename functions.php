<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

if ( function_exists('register_sidebar') ){
	 register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
	));
}


		
/** @ignore 
function custom_url_head() {
	//update url
	//wp_twitter_id
	//wp_twitter_id" href="http://twitter.com/aflama
	//wp_facebook_id" href="http://www.facebook.com/profile.php?id=53103448
	
	$head = "<script type='text/javascript'><!-- // \n";
	$output = '';
	if ( false !== ( $url = twitter_header_url() ) ) {
		$output .= "document.getElementById('wp_twitter_id').href = 'http://twitter.com/$url';\n";
	}
	if ( false !== ( $url = facebook_header_url() ) ) {
		$output .= "document.getElementById('wp_facebook_id').href = 'http://www.facebook.com/profile.php?id=$url';\n";
	}
	$foot = "// --></script>\n";
	if ( '' != $output )
		echo $head . $output . $foot;
}*/

/**LLY
// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Equipement urbain',      'lmsecurite_2' ),
		'secondary' => __( 'Identification brady',      'lmsecurite_2' ),
		'tertiary' => __( 'Protection securite',      'lmsecurite_2' ),
		'quartiary' => __( 'Signalisation',      'lmsecurite_2' ),
		'social'  => __( 'Social Links Menu', 'lmsecurite_2' ),
	) );
	
	load_theme_textdomain( 'lmsecurite_2', get_template_directory() . '/lang' );
add_action( 'wp_enqueue_scripts', 'mysite_enqueue' );

function mysite_enqueue() {
  $ss_url = get_stylesheet_directory_uri();
  $url = get_site_url();
  //wp_enqueue_script( 'mysite-scripts', "{$url}/custom/js/custom.js" );
}

add_filter('posts_orderby','my_sort_custom',10,2);
function my_sort_custom( $orderby, $query ){
    global $wpdb;

    if(!is_admin() && is_search()) 
        $orderby =  $wpdb->prefix."posts.post_type ASC, {$wpdb->prefix}posts.post_date DESC";

    return  $orderby;
}
//*****************/

/** useless
add_action('wp_footer', 'custom_url_head');

function twitter_header_url_string() {
	$url = twitter_header_url();
	if ( false === $url )
		return '';
	return $url;
}

function facebook_header_url_string() {
	$url = facebook_header_url();
	if ( false === $url )
		return '';
	return $url;
}

function twitter_header_url() {
	return apply_filters('twitter_header_url', get_option('twitter_header_url'));
}

function facebook_header_url() {
	return apply_filters('facebook_header_url', get_option('facebook_header_url'));
}

add_action('admin_menu', 'goldpot_add_theme_page');

function goldpot_add_theme_page() {
	if ( isset( $_GET['page'] ) && $_GET['page'] == basename(__FILE__) ) {
		if ( isset( $_REQUEST['action'] ) && 'save' == $_REQUEST['action'] ) {
		
				
				if ( isset($_REQUEST['twitterurl']) ) {
					if ( '' == $_REQUEST['twitterurl'] )
						delete_option('twitterurl');
					else {			
						update_option('twitter_header_url', $_REQUEST['twitterurl']);
					}				
				}

				if ( isset($_REQUEST['facebookurl']) ) {
					if ( '' == $_REQUEST['facebookurl'] )
						delete_option('facebookurl');
					else {			
						update_option('facebook_header_url', $_REQUEST['facebookurl']);
					}	
				}
				
			#print_r($_REQUEST);
			wp_redirect("themes.php?page=functions.php&saved=true");
			die;
		}
		add_action('admin_head', 'goldpot_theme_page_head');
	}
	add_theme_page(__('Customize Top Nav Link'), __('Top Nav Links'), 'edit_themes', basename(__FILE__), 'goldpot_theme_page');
}**/

/**
* WPSHOP HELPERS
*/
	function get_categories_custom_func($atts){
		$taxo = $atts[ 'taxonomy' ];
		$content = "";
			if($taxo)
			{
				$terms = get_terms($taxo) ;
				$template_part = 'categories_list';
				foreach($terms as $catid=>$catObj)
				{
					$tpl_component = array();
					$image_post = "";
					$category_thumbnail_preview = "";
					/*$category_meta_information = get_option(WPSHOP_NEWTYPE_IDENTIFIER_CATEGORIES . '_' . $catObj->term_id) ;
					if(!empty($category_meta_information['wpshop_category_picture']))
					{
						$image_post = wp_get_attachment_image( $category_meta_information['wpshop_category_picture'], 'thumbnail', false, array('class' => 'category_thumbnail_preview') );
						$category_thumbnail_preview = ( !empty($image_post) ) ? $image_post : '<img src="' .WPSHOP_DEFAULT_CATEGORY_PICTURE. '" alt="No picture" class="category_thumbnail_preview" />';
						//echo var_dump($image);
					}
					//echo $catObj->name . " (" . $catObj->term_id. ") ".$image_post.$category_thumbnail_preview;
					$tpl_component['CAT_NAME'] =$catObj->name;
					$tpl_component['CAT_ID'] =$catObj->term_id;
					$tpl_component['CAT_IMG'] =$catObj->image_post;
					$tpl_component['CAT_THUMB'] =$catObj->category_thumbnail_preview;
					$content = wpshop_display::display_template_element($template_part, $tpl_component);
					unset($tpl_component);*/
					$content .= wpshop_categories::category_mini_output($catObj);
				}
				$content .= var_dump(wpshop_categories::category_tree());
			}
			else
				$content = "hello";


			return $content;
			
	}

	function get_categories_helper_func($atts){
		$base_cat_id = null;
		$base_cat_slug = null;

		if(!empty($atts['base_cat_id']))
			$base_cat_id =$atts['base_cat_id'];

		else if(!empty($atts['base_cat_slug']))
			{
				$base_cat_slug =$atts['base_cat_slug'];
				$the_cat = get_term_by( 'slug', $base_cat_slug,WPSHOP_NEWTYPE_IDENTIFIER_CATEGORIES );
				$base_cat_id = $the_cat->term_id;
			}

		$categories = wpshop_categories::category_tree($base_cat_id);
		$content = "";
		foreach($categories as $cid=>$data)
		{
			$content .= wpshop_categories::wpshop_category_func(['cid'=>$cid,'display'=>'only_cat']);
			if($children = wpshop_categories::category_tree($cid)){
				$content .= wpshop_categories::wpshop_category_func(['cid'=>key($children),'display'=>'only_cat']);
			}
			
		}

		return $content;		
	}

	function get_login_container(){
			$tpl_component = array();
			$tpl_component['ACCOUNT_EMAIL'] = "Not connected";
			$tpl_component['ACCOUNT_LOGIN'] = "Not connected";
			$logoutRedirect = get_permalink();//or home_url()
			$tpl_component['LOGOUT_URL'] = wp_logout_url($logoutRedirect);
			$tpl_component['LOGIN_URL'] = get_permalink( get_page_by_path( 'mon-compte'));
			$template = "lm_not_logged_container";

			if(is_user_logged_in ())
			{
			  $current_user = wp_get_current_user(); 			  
			  $tpl_component['ACCOUNT_LOGIN'] =  $current_user->user_login; 
			  $tpl_component['ACCOUNT_EMAIL'] = $current_user->user_email;
			  $template = "lm_logged_container";

			}

			$output = wpshop_display::display_template_element($template, $tpl_component);

			return $output;
	}
	function get_wpshop_category_link($atts){
		return ( !empty($atts) && !empty($atts['term_id']) ) ?  get_term_link((int)$atts['term_id'] , WPSHOP_NEWTYPE_IDENTIFIER_CATEGORIES) : '';

	}

	function wpc_comments_closed( $open, $post_id ) {
		$post = get_post( $post_id );
		$open = false;
		return $open;
	}

	add_filter('comments_open', 'wpc_comments_closed', 10, 2);

	add_shortcode('wpshop_get_categories', 'get_categories_helper_func');
	add_shortcode('get_login_container', 'get_login_container');
	add_shortcode('get_category_link', 'get_wpshop_category_link');
/************/


?>


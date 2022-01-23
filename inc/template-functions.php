<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Nc_Health
 */
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function nc_health_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'nc_health_body_classes' );
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function nc_health_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'nc_health_pingback_header' );
/*********************
 ***ACf Options Page***
 **********************/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Nc Health Options',
        'menu_title' => 'Nc Health Options',
        'menu_slug' => 'empl-theme-options',
        'capability' => 'manage_options',
		'icon_url' => 'dashicons-sos',
		'position' => 2,
        'redirect' => true
    ));
}
/*****************************
***Get theme options value***
/***************************/
function amthemeoption( $id ) {
	if ( function_exists( 'get_field' ) ):
		$val = get_field( $id, 'option' );
	endif;
	return $val;
}
/******************************************
*** Admin backend customization for logo ***
*******************************************/
add_action( 'login_enqueue_scripts', 'nc_health_login_logo' );
function nc_health_login_logo() {
	$desktop_logo     = amthemeoption( 'admin_dashboard_logo' );
	$desktop_logo_url = ( ! empty( $desktop_logo ) ) ? $desktop_logo : '';
	?>
	<style type="text/css">
		body.login {
			background-color: #F9F9F9;
		}
		body.login div#login h1 a {
			background-image: url("<?php echo $desktop_logo_url; ?>");
			background-position: center;
			background-size: 300px auto;
			height: 101px;
			padding-bottom: 0;
			width: 100% !important;
		}
		body.login div#login form#loginform {
			border-radius: 3%;
			box-shadow: 0 2px 4px 6px rgba(0, 0, 0, 0.15);
            background-color : #eeeeee;
		}
		body.login div#login p#nav a,
		body.login div#login p#backtoblog a,
		body.login a.privacy-policy-link {
			color: #002D5E;
		}
		body.login div#login p#nav a:hover,
		body.login div#login p#backtoblog a:hover {
			color: #00426A;
		}
        body.login div#login form#loginform .button-primary {
            background-color: #002D5E;
            padding: 2px 12px;
            border-radius : 5px;
        }
        body .forgetmenot label{color: #002D5E;}
        body.login div#login input{
            background: #cccccc36;
        }
	</style>
<?php }
/********************
 *** set home url ***
 *******************/
add_filter( 'login_headerurl', 'tsa_login_logo_url' );
function tsa_login_logo_url() {
	return home_url();
}
/*****************************************************
 * Add image size instruction in post named post type
 */
function nc_health_add_featured_image_html( $html ) {
	$post_type = get_current_screen()->post_type;
	if ( $post_type == 'post' ) {
		$html .= '<p>Recommended image size should be <b>380px X 247px</b>.<br> Please upload the optimized image, should be in KBs.</p>';
	}
    return $html;
}
add_filter( 'admin_post_thumbnail_html', 'nc_health_add_featured_image_html');
/***************************
*** Remove css js version***
***************************/
function remove_nc_health_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
 }
 add_filter( 'style_loader_src', 'remove_nc_health_cssjs_ver', 10, 2 );
 add_filter( 'script_loader_src', 'remove_nc_health_cssjs_ver', 10, 2 );
/**********************
 *** Year Shortcode ***
 *********************/
function nc_health_year(){
	return get_the_date('Y');
}
add_shortcode('year','nc_health_year');
/******************************
 * WP Menu Shortcode (Function that will return our Wordpress menu)
 */
function show_wp_menu_function($atts, $content = null) {
     
    extract(shortcode_atts(array(  
        'menu'            => '', 
        'container'       => ' ', 
        'container_class' => '', 
        'container_id'    => '', 
        'menu_class'      => 'catsub-menu', 
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => ''), 
        $atts));
  
  
    return wp_nav_menu( array( 
        'menu'            => $menu, 
        'container'       => $container, 
        'container_class' => $container_class, 
        'container_id'    => $container_id, 
        'menu_class'      => $menu_class, 
        'menu_id'         => $menu_id,
        'echo'            => false,
        'fallback_cb'     => $fallback_cb,
        'before'          => $before,
        'after'           => $after,
        'link_before'     => $link_before,
        'link_after'      => $link_after,
        'depth'           => $depth,
        'walker'          => $walker,
        'theme_location'  => $theme_location));
}
//Create the shortcode
add_shortcode("show_wp_menu", "show_wp_menu_function");
/***********
 * Create shortcode for redirecting third party URL
 */
function nc_health_redirection(){	
	$fluent_form_redirection = amthemeoption('fluent_form_redirection');
	if(!empty($fluent_form_redirection)):
		$furl = $fluent_form_redirection;
	else:
		$furl = "";
	endif;
	extract(shortcode_atts(array( 	
		'url'=> $furl,
		'duration'=>5000,
	),$atts));
	$rurl = '<script type="text/javascript">
				jQuery(document).ready(function(){
					setTimeout(function(){ 
					window.location.href = "'.$url.'";
					}, '.$duration.');	 
					});
			</script>';
	return $rurl;
}
add_shortcode('redirection','nc_health_redirection');
/**
 * Detect only cellular mobile devices and no tablets
 */
function my_wp_is_mobile() {
	include_once ( get_template_directory() . '/inc/Mobile_Detect.php');
	$detect = new Mobile_Detect;
	if( $detect->isMobile() && !$detect->isTablet() ) {
		return true;
	} else {
		return false;
	}
}
/**
 * Detect only tablets and no cellular mobile devices
 */
function my_wp_is_tablet() {
	
	include_once ( get_template_directory() . '/inc/Mobile_Detect.php');
	$detect = new Mobile_Detect;
	if( $detect->isTablet()) {
		return true;
	} else {		
		return false;
	}
}
/********************************************************************
 * remove "View" link from the listing of products categories taxanomy
 ******************************************************************/
	// add_filter( 'products_categories_row_actions', function($actions,$tag) {	
	// 		unset($actions['view']);
	// 		return $actions;	
	// }, 10, 2);
/********************************************************************
 * remove "View" link from the listing of products tags taxanomy
 ******************************************************************/
	add_filter( 'products_tags_row_actions', function($actions,$tag) {	
		unset($actions['view']);
		return $actions;	
	}, 10, 2);
/********************************************************************
 * remove "View" link from the listing of products states taxanomy
 ******************************************************************/
	add_filter( 'product_states_row_actions', function($actions,$tag) {	
		unset($actions['view']);
		return $actions;	
	}, 10, 2);
	/********************************************************************
 * remove "View" link from the listing of service type taxanomy
 ******************************************************************/
add_filter( 'service_types_row_actions', function($actions,$tag) {	
	unset($actions['view']);
	return $actions;	
}, 10, 2);
/********************************************************************
 * remove "View" link from the listing of Reseller Partners states taxanomy
 ******************************************************************/
add_filter( 'reseller_partner_states_row_actions', function($actions,$tag) {	
	unset($actions['view']);
	return $actions;	
}, 10, 2);
/********************************************************************
 * remove "View" link from the listing of Reseller Partners tags taxanomy
 ******************************************************************/
add_filter( 'reseller_partner_tags_row_actions', function($actions,$tag) {	
	unset($actions['view']);
	return $actions;	
}, 10, 2);
/*****************************************************
 * Display three level of category on taxanomy page *
 * ***************************************************/

function get_third_level_taxanomy($currentTermID,$taxanomyName){
	$categories = get_terms( $taxanomyName, array(
        'hide_empty' => 0,
		'orderby' => 'menu_order',
    	'order'   => 'ASC',
    ) );    
		
    $subcategories = $subsubcategories = $categories; 
	/*********get count of second level category Start***** */ 
		$secondLevelCatCount = array(); //define blank array
		foreach ( $categories as $category ) {
					
			// Only top level terms
			if ( 0 != $category->parent ) {
				continue;
			}
			
			// check current term and display only current term
			if($category->term_id == $currentTermID){
				// It is first level, display it
				//echo '<h3>' . $category->name . ' Filter</h4>';
				foreach ( $subcategories as $subcategory ) {
					// Only child terms
					if ( $category->term_id != $subcategory->parent ) {
						continue;
					}
					$secondLevelCatCount[] = $subcategory->name; 
				}
			}
		}  
		/*******get count of second level category End******** */ 
        foreach ( $categories as $category ) {
			
            // Only top level terms
            if ( 0 != $category->parent ) {
                continue;
            }
			
            // check current term and display only current term
            if($category->term_id == $currentTermID){
                // It is first level, display it
                //echo '<h3>' . $category->name . ' Filter</h4>';
                foreach ( $subcategories as $subcategory ) {
                    // Only child terms
                    if ( $category->term_id != $subcategory->parent ) {
                        continue;
                    }			
					// get count of second level of category
					$totalColCount = count ($secondLevelCatCount);	
					echo '<div class="col_'.(!empty($totalColCount) ? (int)(12/$totalColCount) : '12').'">';	
						// It is second level, display it
						echo '<h5>' . $subcategory->name.'</h5>';
						echo '<ul class="product-sub-sub-category">';        
							foreach ( $subsubcategories as $subsubcategory ) {
								// Only child terms
								if ( $subcategory->term_id != $subsubcategory->parent ) {
									continue;
								}                
								// It is third level, display it
								echo '<li><input type="checkbox" id="'.$subsubcategory->term_id.'" data-slug="'.$subsubcategory->slug.'" data-name="'.$subsubcategory->name.'" data-id="'.$subsubcategory->term_id.'" value="'.$subsubcategory->term_id.'" name="productCat" /><label for="'.$subsubcategory->term_id.'">'.$subsubcategory->name.'</label></li>';
							}
						echo '</ul>';
					echo '</div>';
                }
            }
        }
}
/******************************************
 * Conver WP_post Object into array function
 */
function object_to_array($data){
    if (is_array($data) || is_object($data)):
        $result = array();
        foreach ($data as $key => $value):
            $result[$key] = object_to_array($value);
		endforeach;
        return $result;
    endif;
    return $data;
}
/************************************************
 * ** Determine the top-most parent of a term*****
 */
function get_term_top_most_parent( $term, $taxonomy ) {
    // Start from the current term
    $parent  = get_term( $term, $taxonomy );
    // Climb up the hierarchy until we reach a term with parent = '0'
    while ( $parent->parent != '0' ) {
        $term_id = $parent->parent;
        $parent  = get_term( $term_id, $taxonomy);
    }
    return $parent;
}
/********************
 * Cusrom breadcrumbs
 */
function custom_breadcrumbs() {
	global $post;
	echo '<ul>';
		if(is_singular('products')):
			$terms = get_the_terms( $post->ID, $taxonomy="products_categories" );
			$topMostParentId = get_term_top_most_parent($terms[0]->term_id,$taxonomy="products_categories");
            $currentTermID = $topMostParentId->term_id;
			$termData = get_term_by('id', $currentTermID, $taxonomy="products_categories");
				echo '<li><a href="'.home_url().'" title="Home">Home</a></li>';
				echo '<li><a href="javascript:void(0);" title="Products">Products</a></li>';
				echo '<li><a href="'.(!empty($termData) ? get_term_link($termData->term_id) : '').'" title="'.(!empty($termData) ? $termData->name : '').'">'.(!empty($termData) ? $termData->name : '').'</a></li>';
				echo '<li><span>'.get_the_title($post->ID).'</span></li>';
		elseif(is_singular('project_showcases')):
			$terms = get_the_terms( $post->ID, $taxonomy="project_showcase_categories" );
			$topMostParentId = get_term_top_most_parent($terms[0]->term_id,$taxonomy="project_showcase_categories");
            $currentTermID = $topMostParentId->term_id;
			$termData = get_term_by('id', $currentTermID, $taxonomy="project_showcase_categories");
			$pages = get_page_by_path('inspiration-advice/articles-and-latest-news');
			$count = 1;
			$postAncestors = get_post_ancestors($pages->ID);
			$sortedAncestorArray = array();
			if(!empty($postAncestors)):
				foreach ($postAncestors as $ancestor):
					$sortedAncestorArray[] = $ancestor;
				endforeach;
				krsort($sortedAncestorArray); // Sort an array by key in reverse order
			endif;


				echo '<li><a href="'.home_url().'" title="Home">Home</a></li>';
					if(!empty(!empty($postAncestors)) && !empty($sortedAncestorArray)):
						foreach ($sortedAncestorArray as $ancestor):
							echo '<li><a href="'.esc_url(get_permalink($ancestor)).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
							$count++;
						endforeach;
					endif;
					
				//echo '<li><a href="'.esc_url(get_permalink($pages->ID)).'" title="'.get_the_title($pages->ID).'">'.get_the_title($pages->ID).'</a></li>';
				echo '<li><a href="javascript:void(0);">'.(!empty($termData) ? $termData->name : '').'</a></li>';
				echo '<li><span>'.get_the_title($post->ID).'</span></li>';
		elseif(is_singular('reseller_partners')):	
		elseif(is_single()):
			$terms = get_the_terms( $post->ID, $taxonomy="category" );
			$topMostParentId = get_term_top_most_parent($terms[0]->term_id,$taxonomy="category");
            $currentTermID = $topMostParentId->term_id;
			$termData = get_term_by('id', $currentTermID, $taxonomy="category");
			$pages = get_page_by_path('inspiration-advice/articles-and-latest-news');
			$count = 1;
			$postAncestors = get_post_ancestors($pages->ID);
			$sortedAncestorArray = array();
			if(!empty($postAncestors)):
				foreach ($postAncestors as $ancestor):
					$sortedAncestorArray[] = $ancestor;
				endforeach;
				krsort($sortedAncestorArray); // Sort an array by key in reverse order
			endif;


				echo '<li><a href="'.home_url().'" title="Home">Home</a></li>';
					if(!empty(!empty($postAncestors)) && !empty($sortedAncestorArray)):
						foreach ($sortedAncestorArray as $ancestor):
							echo '<li><a href="'.esc_url(get_permalink($ancestor)).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
							$count++;
						endforeach;
					endif;
					
				//echo '<li><a href="'.esc_url(get_permalink($pages->ID)).'" title="'.get_the_title($pages->ID).'">'.get_the_title($pages->ID).'</a></li>';
				echo '<li><a href="javascript:void(0);">'.(!empty($termData) ? $termData->name : '').'</a></li>';
				echo '<li><span>'.get_the_title($post->ID).'</span></li>';
		elseif(is_singular('reseller_partners')):		
			echo '<li><a href="'.home_url().'" title="Home">Home</a></li>';
			echo '<li><a href="'.get_permalink(443).'" title="Find your nearest reseller partner">Find your nearest reseller partner</a></li>';
			echo '<li><span>'.get_the_title($post->ID).'</span></li>';	
		else:
			$count = 1;
			$postAncestors = get_post_ancestors($post->ID);
			$sortedAncestorArray = array();
			if(!empty($postAncestors)):
				foreach ($postAncestors as $ancestor):
					$sortedAncestorArray[] = $ancestor;
				endforeach;
				krsort($sortedAncestorArray); // Sort an array by key in reverse order
			endif;


			echo '<li><a href="'.home_url().'" title="Home">Home</a></li>';
			if(!empty(!empty($postAncestors)) && !empty($sortedAncestorArray)):
				foreach ($sortedAncestorArray as $ancestor):
					echo '<li><a href="'.esc_url(get_permalink($ancestor)).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
					$count++;
				endforeach;
			endif;

			echo '<li><span>'.get_the_title($post->ID).'</span></li>';
		endif;
	echo '</ul>';
  }
/************************************
 * Get previous post id in single post
 *************************************/
  function get_previous_post_id( $post_id ) {
    // Get a global post reference since get_adjacent_post() references it
    global $post;
    // Store the existing post object for later so we don't lose it
    $oldGlobal = $post;
    // Get the post object for the specified post and place it in the global variable
    $post = get_post( $post_id );
    // Get the post object for the previous post
    $previous_post = get_previous_post();
    // Reset our global object
    $post = $oldGlobal;
    if ( '' == $previous_post ) {
        return 0;
    }
    return $previous_post->ID;
}
/**********************************
 * Get next post id in single post
 */
function get_next_post_id( $post_id ) {
    // Get a global post reference since get_adjacent_post() references it
    global $post;
    // Store the existing post object for later so we don't lose it
    $oldGlobal = $post;
    // Get the post object for the specified post and place it in the global variable
    $post = get_post( $post_id );
    // Get the post object for the previous post
    $next_post = get_next_post();
    // Reset our global object
    $post = $oldGlobal;
    if ( '' == $next_post ) {
        return 0;
    }
    return $next_post->ID;
}

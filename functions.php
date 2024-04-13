<?php



add_theme_support( 'post-thumbnails' );

add_post_type_support( 'page', 'excerpt' );

add_image_size( 'blog-cover', 1920, 2500 );

add_image_size( 'related-image', 600, 400, true );

add_image_size( 'blog-thumb', 600, 400, true );

add_image_size( 'portfolio', 1000, 598, true );



add_filter( 'wpcf7_validate_configuration', '__return_false' );

add_filter('xmlrpc_enabled', '__return_false');



// CUSTOM MAIN MENU ////////////////////////////////////////////////////////////////////////////////////////////////////

register_nav_menus( array(

	'main_menu' => 'Main template menu',

) );



$menu_items = null;

$en_menu = [

	'homepage'  => 'Home',

	'sluzby'    => 'Services',

	'portfolio' => 'Work',

	'produkty'  => 'Our Tools',

	'podcasts'  => 'Podcast',

	'blog'      => 'Blog',

	'o-nas'     => 'About'

];



function clean_custom_menus() {

	global $menu_items;



	$menu_name = 'main_menu'; // specify custom menu slug

	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {

		$menu = wp_get_nav_menu_object($locations[$menu_name]);

		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = clean_custom_menu_items();

	} else {

		$menu_list = '<!-- no list defined -->';

	}

	echo $menu_list;

}



/**

 * @param int $parentID

 *

 * @return string

 */

function clean_custom_menu_items( $parentID = 0 ) {

	global $menu_items, $en_menu;



	$menu_list = '' ."\n";

	$menu_list .= "\t\t\t\t". '<ul class="mainmenu__list">' ."\n";





	$current_menu_items = empty( $parentID ) ? $menu_items : get_nav_menu_item_children( $parentID, $menu_items, false );



	if(empty($current_menu_items))

		return '';



	foreach ( (array) $current_menu_items as $key => $menu_item ) {

		if ( $menu_item->menu_item_parent  != $parentID ) {

			continue;

		}



		//print_r($menu_item)

		$post = get_post( $menu_item->object_id );





		$title     = $menu_item->title;

		$url       = $menu_item->url;

		$active	   = ($post->post_name == 'homepage' && $menu_item->url == get_permalink()) || ($post->post_name !== 'homepage' && startsWith($menu_item->url, get_permalink())) ? 'active' : '';

		$menu_list .= "\t\t\t\t\t" . '<li class="mainmenu__item '.$active.'">

				<a href="' . $url . '">

					<span class="text">' . $title . '</span>

					' . ( $post && ! empty( $en_menu[ $post->post_name ] ) ? '<span class="subtext">' . $en_menu[ $post->post_name ] . '</span>' : '' ) . '

				</a>';



		$menu_list .= clean_custom_menu_items( $menu_item->ID);



		$menu_list .= '</li>' . "\n";



	}



	$menu_list .= "\t\t\t\t". '</ul>' ."\n";

	$menu_list .= "\t\t\t". '' ."\n";



	return $menu_list;

}



function startsWith($needle, $haystack)

{

	return substr($haystack, 0, strlen($needle)) == $needle;

}



/**

 * Returns all child nav_menu_items under a specific parent

 *

 * @param int the parent nav_menu_item ID

 * @param array nav_menu_items

 * @param bool gives all children or direct children only

 * @return array returns filtered array of nav_menu_items

 */

function get_nav_menu_item_children( $parent_id, $nav_menu_items, $depth = true ) {

	$nav_menu_item_list = array();

	foreach ( (array) $nav_menu_items as $nav_menu_item ) {

		if ( $nav_menu_item->menu_item_parent == $parent_id ) {

			$nav_menu_item_list[] = $nav_menu_item;

			if ( $depth ) {

				if ( $children = get_nav_menu_item_children( $nav_menu_item->ID, $nav_menu_items ) )

					$nav_menu_item_list = array_merge( $nav_menu_item_list, $children );

			}

		}

	}

	return $nav_menu_item_list;

}



// CUSTOM FOOTER MENU //////////////////////////////////////////////////////////////////////////////////////////////////

function clean_custom_menus_footer() {

	$menu_name = 'main_menu'; // specify custom menu slug

	$menu_list = '';

	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {

		$menu = wp_get_nav_menu_object($locations[$menu_name]);

		$menu_items = wp_get_nav_menu_items($menu->term_id);



		$menu_list = '' ."\n";

		$menu_list .= "\t\t\t\t". '<ul class="footermenu">' ."\n";

		$menu_list .= '';



		foreach ((array) $menu_items as $key => $menu_item) {



			//print_r($menu_item)



			$title = $menu_item->title;

			$url = $menu_item->url;

			$menu_list .= "\t\t\t\t\t". '<li class="footermenu__item">

				<a class="svg-wrapper" href="'. $url .'">

				<span class="text">'. $title .'</span></a></li>' ."\n";

		}

		$menu_list .= "\t\t\t\t". '</ul>' ."\n";

		$menu_list .= "\t\t\t". '' ."\n";

	} else {

		$menu_list = '<!-- no list defined -->';

	}

	echo $menu_list;

}



// CUSTOM BODY CLASS ///////////////////////////////////////////////////////////////////////////////////////////////////

add_filter( 'body_class', 'sk_body_class_for_pages' );

function sk_body_class_for_pages( $classes ) {

	if ( is_singular( 'page' ) ) {

		global $post;

		$classes[] = 'page-' . $post->post_name;

	}

	return $classes;

}



// EXCERPT /////////////////////////////////////////////////////////////////////////////////////////////////////////////

function excerpt($limit) {



	global $post;

	$excerpt = explode(' ', $post->post_excerpt, $limit);

	if(empty($post->post_excerpt)) {



		$excerpt = content(20);



	} else {

		if (count($excerpt) >= $limit) {

			array_pop($excerpt);

			$excerpt = implode(" ", $excerpt) . '...';

		} else {

			$excerpt = implode(" ", $excerpt);

		}

		$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	}

	return strip_tags($excerpt);

}



// CONTENT /////////////////////////////////////////////////////////////////////////////////////////////////////////////

function content($limit) {

	global $post;



	$content = explode(' ', $post->post_content, $limit);

	if (count($content)>=$limit) {

		array_pop($content);

		$content = implode(" ",$content).'...';

	} else {

		$content = implode(" ",$content);

	}

	$content = preg_replace('/\[.+\]/','', $content);

	$content = apply_filters('the_content', $content);

	$content = str_replace(']]>', ']]&gt;', $content);

	return strip_tags($content);

}



// LOAD SCRIPTS ////////////////////////////////////////////////////////////////////////////////////////////////////////

function add_theme_scripts() {

	//required CSS files

	wp_enqueue_style( 'bootstrapcdn', get_template_directory_uri() .'/css/minify/bootstrap.min.css', array(), '4.0.0-alpha.6', 'all');

	wp_enqueue_style( 'normalizecss', get_template_directory_uri() .'/css/normalize.min.css', array(), '', 'all');

	wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Playfair+Display|Anton&amp;subset=latin-ext', array(), '', 'all');

	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '', 'all');

	wp_enqueue_style( 'slick', get_template_directory_uri() .'/css/minify/slick.min.css', array(), '', 'all');

	wp_enqueue_style( 'aos', get_template_directory_uri() .'/js/vendor/aos-master/dist/aos.css', array(), '', 'all');



	wp_enqueue_script( 'countup', get_template_directory_uri() . '/js/vendor/countup/countup.js', array (  ), '1', true);

	wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/vendor/tether-1.3.3/dist/js/tether.min.js', array (  ), '1', true);

	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/vendor/isotope/isotope.pkgd.min.js', array ( 'jquery' ), '3.0.4', true);

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/js/minify/bootstrap.min.js', array ( 'jquery' ), '4.0.0-alpha.6', true);

	wp_enqueue_script( 'jquery', get_template_directory_uri() .'/js/minify/jquery.min.js', array ( 'jquery' ), '1.11.2', true);

	wp_enqueue_script( 'modernizrjs', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array (), '2.8.3', true);

	wp_enqueue_script( 'slickjs', get_template_directory_uri() .'/js/minify/slick.min.js', array ( 'jquery' ), '1.6.0', true);

	wp_enqueue_script( 'jquery.appear', get_template_directory_uri() . '/js/vendor/jquery.appear.js', array ( 'jquery' ), '', true);

	wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/vendor/aos-master/dist/aos.js', array ( 'jquery' ), '', true);

	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), '', true);



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

		wp_enqueue_script( 'comment-reply' );

	}



	$pathinfo = pathinfo($_SERVER['REQUEST_URI']);

	if(strpos($pathinfo['dirname'], '/service') === 0) {

		wp_enqueue_style( 'service_landing_page', get_template_directory_uri() . '/service/site.css', array(), '', 'all');

	} else {

		wp_enqueue_style( 'maincss', get_template_directory_uri() .'/css/main.css', array(), '2.03', 'all');

	}

}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



// GENERATE CONTACT FORM ///////////////////////////////////////////////////////////////////////////////////////////////

function generateContactForm($title) {



	if($title == '') $title = 'Kontaktujte nás'

	?>



	<div class="contact-form">

		<br /><br /><br />

		<h2 class="fancyheader">

			<span class="fancyheader__text"><?php echo $title; ?></span>

		</h2>

		<br />

		<?php echo do_shortcode('[contact-form-7 id="91" title="Contact form 1"]'); ?>

		<br /><br /><br />

	</div>



	<?php

}



// SHOW SPLASH SCREEN COOKIE ///////////////////////////////////////////////////////////////////////////////////////////

function kremsa_splashscreen_cookie()

{

	if(kremsa_should_show_splashscreen()) {

		// 365 * 24 * 3600 = 31536000

		setcookie('hide_splash', '1', time() + 31536000, COOKIEPATH, COOKIE_DOMAIN);

	}

}

add_action('init', 'kremsa_splashscreen_cookie');



function kremsa_should_show_splashscreen()

{

	return !isset($_COOKIE['hide_splash']);

}



function create_post_types() {





	// -------------- PORTFOLIO --------------------

	register_post_type( 'portfolio',

		array(

			'labels' => array(

				'name' => __( 'Portfolio' ),

				'singular_name' => __( 'Portfolio' )

			),

			'public' => true,

			'has_archive' => true,

		)

	);



	add_post_type_support( 'portfolio', 'excerpt' );

	add_post_type_support( 'portfolio', 'revisions' );

	add_post_type_support( 'portfolio', 'thumbnail' );

	add_post_type_support( 'portfolio', 'custom-fields' );





	// -------------- CASE STUDY --------------------

	register_post_type( 'case-study',

		array(

			'labels' => array(

				'name' => __( 'Case Study' ),

				'singular_name' => __( 'Case Study' )

			),

			'public' => true,

			'has_archive' => true,

		)

	);



	add_post_type_support( 'case-study', 'excerpt' );

	add_post_type_support( 'case-study', 'revisions' );

	add_post_type_support( 'case-study', 'thumbnail' );

	add_post_type_support( 'case-study', 'custom-fields' );



	register_taxonomy('tag','portfolio',array(

		'hierarchical' => false,

		'labels' => $labels,

		'show_ui' => true,

		'update_count_callback' => '_update_post_term_count',

		'query_var' => true,

		'rewrite' => array( 'slug' => 'tag' ),

	));



	// -------------- KARIERA --------------------



	register_post_type( 'kariera',

		array(

			'labels' => array(

				'name' => __( 'Kariéra' ),

				'singular_name' => __( 'Kariéra' )

			),

			'public' => true,

			'has_archive' => true,

		)

	);

	add_post_type_support( 'kariera', 'excerpt' );

	add_post_type_support( 'kariera', 'revisions' );

	add_post_type_support( 'kariera', 'custom-fields' );



	register_post_type( 'service',

		array(

			'labels' => array(

				'name' => __( 'Services' ),

				'singular_name' => __( 'Service' )

			),

			'public' => true,

			'publicly_queryable' => true,

			'query_var' => true,

			'has_archive' => true,

		)

	);



	// -------------- SERVICE --------------------

	add_post_type_support( 'service', 'excerpt' );

	add_post_type_support( 'service', 'revisions' );

	add_post_type_support( 'service', 'thumbnail' );

	add_post_type_support( 'service', 'custom-fields' );



	register_post_type( 'podcast',

		array(

			'labels' => array(

				'name' => __( 'Podcasts' ),

				'singular_name' => __( 'Podcast' )

			),

			'public' => true,

			'publicly_queryable' => true,

			'query_var' => true,

			'has_archive' => true,

		)

	);



	add_post_type_support( 'podcast', 'revisions' );

	add_post_type_support( 'podcast', 'thumbnail' );

	add_post_type_support( 'podcast', 'custom-fields' );

}

add_action( 'init', 'create_post_types' );

add_filter('acf/settings/remove_wp_meta_box', '__return_false');



// UPLOAD MIMES ////////////////////////////////////////////////////////////////////////////////////////////////////////

function cc_mime_types($mimes) {

	$mimes['svg'] = 'image/svg+xml';

	return $mimes;

}

add_filter('upload_mimes', 'cc_mime_types');



// CLASS TO BUTTONS ////////////////////////////////////////////////////////////////////////////////////////////////////

function posts_link_attributes() {

	return 'class="lead_button lead_button--simple"';

}

add_filter('next_posts_link_attributes', 'posts_link_attributes');

add_filter('previous_posts_link_attributes', 'posts_link_attributes');





function generateSimilarCaseStudies($id) {



	$query = new WP_Query(array(

		'post__not_in' => array($id),

		'post_type' => 'case-study',

		'post_status' => 'publish',

		'posts_per_page' => '999'

	));



	if($query->have_posts()) {

		echo'<h4 class="related-articles__title related-articles__title--case-study">'. __('Ostatné case studies', 'kremsa') .'</h4>';

		echo'<div class="related-articles">';



        while( $query->have_posts() ) : $query->the_post(); ?>



            <div class="shadow-box normal">

                <div class="shadow-box__lb-square"></div>

                <div class="shadow-box__rt-square"></div>

                <div class="shadow-box__content">

                    <div class="shadow-box__content--overflowhidden">

                        <div class="related-articles__item">

                            <a title="<?php the_title(); ?>" class="related-articles__item__link" href="<?php the_permalink(); ?>">

                                <span class="related-articles__item__cover"><?php the_title(); ?></span>

                                <?php the_post_thumbnail('related-image'); ?>

                            </a>

                        </div>

                    </div>

                </div>

            </div>



        <?php endwhile;



        echo'</div>';

    }



	wp_reset_query();

}



// DISABLE UPDATE //////////////////////////////////////////////////////////////////////////////////////////////////////

//add_filter( 'auto_update_plugin', '__return_false' );

//add_filter( 'auto_update_theme', '__return_false' );



/**

 * Disable update notification for individual plugins

 *

 * @param $value

 * @return mixed

 */

function avrisco_filter_plugin_updates($value) {



	if(isset($value->response['js_composer/js_composer.php'])) {

		unset($value->response['js_composer/js_composer.php']);

	}



	return $value;

}

add_filter('site_transient_update_plugins', 'avrisco_filter_plugin_updates');



// OPTIMIZE JAVASCRIPTS ////////////////////////////////////////////////////////////////////////////////////////////////

//function defer_parsing_of_js ( $url ) {

//	if ( FALSE === strpos( $url, '.js' ) ) return $url;

//	if ( strpos( $url, 'jquery.js' ) ) return $url;

//	return "$url' defer ";

//}

//add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );





define('THEME_DIRECTORY', get_template_directory());

define('THEME_DIRECTORY_URI', get_template_directory_uri());



// Register Custom Post Types

require_once THEME_DIRECTORY . '/inc/custom-post-types.php';



/**

 * Admin Settings

 */

if (is_admin()) {



    // Reorder Menus

    require_once THEME_DIRECTORY . '/admin/reorder.php';



    // Scripts and Styles

    require_once THEME_DIRECTORY . '/admin/scripts.php';

}



function post_content_with_cta_tags($content)

{

	global $post;

	if(!is_single() || $post->post_type !== 'post') {

		return $content;

	}



	$tags = get_the_tags();



	$service_tags = [

		'service-social-networks',

		'service-communication-strategy',

		'service-performance-marketing',

		'service-email-marketing',

		'service-design-and-branding',

		'service-content-marketing',

		'service-development',

		'service-seo',

		'service-offline',

		'service-',

	];



	foreach($tags as $tag) {

		if(in_array($tag->slug, $service_tags)) {

			apply_service_call_to_action($content, $tag);

			break;

		}

	}



	return $content;

}



add_filter('the_content', 'post_content_with_cta_tags');



function apply_service_call_to_action(&$content, $tag)

{

	$cta_html        = '<div class="service-cta-holder">

		<h3>Hľadáte služby v oblasti '.ucwords($tag->name).'?</h3>

		<a href="/service/'.str_replace('service-', '', $tag->slug).'/" class="btn">Pomôžeme Vám</a>

	</div>';



	$flag = '[[cta_service_button]]';



	if( strstr($content, $flag ) > -1) {

		$content = str_replace($flag, $cta_html, $content);

		return;

	}



	$newContent = '';

	list($doc, $nodes) = _parseContentNodes($content);

	if($nodes->length > 0) //Only if tag1 items are found

	{

		$half = ceil($nodes->length / 2) + 1;

		foreach ($nodes as $i=>$tag1)

		{

			$newContent .= '<p>'.$tag1->nodeValue.'</p>';

			if($i == $half) {

				$newContent .= $cta_html;

			}

		}

	}

	else

	{

		$newContent = $doc->saveHTML();

	}



	$content = $newContent;

}



/**

 * @return \DOMNodeList

 */

function _parseContentNodes($content) {

	$doc = new DOMDocument();

	$doc->loadHTML('<?xml encoding="utf-8" ?>' . $content);

	$nodes = $doc->getElementsByTagName('p');



	return [$doc, $nodes];

}
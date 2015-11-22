<?php
/**
 * topcat functions and definitions
 *
 * @package topcat-lite
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}
if ( ! function_exists( 'topcat_lite_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function topcat_lite_setup() {
		/*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on topcat, use a find and replace
        * to change 'topcat-lite' to the name of your theme in all the template files
        */
		load_theme_textdomain( 'topcat-lite', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
		add_theme_support( 'title-tag' );

		/*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
        */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'topcat-lite-large-thumbnail', 600, 200, true );
		add_image_size( 'topcat-lite-small-thumbnail', 300, 100, true );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'topcat-lite' ),
				'social'  => __( 'Social Menu', 'topcat-lite' ),
			)
		);
		/*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		/*
        * Enable support for Post Formats.
        * See http://codex.wordpress.org/Post_Formats
        */
		add_theme_support(
			'post-formats', array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);
		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background', apply_filters(
				'topcat_lite_custom_background_args', array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
	}
endif; // topcat_lite_setup
add_action( 'after_setup_theme', 'topcat_lite_setup' );
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function topcat_lite_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'topcat-lite' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer Sidebar', 'topcat-lite' ),
			'id'            => 'sidebar-footer',
			'description'   => __( 'Footer widgets go here', 'topcat-lite' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
}

add_action( 'widgets_init', 'topcat_lite_widgets_init' );
/*proper implementation of fonts http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes */
function topcat_lite_fonts_url() {
	$fonts_url = '';
	/* Translators: If there are characters in your language that are not
	* supported by Lora, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$ABeeZee = _x( 'on', 'ABeeZee font: on or off', 'topcat-lite' );
	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$PT_Sans = _x( 'on', 'PT Sans font: on or off', 'topcat-lite' );
	if ( 'off' !== $ABeeZee || 'off' !== $PT_Sans ) {
		$font_families = array();
		if ( 'off' !== $ABeeZee ) {
			$font_families[] = 'ABeeZee:400italic,400';
		}
		if ( 'off' !== $PT_Sans ) {
			$font_families[] = 'PT+Sans:400italic,400,700italic,700';
		}
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url  = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}
	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function topcat_lite_scripts() {
	wp_enqueue_style( 'topcat-lite-style', get_stylesheet_uri() );

	if ( is_page_template( 'left-sidebar-page.php' ) ) {
		wp_enqueue_style( 'topcat-lite-layout-css', get_template_directory_uri() . '/layouts/sidebar-content.css' );
	} else {
		wp_enqueue_style( 'topcat-lite-layout-css', get_template_directory_uri() . '/layouts/content-sidebar.css' );
	}

	//font for the headings
	wp_enqueue_style( 'topcat-lite-fonts', topcat_lite_fonts_url(), array(), null );
	//font awesome icons
	wp_enqueue_style( 'topcat-lite-fontawesome', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_script( 'topcat-lite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'topcat-lite-superfish', get_template_directory_uri() . '/js/superfish.min.js', array( 'jquery' ), '20141123', true );
	wp_enqueue_script( 'topcat-lite-global', get_template_directory_uri() . '/js/global.js', array( 'topcat-lite-superfish' ), '20141123', true );
	wp_enqueue_script( 'topcat-lite-hoverIntent', get_template_directory_uri() . '/js/hoverIntent.js', array( 'topcat-lite-global' ), '20141123', true );
	wp_enqueue_script( 'topcat-lite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'topcat-lite-respond', get_template_directory_uri() . '/js/respond.js', array(), false, false );
	wp_enqueue_script( 'jquery-masonry' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'topcat_lite_scripts' );

function topcat_lite_add_editor_styles() {
	add_editor_style( array( 'custom-editor-style.css', topcat_lite_fonts_url() ) );
}

add_action( 'after_setup_theme', 'topcat_lite_add_editor_styles' );
add_action( 'admin_print_styles-appearance_page_custom-header', 'topcat_lite_scripts' );

/*Title tag support */
add_action( 'after_setup_theme', 'theme_slug_setup' );
function theme_slug_setup() {
	add_theme_support( 'title-tag' );
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.4.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 *
 * require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
 * add_action( 'tgmpa_register', 'topcat_lite_register_required_plugins' );
 */
/**
 * Register the required plugins for this theme.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function topcat_lite_register_required_plugins() {
	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'     => __( 'Contact Form 7', 'topcat-lite' ),
			'slug'     => 'contact-form-7',
			'required' => false,
		)
	);
	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'default_path' => '',
		// Default absolute path to pre-packaged plugins.
		'menu'         => 'tgmpa-install-plugins',
		// Menu slug.
		'has_notices'  => true,
		// Show admin notices or not.
		'dismissable'  => true,
		// If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',
		// If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,
		// Automatically activate plugins after installation or not.
		'message'      => '',
		// Message to output right before the plugins table.
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'topcat-lite' ),
			'menu_title'                      => __( 'Install Plugins', 'topcat-lite' ),
			'installing'                      => __( 'Installing Plugin: %s', 'topcat-lite' ),
			// %s = plugin name.
			'oops'                            => __( 'Something went wrong with the plugin API.', 'topcat-lite' ),
			'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'topcat-lite' ),
			// %1$s = plugin name(s).
			'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'topcat-lite' ),
			// %1$s = plugin name(s).
			'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'topcat-lite' ),
			// %1$s = plugin name(s).
			'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'topcat-lite' ),
			// %1$s = plugin name(s).
			'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'topcat-lite' ),
			// %1$s = plugin name(s).
			'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'topcat-lite' ),
			// %1$s = plugin name(s).
			'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'topcat-lite' ),
			// %1$s = plugin name(s).
			'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'topcat-lite' ),
			// %1$s = plugin name(s).
			'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'topcat-lite' ),
			'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'topcat-lite' ),
			'return'                          => __( 'Return to Required Plugins Installer', 'topcat-lite' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'topcat-lite' ),
			'complete'                        => __( 'All plugins installed and activated successfully. %s', 'topcat-lite' ),
			// %s = dashboard link.
			'nag_type'                        => 'updated'
			// Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		)
	);
	tgmpa( $plugins, $config );

}
include_once( dirname( __FILE__ ) . '/kirki/kirki.php' );
require get_template_directory() . '/framework/kirki.php';
function kirki_update_url( $config ) {

	$config['url_path'] = get_stylesheet_directory_uri() . '/kirki/';
	return $config;

}
add_filter( 'kirki/config', 'kirki_update_url' );
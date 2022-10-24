<?php
/**
 * Esufoundation-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Esufoundation-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function esufoundation_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Esufoundation-theme, use a find and replace
		* to change 'esufoundation-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'esufoundation-theme', get_template_directory() . '/languages' );

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
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'esufoundation-theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'esufoundation_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'esufoundation_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function esufoundation_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'esufoundation_theme_content_width', 640 );
}

add_action( 'after_setup_theme', 'esufoundation_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function esufoundation_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'esufoundation-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'esufoundation-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'esufoundation_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function esufoundation_theme_scripts() {
	wp_enqueue_style( 'esufoundation-theme-maine-style', get_template_directory_uri() . '/style/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'esufoundation-theme-maine-style1', get_template_directory_uri() . '/style/css/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'esufoundation-theme-maine-style2', get_template_directory_uri() . '/style/css/home.css', array(), _S_VERSION );
	wp_enqueue_style( 'esufoundation-theme-maine-style3', get_template_directory_uri() . '/style/css/inner-page.css', array(), _S_VERSION );
	wp_enqueue_style( 'esufoundation-theme-maine-style4', get_template_directory_uri() . '/style/css/remodal.css', array(), _S_VERSION );

	wp_enqueue_script( 'esufoundation-theme-maine-script', get_template_directory_uri() . '/style/js/lazyload.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'esufoundation-theme-maine-script1', 'https://esufoundation.org.ua/wp-content/themes/esufoundation-theme/style/js/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'esufoundation-theme-maine-script5', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'esufoundation-theme-maine-script2', get_template_directory_uri() . '/style/js/jquery.sticky.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'esufoundation-theme-maine-script3', get_template_directory_uri() . '/style/js/remodal.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'esufoundation-theme-maine-script4', get_template_directory_uri() . '/style/js/my_scripts.js', array(), _S_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'esufoundation_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**************Carbon fields*******************/
/*if ( ! function_exists( 'carbon_get_post_meta' ) ) {
	function carbon_get_post_meta( $id, $name, $type = null ) {
		return false;
	}
}

if ( ! function_exists( 'carbon_get_the_post_meta' ) ) {
	function carbon_get_the_post_meta( $name, $type = null ) {
		return false;
	}
}

if ( ! function_exists( 'carbon_get_theme_option' ) ) {
	function carbon_get_theme_option( $name, $type = null ) {
		return false;
	}
}

if ( ! function_exists( 'carbon_get_term_meta' ) ) {
	function carbon_get_term_meta( $id, $name, $type = null ) {
		return false;
	}
}

if ( ! function_exists( 'carbon_get_user_meta' ) ) {
	function carbon_get_user_meta( $id, $name, $type = null ) {
		return false;
	}
}

if ( ! function_exists( 'carbon_get_comment_meta' ) ) {
	function carbon_get_comment_meta( $id, $name, $type = null ) {
		return false;
	}
}*/

/*use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function crb_register_custom_fields() {
	require_once __DIR__ . '/inc/carbon-fields.php';
	require_once __DIR__ . '/inc/theme-options.php';
}*/
/*function carbon_lang() {
	$suffix = '';
	if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
		return $suffix;
	}
	$suffix = '_' . ICL_LANGUAGE_CODE;
	return $suffix;
}*/
function carbon_lang() {
	$suffix = '';
	if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
		return $suffix;
	}
	$suffix = '_' . ICL_LANGUAGE_CODE;

	return $suffix;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'theme_options' );
function theme_options() {
	Container::make( 'theme_options', __( 'Theme Options' ) )
	         ->add_tab( __( 'Лого хедер' ), array(
		         Field::make( 'text', 'logo_header_imga' . carbon_lang(), 'Лого ссылка на изображение_' ),
	         ) )
	         ->add_tab( __( 'Кнопки в хедере_' ), array(

		         Field::make( 'text', 'alink_url_btn_headera' . carbon_lang(), 'Ссылка на кнопке - Кнопка 1_' ),
		         Field::make( 'text', 'alink_text_btn_headera' . carbon_lang(), 'Текст кнопки - Кнопка 1_' ),
		         Field::make( 'text', 'aicn_btn_headera' . carbon_lang(), 'Иконка кнопки - Кнопка 1_' ),
		         Field::make( 'separator', 'crb_separatora', __( 'Кнопка 2' ) ),
		         Field::make( 'text', 'alink_url_btn_header2a' . carbon_lang(), 'Ссылка на кнопке - Кнопка 2_' ),
		         Field::make( 'text', 'alink_text_btn_header2a' . carbon_lang(), 'Текст кнопки- Кнопка 2_' ),
		         Field::make( 'text', 'aicn_btn_header2a' . carbon_lang(), 'Иконка кнопки- Кнопка 2_' ),

	         ) )
	         ->add_tab( __( 'Футер настройки' ), array(
		         Field::make( 'text', 'logo_footer_img' . carbon_lang(), 'Лого футер ссылка на изображение' ),
		         Field::make( 'text', 'logo_footer_text' . carbon_lang(), 'Лого футер текст' ),
		         Field::make( 'text', 'fb_footer_text' . carbon_lang(), 'Ссылка на Facebook' ),
		         Field::make( "checkbox", "active_fb", __( 'Не показывать Facebook' ) )
		              ->set_option_value( 'no' ),
		         Field::make( 'text', 'insta_footer_text' . carbon_lang(), 'Ссылка на Instagram' ),
		         Field::make( "checkbox", "active_inst", __( 'Не показывать Instagram' ) )
		              ->set_option_value( 'no' ),
		         Field::make( 'text', 'youtube_footer_text' . carbon_lang(), 'Ссылка на Youtube' ),
		         Field::make( "checkbox", "active_youtube", __( 'Не показывать Youtube' ) )
		              ->set_option_value( 'no' ),
		         Field::make( 'text', 'work_time_footer_text' . carbon_lang(), 'Время работы футер' ),
		         Field::make( 'text', 'phone_footer_text' . carbon_lang(), 'Номер телефона футер' )
		              ->set_width( 20 ),
		         Field::make( 'text', 'mail_footer_text' . carbon_lang(), 'E-mail футер' )
		              ->set_width( 20 )
	         ) )
	         ->add_tab( __( 'Меню в футере' ), array(
		         Field::make( 'text', 'text_footer_menu' . carbon_lang(), 'Название пункта меню в футере' ),
		         Field::make( 'text', 'link_footer_menu' . carbon_lang(), 'Ссылка пункта меню в футере' ),

		         Field::make( 'text', 'text2_footer_menu' . carbon_lang(), 'Название пункта 2 меню в футере' ),
		         Field::make( 'text', 'link2_footer_menu' . carbon_lang(), 'Ссылка пункта 2 меню в футере' )


	         ) );
}


add_action( 'carbon_fields_register_fields', 'main_carbon_text' );
function main_carbon_text() {




	Container::make( 'post_meta', '"ПРО ФОНД" блок' )
	         ->where( 'post_type', '=', 'page' )
			 ->show_on_template( array('template-page/home.php', 'template-page/projects.php') )
	         ->add_fields( array(
		         Field::make( 'complex', 'about_textimg_main', 'ПРО ФОНД блоки' )
		              ->add_fields( array(
			              Field::make( 'text', 'about_title', 'Введите заголовок' ),
			              Field::make( 'textarea', 'about_desc', 'Введите текст' ),
			              Field::make( 'media_gallery', 'photos_abouts', 'Вставьте изображения' ),
			              Field::make( 'checkbox', 'abt_show_btn', __( 'Показать кнопку' ) )
			                   ->set_option_value( 'yes' ),
			              Field::make( 'text', 'link_url_btn_about', 'Ссылка на кнопке' ),
			              Field::make( 'text', 'link_text_btn_about', 'Текст кнопки' )
		              ) )
	         ) );
	Container::make( 'post_meta', '"ПРОЄКТИ" блок' )
	         ->where( 'post_type', '=', 'page' )
	         ->show_on_template( array('template-page/home.php', 'template-page/projects.php') )
	         ->add_fields( array(
		         Field::make( 'text', 'project_title', 'Введите заголовок' ),
		         Field::make( 'complex', 'project_img_main', 'ПРОЄКТИ блоки' )
		              ->add_fields( array(
			              Field::make( 'text', 'project_titlemain', 'Введите заголовок' ),
			              Field::make( 'textarea', 'project_desc_main1', 'Введите текст' ),
			              Field::make( 'image', 'photo_project', 'Вставьте изображение' ),
			              Field::make( 'text', 'link_url_btn', 'Ссылка на кнопке' ),
			              Field::make( 'text', 'link_text_btn', 'Текст кнопки' )
		              ) )

	         ) );
	Container::make( 'post_meta', 'Слайд главный' )
	         ->where( 'post_type', '=', 'page' )
	         ->show_on_template( array('template-page/home.php', 'template-page/projects.php') )
	         ->add_fields( array(

		         Field::make( 'complex', 'slider_mainhomea', 'Слайд' )
		              ->add_fields( array(
			              Field::make( 'media_gallery', 'images_sliderhomea', __( 'Изображение слайд' ) )
		              ) )

	         ) );

	/************************about page******************************/

	Container::make( 'post_meta', '"ПРО ФОНД" блок' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/about.php' )
	         ->add_fields( array(
		         Field::make( 'text', 'about_textimg_main1', 'ПРО ФОНД заголовок' ),
		         Field::make( 'textarea', 'about_textimg_main2', 'ПРО ФОНД описаниеы' )
	         ) );

	Container::make( 'post_meta', '"ПРО ФОНД" проекты' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/about.php' )
	         ->add_fields( array(
		         Field::make( 'complex', 'project_img_main2', '"ПРО ФОНД" проект' )
		              ->add_fields( array(
			              Field::make( 'image', 'photo_project2', 'Вставьте изображение' ),
			              Field::make( 'text', 'project_titlemain2', 'Введите имя' ),
			              Field::make( 'textarea', 'link_url_btn2', 'Введите описание' )
		              ) )

	         ) );

	Container::make( 'post_meta', '"ПРО ФОНД" команда' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/about.php' )
	         ->add_fields( array(
		         Field::make( 'complex', 'project_img_main3', '"ПРО ФОНД" команда' )
		              ->add_fields( array(
			              Field::make( 'image', 'photo_project3', 'Вставьте изображение' ),
			              Field::make( "checkbox", "show_img_cur", __( 'Показывать изображение' ) )
			                   ->set_option_value( 'no' ),
			              Field::make( 'text'/*rich_text*/, 'project_titlemain3', 'Введите текст' ),
			              Field::make( 'textarea', 'link_url_btn3', 'Введите описание' )
		              ) )

	         ) );
	Container::make( 'post_meta', '"ПРО ФОНД" ссылки на документы внизу страницы' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/about.php' )
	         ->add_fields( array(
		         Field::make( 'complex', 'document_items', '"ПРО ФОНД" документы внизу страницы' )
		              ->add_fields( array(
			              Field::make( 'text'/*rich_text*/, 'name_document', 'Введите название документа' ),
			              Field::make( 'text', 'url_document', 'Вставьте ссылку на документ' )
		              ) )

	         ) );
	Container::make( 'post_meta', '"ПРО ФОНД" текст и кнопка внизу страницы' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/about.php' )
	         ->add_fields( array(
		         Field::make( 'complex', 'about_btn_bottom_block', '"ПРО ФОНД" текст и кнопка внизу страницы' )
		              ->add_fields( array(
			              Field::make( 'text'/*rich_text*/, 'about_btn_text_bottom', 'Текст перед кнопкой' ),
			              Field::make( 'text'/*rich_text*/, 'name_btn_bottom_about', 'Текст на кнопке' ),
			              Field::make( 'text', 'url_btn_about', 'Ссылка кнопки' )
		              ) )

	         ) );
	/************************Partnership page******************************/
	Container::make( 'post_meta', 'Партнерство текст блок вверху' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/partnership.php' )
	         ->add_fields( array(
		         Field::make( 'text', 'partnership_title_main', 'Партнерство заголовок' ),
		         Field::make( 'textarea', 'partnership_desc_main', 'Партнерство описаниеы' )
	         ) );
	Container::make( 'post_meta', 'Партнерство список изображений' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/partnership.php' )
	         ->add_fields( array(
		         Field::make( 'text', 'partnership_title_main1', 'Партнерство заголовок' ),
	         ) )
	         ->add_fields( array(
		         Field::make( 'complex', 'partnership_title_list3', 'Слайды' )
		              ->add_fields( array(
			              Field::make( 'image', 'partnership_title_list111', __( 'Изображение слайда' ) )
		              ) )

	         ) );


	/************************Report page******************************/

	Container::make( 'post_meta', 'Партнерство текст блок вверху' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/reporting.php' )
	         ->add_fields( array(
		         Field::make( 'text', 'partnership_title_main222', 'Отчеты заголовок' )
	         ) );
	Container::make( 'post_meta', 'Отчеты' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/reporting.php' )
	         ->add_fields( array(
		         Field::make( 'complex', 'year_comp', 'Год' )
		              ->add_fields( array(
			              Field::make( 'text', 'next_ye', 'Годы отчета' ),
			              Field::make( "checkbox", "firsty", __( 'Активная вкладка' ) )
			                   ->set_option_value( 'no' ),
			              Field::make( 'complex', 'month_compa', 'Месяцы' )
			                   ->add_fields( array(
				                   Field::make( "checkbox", "active_btnm1", __( 'Активный месяц' ) )
				                        ->set_option_value( 'yes' ),
				                   Field::make( 'text', 'month_ad', 'Месяц отчета' ),
				                   Field::make( 'text', 'month_ad_url', 'Ссылка на отчет' )
			                   ) )
		              ) )


	         ) );
	/************************help1 page******************************/

	Container::make( 'post_meta', 'help текст блок вверху' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/help.php' )
	         ->add_fields( array(
		         Field::make( 'text', 'help_title_main222', 'заголовок' ),
		         Field::make( 'textarea', 'help_title_main333', 'Описание' )
	         ) );

	Container::make( 'post_meta', 'help текст блок вверху' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/help.php' )
	         ->add_fields( array(
		         Field::make( 'complex', 'help1_slider', 'Слайдер партнеров' )
		              ->add_fields( array(
			              Field::make( 'image', 'help_part_slide', 'Ссылка кнопки' )
		              ) )

	         ) );


	Container::make( 'post_meta', 'help текст блок вверху' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/help.php' )
	         ->add_fields( array(
		         Field::make( 'text', 'help_btn_text1', 'Допомогти кнопка текст' ),
		         Field::make( 'checkbox', 'help_btn_text1_show', __( 'Показать кнопку' ) )
		              ->set_option_value( 'yes' ),
		         Field::make( 'text', 'help_btn_url1', 'Допомогти кнопка ссылка' ),
		         Field::make( 'text', 'help_mono_btn_text1', 'Монобанк кнока текст' ),
		         Field::make( 'checkbox', 'help_mono_btn_text_show', __( 'Показать кнопку' ) )
		              ->set_option_value( 'yes' ),
		         Field::make( 'text', 'help_mono_btn_url1', 'Монобанк кнока ссылка' ),
		         Field::make( 'textarea', 'help_uah', 'ПЕРЕКАЗИ ПО УКРАЇНІ' ),
		         Field::make( 'textarea', 'help_usd', 'SWIFT IN US DOLLARS (USD)' ),
		         Field::make( 'textarea', 'help_eur', 'SWIFT IN EUROS (EUR)' )

	         ) );


	Container::make( 'post_meta', 'help текст блок вверху' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/help.php' )
	         ->add_fields( array(
		         Field::make( 'text', 'help_title_main2222', 'заголовок' ),
		         Field::make( 'textarea', 'help_title_main3332', 'Описание' )
	         ) );


	Container::make( 'post_meta', 'help ПОДАТИ ЗАЯВКУ НА ОТРИМАННЯ ДОПОМОГИ' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/help.php' )
	         ->add_fields( array(
		         Field::make( 'text', 'help_send_title', 'Заголовок' ),
		         Field::make( 'textarea', 'help_send_desc', 'Описание' ),
		         Field::make( 'text', 'help_send_zrazok_title', 'Зразок запиту' ),
		         Field::make( 'text', 'help_send_zrazok_ul', 'Зразок запиту url' ),
		         Field::make( 'text', 'help_send_form_order_title', 'Форма заявки' ),
		         Field::make( 'text', 'help_send_form_order_url', 'Форма заявки url' )
	         ) );

	Container::make( 'post_meta', 'help СТАТИСТИКА ЭЛЕМЕНТЫ' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/help.php' )
	         ->add_fields( array(
		         Field::make( 'text', 'help_send_titl1e', 'Заголовок блока' )
	         ))
	         ->add_fields( array(
		         Field::make( 'complex', 'crb_slider', __( 'Элементы' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'title_help', __( 'Заголовок' ) ),
			              Field::make( 'text', 'desc_help', __( 'Описание' ) ),
			              Field::make( 'text', 'link_help', __( 'Ссылка' ) ),
			              Field::make( 'checkbox', 'help_show_utl', __( 'Включить ссылку' ) )
			                   ->set_option_value( 'no' ),
			              Field::make( 'image', 'photo_help', __( 'Photo' ) )
		              ) )


	         ) );

	Container::make( 'post_meta', 'ВІДПОВІДІ НА ЗАПИТАННЯ' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/help.php' )
	         ->add_fields( array(
		         Field::make( 'text', 'faq_titl1e', 'Заголовок блока' )
	         ))
	         ->add_fields( array(
		         Field::make( 'complex', 'crb_faq', __( 'Вопросы' ) )
		              ->add_fields( array(
			              Field::make( 'rich_text', 'faq_qest', __( 'Вопрос' ) ),
			              Field::make( 'rich_text', 'faq_ans', __( 'Ответ' ) )
		              ) )


	         ) );

	Container::make( 'post_meta', 'Внизу страницы слайдер' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/help.php' )
	         ->add_fields( array(
		         Field::make( 'complex', 'about_btn_bottom_blocka', 'Слайды' )
		              ->add_fields( array(
			              Field::make( 'image', 'url_btn_about', 'Слайд' )
		              ) )

	         ) )
	;Container::make( 'post_meta', '404' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'template-page/404.php' )
	         ->add_fields( array(

			              Field::make( 'text', 'url_btn_about222', 'Сообщения' ),
			              Field::make( 'text', 'url_btn_about333', 'Сообщения' ),


	         ) );



}/**
 * Хлебные крошки для WordPress (breadcrumbs)
 *
 */
function kama_breadcrumbs( $sep = ' » ', $l10n = array(), $args = array() ) {
	$kb = new Kama_Breadcrumbs;
	echo $kb->get_crumbs( $sep, $l10n, $args );
}

class Kama_Breadcrumbs {

	public $arg;

	// Локализация
	static $l10n = [
		'home'       => 'Головна',
		'paged'      => 'Сторінка %d',
		'_404'       => 'Помилка 404',
		'search'     => 'Результати пошуку за запитом - <b>%s</b>',
		'author'     => 'Архив автора: <b>%s</b>',
		'year'       => 'Архив за <b>%d</b> год',
		'month'      => 'Архив за: <b>%s</b>',
		'day'        => '',
		'attachment' => 'Медиа: %s',
		'tag'        => 'Записи по метке: <b>%s</b>',
		'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
		// tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
		// Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
	];

	// Параметры по умолчанию
	static $args = [
		// выводить крошки на главной странице
		'on_front_page'   => true,
		// показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
		'show_post_title' => true,
		// показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
		'show_term_title' => true,
		// шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
		'title_patt'      => '<span class="kb_title">%s</span>',
		// показывать последний разделитель, когда заголовок в конце не отображается
		'last_sep'        => true,
		// 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
		// или можно указать свой массив разметки:
		// array( 'wrappatt'=>'<div class="kama_breadcrumbs">%s</div>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', )
		'markup'          => 'schema.org',
		// приоритетные таксономии, нужно когда запись в нескольких таксах
		'priority_tax'    => [ 'category' ],
		// 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
		// Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
		// 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
		// порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
		'priority_terms'  => [],
		// добавлять rel=nofollow к ссылкам?
		'nofollow'        => false,

		// служебные
		'sep'             => '',
		'linkpatt'        => '',
		'pg_end'          => '',
	];

	function get_crumbs( $sep, $l10n, $args ) {
		global $post, $wp_post_types;

		self::$args['sep'] = $sep;

		// Фильтрует дефолты и сливает
		$loc = (object) array_merge( apply_filters( 'kama_breadcrumbs_default_loc', self::$l10n ), $l10n );
		$arg = (object) array_merge( apply_filters( 'kama_breadcrumbs_default_args', self::$args ), $args );

		$arg->sep = '<span class="kb_sep">' . $arg->sep . '</span>'; // дополним

		// упростим
		$sep       = &$arg->sep;
		$this->arg = &$arg;

		// микроразметка ---
		if ( 1 ) {
			$mark = &$arg->markup;

			// Разметка по умолчанию
			if ( ! $mark ) {
				$mark = [
					'wrappatt'  => '<div class="kama_breadcrumbs">%s</div>',
					'linkpatt'  => '<a href="%s">%s</a>',
					'sep_after' => '',
				];
			} // rdf
			elseif ( $mark === 'rdf.data-vocabulary.org' ) {
				$mark = [
					'wrappatt'  => '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</div>',
					'linkpatt'  => '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">%s</a>',
					'sep_after' => '</span>', // закрываем span после разделителя!
				];
			} // schema.org
			elseif ( $mark === 'schema.org' ) {
				$mark = [
					'wrappatt'  => '<div class="kama_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">%s</div>',
					'linkpatt'  => '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="%s" itemprop="item"><span itemprop="name">%s</span></a></span>',
					'sep_after' => '',
				];
			} elseif ( ! is_array( $mark ) ) {
				die( __CLASS__ . ': "markup" parameter must be array...' );
			}

			$wrappatt      = $mark['wrappatt'];
			$arg->linkpatt = $arg->nofollow ? str_replace( '<a ', '<a rel="nofollow"', $mark['linkpatt'] ) : $mark['linkpatt'];
			$arg->sep      .= $mark['sep_after'] . "\n";
		}

		$linkpatt = $arg->linkpatt; // упростим

		$q_obj = get_queried_object();

		// может это архив пустой таксы
		$ptype = null;
		if ( ! $post ) {
			if ( isset( $q_obj->taxonomy ) ) {
				$ptype = $wp_post_types[ get_taxonomy( $q_obj->taxonomy )->object_type[0] ];
			}
		} else {
			$ptype = $wp_post_types[ $post->post_type ];
		}

		// paged
		$arg->pg_end = '';
		$paged_num   = get_query_var( 'paged' ) ?: get_query_var( 'page' );
		if ( $paged_num ) {
			$arg->pg_end = $sep . sprintf( $loc->paged, (int) $paged_num );
		}

		$pg_end = $arg->pg_end; // упростим

		$out = '';

		if ( is_front_page() ) {
			return $arg->on_front_page ? sprintf( $wrappatt, ( $paged_num ? sprintf( $linkpatt, get_home_url(), $loc->home ) . $pg_end : $loc->home ) ) : '';
		} // страница записей, когда для главной установлена отдельная страница.
		elseif ( is_home() ) {
			$out = $paged_num ? ( sprintf( $linkpatt, get_permalink( $q_obj ), esc_html( $q_obj->post_title ) ) . $pg_end ) : esc_html( $q_obj->post_title );
		} elseif ( is_404() ) {
			$out = $loc->_404;
		} elseif ( is_search() ) {
			$out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
		} elseif ( is_author() ) {
			$tit = sprintf( $loc->author, esc_html( $q_obj->display_name ) );
			$out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
		} elseif ( is_year() || is_month() || is_day() ) {
			$y_url = get_year_link( $year = get_the_time( 'Y' ) );

			if ( is_year() ) {
				$tit = sprintf( $loc->year, $year );
				$out = ( $paged_num ? sprintf( $linkpatt, $y_url, $tit ) . $pg_end : $tit );
			} // month day
			else {
				$y_link = sprintf( $linkpatt, $y_url, $year );
				$m_url  = get_month_link( $year, get_the_time( 'm' ) );

				if ( is_month() ) {
					$tit = sprintf( $loc->month, get_the_time( 'F' ) );
					$out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
				} elseif ( is_day() ) {
					$m_link = sprintf( $linkpatt, $m_url, get_the_time( 'F' ) );
					$out    = $y_link . $sep . $m_link . $sep . get_the_time( 'l' );
				}
			}
		} // Древовидные записи
		elseif ( is_singular() && $ptype->hierarchical ) {
			$out = $this->_add_title( $this->_page_crumbs( $post ), $post );
		} // Таксы, плоские записи и вложения
		else {
			$term = $q_obj; // таксономии

			// определяем термин для записей (включая вложения attachments)
			if ( is_singular() ) {
				// изменим $post, чтобы определить термин родителя вложения
				if ( is_attachment() && $post->post_parent ) {
					$save_post = $post; // сохраним
					$post      = get_post( $post->post_parent );
				}

				// учитывает если вложения прикрепляются к таксам древовидным - все бывает :)
				$taxonomies = get_object_taxonomies( $post->post_type );
				// оставим только древовидные и публичные, мало ли...
				$taxonomies = array_intersect( $taxonomies, get_taxonomies( [
					'hierarchical' => true,
					'public'       => true,
				] ) );

				if ( $taxonomies ) {
					// сортируем по приоритету
					if ( ! empty( $arg->priority_tax ) ) {

						usort( $taxonomies, static function ( $a, $b ) use ( $arg ) {
							$a_index = array_search( $a, $arg->priority_tax );
							if ( $a_index === false ) {
								$a_index = 9999999;
							}

							$b_index = array_search( $b, $arg->priority_tax );
							if ( $b_index === false ) {
								$b_index = 9999999;
							}

							return ( $b_index === $a_index ) ? 0 : ( $b_index < $a_index ? 1 : - 1 ); // меньше индекс - выше
						} );
					}

					// пробуем получить термины, в порядке приоритета такс
					foreach ( $taxonomies as $taxname ) {

						if ( $terms = get_the_terms( $post->ID, $taxname ) ) {
							// проверим приоритетные термины для таксы
							$prior_terms = &$arg->priority_terms[ $taxname ];

							if ( $prior_terms && count( $terms ) > 2 ) {

								foreach ( (array) $prior_terms as $term_id ) {
									$filter_field = is_numeric( $term_id ) ? 'term_id' : 'slug';
									$_terms       = wp_list_filter( $terms, [ $filter_field => $term_id ] );

									if ( $_terms ) {
										$term = array_shift( $_terms );
										break;
									}
								}
							} else {
								$term = array_shift( $terms );
							}

							break;
						}
					}
				}

				// вернем обратно (для вложений)
				if ( isset( $save_post ) ) {
					$post = $save_post;
				}
			}

			// вывод

			// все виды записей с терминами или термины
			if ( $term && isset( $term->term_id ) ) {
				$term = apply_filters( 'kama_breadcrumbs_term', $term );

				// attachment
				if ( is_attachment() ) {
					if ( ! $post->post_parent ) {
						$out = sprintf( $loc->attachment, esc_html( $post->post_title ) );
					} else {
						if ( ! $out = apply_filters( 'attachment_tax_crumbs', '', $term, $this ) ) {
							$_crumbs    = $this->_tax_crumbs( $term, 'self' );
							$parent_tit = sprintf( $linkpatt, get_permalink( $post->post_parent ), get_the_title( $post->post_parent ) );
							$_out       = implode( $sep, [ $_crumbs, $parent_tit ] );
							$out        = $this->_add_title( $_out, $post );
						}
					}
				} // single
				elseif ( is_single() ) {
					if ( ! $out = apply_filters( 'post_tax_crumbs', '', $term, $this ) ) {
						$_crumbs = $this->_tax_crumbs( $term, 'self' );
						$out     = $this->_add_title( $_crumbs, $post );
					}
				} // не древовидная такса (метки)
				elseif ( ! is_taxonomy_hierarchical( $term->taxonomy ) ) {
					// метка
					if ( is_tag() ) {
						$out = $this->_add_title( '', $term, sprintf( $loc->tag, esc_html( $term->name ) ) );
					} // такса
					elseif ( is_tax() ) {
						$post_label = $ptype->labels->name;
						$tax_label  = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
						$out        = $this->_add_title( '', $term, sprintf( $loc->tax_tag, $post_label, $tax_label, esc_html( $term->name ) ) );
					}
				} // древовидная такса (рибрики)
				elseif ( ! $out = apply_filters( 'term_tax_crumbs', '', $term, $this ) ) {
					$_crumbs = $this->_tax_crumbs( $term, 'parent' );
					$out     = $this->_add_title( $_crumbs, $term, esc_html( $term->name ) );
				}
			} // влоежния от записи без терминов
			elseif ( is_attachment() ) {
				$parent      = get_post( $post->post_parent );
				$parent_link = sprintf( $linkpatt, get_permalink( $parent ), esc_html( $parent->post_title ) );
				$_out        = $parent_link;

				// вложение от записи древовидного типа записи
				if ( is_post_type_hierarchical( $parent->post_type ) ) {
					$parent_crumbs = $this->_page_crumbs( $parent );
					$_out          = implode( $sep, [ $parent_crumbs, $parent_link ] );
				}

				$out = $this->_add_title( $_out, $post );
			} // записи без терминов
			elseif ( is_singular() ) {
				$out = $this->_add_title( '', $post );
			}
		}

		// замена ссылки на архивную страницу для типа записи
		$home_after = apply_filters( 'kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype );

		if ( '' === $home_after ) {
			// Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
			if ( $ptype && $ptype->has_archive && ! in_array( $ptype->name, [ 'post', 'page', 'attachment' ] )
			     && ( is_post_type_archive() || is_singular() || ( is_tax() && in_array( $term->taxonomy, $ptype->taxonomies ) ) )
			) {
				$pt_title = $ptype->labels->name;

				// первая страница архива типа записи
				if ( is_post_type_archive() && ! $paged_num ) {
					$home_after = sprintf( $this->arg->title_patt, $pt_title );
				} // singular, paged post_type_archive, tax
				else {
					$home_after = sprintf( $linkpatt, get_post_type_archive_link( $ptype->name ), $pt_title );

					$home_after .= ( ( $paged_num && ! is_tax() ) ? $pg_end : $sep ); // пагинация
				}
			}
		}

		$before_out = sprintf( $linkpatt, home_url(), $loc->home ) . ( $home_after ? $sep . $home_after : ( $out ? $sep : '' ) );

		$out = apply_filters( 'kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg );

		$out = sprintf( $wrappatt, $before_out . $out );

		return apply_filters( 'kama_breadcrumbs', $out, $sep, $loc, $arg );
	}

	function _page_crumbs( $post ) {
		$parent = $post->post_parent;

		$crumbs = [];
		while ( $parent ) {
			$page     = get_post( $parent );
			$crumbs[] = sprintf( $this->arg->linkpatt, get_permalink( $page ), esc_html( $page->post_title ) );
			$parent   = $page->post_parent;
		}

		return implode( $this->arg->sep, array_reverse( $crumbs ) );
	}

	function _tax_crumbs( $term, $start_from = 'self' ) {
		$termlinks = [];
		$term_id   = ( $start_from === 'parent' ) ? $term->parent : $term->term_id;
		while ( $term_id ) {
			$term        = get_term( $term_id, $term->taxonomy );
			$termlinks[] = sprintf( $this->arg->linkpatt, get_term_link( $term ), esc_html( $term->name ) );
			$term_id     = $term->parent;
		}

		if ( $termlinks ) {
			return implode( $this->arg->sep, array_reverse( $termlinks ) );
		}

		return '';
	}

	// добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
	function _add_title( $add_to, $obj, $term_title = '' ) {

		// упростим...
		$arg = &$this->arg;
		// $term_title чиститься отдельно, теги моугт быть...
		$title      = $term_title ?: esc_html( $obj->post_title );
		$show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

		// пагинация
		if ( $arg->pg_end ) {
			$link   = $term_title ? get_term_link( $obj ) : get_permalink( $obj );
			$add_to .= ( $add_to ? $arg->sep : '' ) . sprintf( $arg->linkpatt, $link, $title ) . $arg->pg_end;
		} // дополняем - ставим sep
		elseif ( $add_to ) {
			if ( $show_title ) {
				$add_to .= $arg->sep . sprintf( $arg->title_patt, $title );
			} elseif ( $arg->last_sep ) {
				$add_to .= $arg->sep;
			}
		} // sep будет потом...
		elseif ( $show_title ) {
			$add_to = sprintf( $arg->title_patt, $title );
		}

		return $add_to;
	}

}

/**

 */






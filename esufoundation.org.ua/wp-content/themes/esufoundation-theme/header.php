<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Esufoundation-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body class="flex f-d_column <?php body_class(); ?>">
<?php wp_body_open(); ?>
<div id="page" class="site">
    <script type="text/javascript">
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            if ( '260' == event.detail.contactFormId ) {
                setTimeout(function(){
                    $('#modal_ukr').trigger('click');
                }, 1000);
            }
        }, true );
    </script>
<style>
    .wpcf7-response-output{
        display: none!important;
    }
</style>

    <header id="sticky">
        <div class="boxHeader width-1440 flex j-c_between pd-15 pd-15">
            <div class="boxHeader_left flex a-i_center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="boxLogo" rel="home">
                    <img src="<?php echo carbon_get_theme_option( 'logo_header_imga' . carbon_lang() ); ?>" alt="logo"
                         title="logo" width="100" height="100">
                </a>
                <nav class="menuTop">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
                </nav>
            </div>
            <div class="boxHeader_right flex a-i_center">

                <a href="<?php echo carbon_get_theme_option( 'alink_url_btn_headera' . carbon_lang() ); ?>"
                   class="boxHeader_link inline-flex a-i_center j-c_center">
                    <svg width="27" height="26">
                        <use xlink:href="<?php echo carbon_get_theme_option( 'aicn_btn_headera' . carbon_lang() ); ?>"></use>
                    </svg>
					<?php echo carbon_get_theme_option( 'alink_text_btn_headera' . carbon_lang() ); ?>
                </a>
                <a href="<?php echo carbon_get_theme_option( 'alink_url_btn_header2a' . carbon_lang() ); ?>"
                   class="boxHeader_link inline-flex a-i_center j-c_center">
                    <svg width="26" height="26">
                        <use xlink:href="<?php echo carbon_get_theme_option( 'aicn_btn_header2a' . carbon_lang() ); ?>"></use>
                    </svg>
					<?php echo carbon_get_theme_option( 'alink_text_btn_header2a' . carbon_lang() ); ?>
                </a>
                <ul class="language-chooser f_none">
					<?php pll_the_languages() ?>
                </ul>

                <button class="buttonMenu cmn-toggle-switch2 cmn-toggle-switch__htx2">
                    <span>hamburger</span>
                </button>
            </div>
        </div>

        <div class="mobileMenu">
            <div class="mobileMenu_language inline-flex a-i_center">
                <svg width="18" height="18">
                    <use xlink:href="/wp-content/themes/esufoundation-theme/images/sprite.svg#svg-globe"></use>
                </svg>
                <ul class="language-chooser f_none">
					<?php pll_the_languages() ?>
                </ul>
            </div>
            <nav class="menuTop">
                <ul>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
                </ul>
            </nav>
        </div>

    </header>
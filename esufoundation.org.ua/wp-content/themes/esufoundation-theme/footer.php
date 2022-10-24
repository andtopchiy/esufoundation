<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Esufoundation-theme
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="footerTop width-1440 flex j-c_between pd-15">
            <div class="footerTop_left">
                <div class="footerTop_box flex a-i_end">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footerLogo f_none">
                        <img src="<?php echo carbon_get_theme_option( 'logo_footer_img'.carbon_lang()); ?>" alt="logo" title="logo" width="100" height="100">
                    </a>
                    <div class="footerTop_info">
                        <p><?php echo carbon_get_theme_option( 'logo_footer_text'.carbon_lang()); ?></p>
                        <div class="footerTop_link-2">
                            <a target="_blank" href="<?php echo carbon_get_theme_option( 'link_footer_menu'.carbon_lang()); ?>"><?php echo carbon_get_theme_option( 'text_footer_menu'.carbon_lang()); ?></a>
                            <a target="_blank" href="<?php echo carbon_get_theme_option( 'link2_footer_menu'.carbon_lang()); ?>"><?php echo carbon_get_theme_option( 'text2_footer_menu'.carbon_lang()); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerTop_center">
                <nav class="menuFooter">
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
            <div class="footerTop_right f_none">
                <a href="<?php echo carbon_get_theme_option( 'alink_url_btn_headera'.carbon_lang()); ?>" class="footerTop_link flex a-i_center j-c_center">
                    <svg width="21" height="21"><use xlink:href="/wp-content/themes/esufoundation-theme/images/sprite.svg#svg-helmet"></use></svg>
	                <?php echo carbon_get_theme_option( 'alink_text_btn_headera'.carbon_lang()); ?>
                </a>
                <a href="<?php echo carbon_get_theme_option( 'alink_url_btn_header2a'.carbon_lang()); ?>" class="footerTop_link flex a-i_center j-c_center">
                    <svg width="21" height="21"><use xlink:href="/wp-content/themes/esufoundation-theme/images/sprite.svg#svg-gear"></use></svg>
	                <?php echo carbon_get_theme_option( 'alink_text_btn_header2a'.carbon_lang()); ?>
                </a>
            </div>
        </div>
        <div class="footerBottom width-1440 flex j-c_between pd-15">
            <div class="socialNetworks flex">



                <?php if ( carbon_get_theme_option('active_fb') ) { ?>

                <?php } else {?>

                    <a href="<?php echo carbon_get_theme_option( 'fb_footer_text'.carbon_lang()); ?>" target="_blank" class="flex f_none">
                        <svg width="27" height="27"><use xlink:href="/wp-content/themes/esufoundation-theme/images/sprite.svg#svg-facebook"></use></svg>
                    </a>

	                <?php
	            } ?>


                <?php if ( carbon_get_theme_option('active_inst') ) { ?>

                <?php } else {?>

                    <a href="<?php echo carbon_get_theme_option( 'insta_footer_text'.carbon_lang()); ?>" target="_blank" class="flex f_none">
                        <svg width="26" height="27"><use xlink:href="/wp-content/themes/esufoundation-theme/images/sprite.svg#svg-instagram"></use></svg>
                    </a>

                    <?php
	            } ?>

                <?php if ( carbon_get_theme_option('active_youtube') ) { ?>

                <?php } else {?>

                    <a href="<?php echo carbon_get_theme_option( 'youtube_footer_text'.carbon_lang()); ?>" target="_blank" class="flex f_none">
                        <svg width="27" height="27"><use xlink:href="/wp-content/themes/esufoundation-theme/images/sprite.svg#svg-youtube"></use></svg>
                    </a>

                    <?php
	            } ?>

            </div>
            <div class="footerBottom_right">
                <p class="footer-text"><?php echo carbon_get_theme_option( 'work_time_footer_text'.carbon_lang()); ?></p>
                <div class="footerBottom_item">
                    <p class="footer-text">
                        <a href="tel:<?php echo carbon_get_theme_option( 'phone_footer_text'.carbon_lang()); ?>"><?php echo carbon_get_theme_option( 'phone_footer_text'.carbon_lang()); ?></a>
                    </p>
                    <p class="footer-text">
                        <a href="mailto:<?php echo carbon_get_theme_option( 'mail_footer_text'.carbon_lang()); ?>"><?php echo carbon_get_theme_option( 'mail_footer_text'.carbon_lang()); ?></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footerMobile">
            <div class="footerTop_info">
                <p><?php echo carbon_get_theme_option( 'logo_footer_text'.carbon_lang()); ?></p>
                <div class="footerTop_link-2">
                    <a href="<?php echo carbon_get_theme_option( 'link_footer_menu'.carbon_lang()); ?>"><?php echo carbon_get_theme_option( 'text_footer_menu'.carbon_lang()); ?></a>
                    <a href="<?php echo carbon_get_theme_option( 'link2_footer_menu'.carbon_lang()); ?>"><?php echo carbon_get_theme_option( 'text2_footer_menu'.carbon_lang()); ?></a>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->

<div class="remodal remodalInfo" data-remodal-id="modalaukr">
    <button data-remodal-action="close" class="remodal-close">
        <svg width="14" height="14"><use xlink:href="/wp-content/themes/esufoundation-theme/images/sprite.svg#svg-close"></use></svg>
    </button>
    <p class="remodalInfo_text">Ми зв'яжемося з вами найближчим часом1</p>
    <button data-remodal-action="close" class="remodalInfo_button buttonLink ">Відправити</button>
</div>


<!-- Модальное окно -->
<a href="#modalaukr" id="modal_ukr" style="display: none">Call the modal with data-remodal-id="modal"</a>

<script type="text/javascript">
    document.addEventListener( 'wpcf7mailsent', function( event ) {
            document.getElementById("modal_ukr").click();
    }, true );
</script>
<!-- END Модальное окно -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

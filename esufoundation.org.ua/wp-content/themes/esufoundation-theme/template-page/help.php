<?php
/*
Template Name: help-1 страница
*/

get_header();

?>
<main>

    <div class="boxProjects width-1280 pd-15">
		<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
			kama_breadcrumbs( '' );
		} ?>
        <h1 class="title-h2"><?php echo carbon_get_post_meta( get_the_ID(), 'help_title_main222' ); ?></h1>
        <div class="boxProjects_description description">
            <p><?php echo carbon_get_post_meta( get_the_ID(), 'help_title_main333' ); ?></p>
        </div>
		<?php
		$help1_slider1 = carbon_get_post_meta( get_the_ID(), 'help1_slider' );
		?>
		<?php if ( $help1_slider1 ) : ?>
            <div class="all-sliderIcons">
                <div class="swiper sliderIcons">
                    <div class="swiper-wrapper">
						<?php
						foreach ( $help1_slider1 as $help1_slide ) {
							?>
                            <div class="swiper-slide">
                                <div class="sliderIcons_thumb img-center">
                                    <img data-src="<?php echo wp_get_attachment_image_url( $help1_slide['help_part_slide'], 'full' ) ?>"
                                         src="<?php echo wp_get_attachment_image_url( $help1_slide['help_part_slide'], 'full' ) ?>"
                                         class="swiper-lazy" alt="icons" title="icons" width="100%" height="100%">
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                            </div>
						<?php } ?>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <svg width="18" height="28" viewBox="0 0 18 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0429688 24.71L10.7296 14L0.0429688 3.29L3.33297 0L17.333 14L3.33297 28L0.0429688 24.71Z"/>
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg width="18" height="28" viewBox="0 0 18 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.957 24.71L7.27033 14L17.957 3.29L14.667 0L0.666992 14L14.667 28L17.957 24.71Z"
                              fill="#1E1E1E"/>
                    </svg>
                </div>
            </div>
		<?php endif; ?>
        <div class="linkInfo flex j-c_center">
			<?php
			$help_btn_url11 = get_post_meta( get_the_ID(), '_help_btn_url1', true );
			$monobank_btn   = get_post_meta( get_the_ID(), '_help_mono_btn_text_show', true );
			 ?>

				<?php if ( get_post_meta( get_the_ID(), '_help_btn_text1_show', true ) ) { ?><a
                    href="<?php echo carbon_get_post_meta( get_the_ID(), 'help_btn_url1' ); ?>" target="_blank"
                    class="linkInfo_link buttonLink inline-flex a-i_center j-c_center"><?php echo carbon_get_post_meta( get_the_ID(), 'help_btn_text1' ); ?></a><?php } else {
				} ?>


				<?php if ( get_post_meta( get_the_ID(), '_help_mono_btn_text_show', true ) ) { ?><a
                    href="<?php echo carbon_get_post_meta( get_the_ID(), 'help_mono_btn_url1' ); ?>" target="_blank"
                    class="linkInfo_link buttonLink inline-flex a-i_center j-c_center"><?php echo carbon_get_post_meta( get_the_ID(), 'help_mono_btn_text1' ); ?></a><?php } else {
				} ?>
        </div>
    </div>

    <div class="fond-boxDetails">
        <div class="boxDetails width-1280 pd-15">
            <div class="listDetails flex f_wrap">
                <div class="listDetails_li">
					<?php echo carbon_get_post_meta( get_the_ID(), 'help_uah' ); ?>
                </div>
                <div class="listDetails_li">
					<?php echo carbon_get_post_meta( get_the_ID(), 'help_usd' ); ?>
                </div>
                <div class="listDetails_li">
					<?php echo carbon_get_post_meta( get_the_ID(), 'help_eur' ); ?>
                </div>
            </div>
        </div>
    </div>
    </div>
	<?php
	$help1_stat1 = carbon_get_post_meta( get_the_ID(), 'crb_slider' );
	?>
	<?php if ( $help1_stat1 ) : ?>
        <div class="boxStatistics width-1280 pd-15">
            <h2 class="title-h2"><?php echo carbon_get_post_meta( get_the_ID(), 'help_send_titl1e' ); ?></h2>
            <div class="listStatistics flex f_wrap j-c_center">
				<?php
				foreach ( $help1_stat1 as $help1_sta1 ) {
					?>
                    <div class="listStatistics_li">
						<?php if ( $help1_sta1['help_show_utl'] ) { ?>

                            <a href="<?php echo $help1_sta1['link_help']; ?>" class="listStatistics_thumb img-center">
                                <img class="lazy"
                                     data-src="<?php echo wp_get_attachment_image_url( $help1_sta1['photo_help'], 'full' ) ?>"
                                     src="<?php echo wp_get_attachment_image_url( $help1_sta1['photo_help'], 'full' ) ?>"
                                     width="100" height="100">
                            </a>

						<?php } else { ?>
                            <span class="listStatistics_thumb img-center">
                                <img class="lazy"
                                     data-src="<?php echo wp_get_attachment_image_url( $help1_sta1['photo_help'], 'full' ) ?>"
                                     src="<?php echo wp_get_attachment_image_url( $help1_sta1['photo_help'], 'full' ) ?>"
                                     width="100" height="100">
                            </span>
						<?php } ?>

                        <h3 class="listStatistics_title">
							<?php if ( $help1_sta1['help_show_utl'] ) { ?>

                                <a href="<?php echo $help1_sta1['link_help']; ?>"><?php echo $help1_sta1['title_help']; ?></a>

							<?php } else { ?>
								<?php echo $help1_sta1['title_help']; ?>
							<?php } ?>

                        </h3>
                        <p><?php echo $help1_sta1['desc_help']; ?></p>
                    </div>
				<?php } ?>

            </div>
        </div>
	<?php endif; ?>

    <div class="fond-boxInfo">
        <div class="width-1280 boxInfo pd-15">
            <h2 class="title-h2"><?php echo carbon_get_post_meta( get_the_ID(), 'help_send_title' ); ?></h2>
            <div class="boxInfo_description description intend-0">
				<?php echo carbon_get_post_meta( get_the_ID(), 'help_send_desc' ); ?>
            </div>
            <div class="listDocuments">
                <p><a href="<?php echo carbon_get_post_meta( get_the_ID(), 'help_send_zrazok_ul' ); ?>"
                      target="_blank"><?php echo carbon_get_post_meta( get_the_ID(), 'help_send_zrazok_title' ); ?></a>
                </p>
                <p><a href="<?php echo carbon_get_post_meta( get_the_ID(), 'help_send_form_order_url' ); ?>" download
                      target="_blank"><?php echo carbon_get_post_meta( get_the_ID(), 'help_send_form_order_title' ); ?></a>
                </p>
            </div>
        </div>
    </div>
	<?php
	$crb_faqs = carbon_get_post_meta( get_the_ID(), 'crb_faq' );
	?>
	<?php if ( $crb_faqs ) : ?>
        <div class="boxQuestions width-1280 pd-15">
            <h2 class="title-h2"><?php echo carbon_get_post_meta( get_the_ID(), 'faq_titl1e' ); ?></h2>
            <div class="listQuestions">
				<?php
				foreach ( $crb_faqs as $crb_faq_item ) {
					?>
                    <div class="listQuestions_li">
                        <div class="listQuestions_top">
                            <h3 class="listQuestions_title"><?php echo $crb_faq_item['faq_qest']; ?></h3>
                            <span class="listQuestions_button"></span>
                        </div>
                        <div class="listQuestions_bottom description colorWhite intend-0">
                            <p><?php echo $crb_faq_item['faq_ans']; ?></p>
                        </div>
                    </div>
				<?php } ?>
            </div>
        </div>
	<?php endif; ?>


	<?php
	$crb_sls = carbon_get_post_meta( get_the_ID(), 'about_btn_bottom_blocka' );
	?>
	<?php if ( $crb_sls ) : ?>
        <div class="swiper sliderCorusel width-1440">
            <div class="swiper-wrapper">
				<?php
				foreach ( $crb_sls as $crb_sl ) {
					?>
                    <div class="swiper-slide">
                        <div class="sliderCorusel_thumb img-center">
                            <img data-src="<?php echo wp_get_attachment_image_url( $crb_sl['url_btn_about'], 'full' ) ?>"
                                 src="<?php echo wp_get_attachment_image_url( $crb_sl['url_btn_about'], 'full' ) ?>"
                                 class="swiper-lazy" alt="icons" title="icons" width="100%" height="100%">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                    </div>
				<?php } ?>
            </div>
        </div>
	<?php endif; ?>


</main>
<?php
the_content();
?>
<?php
get_footer();
?>

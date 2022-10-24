<?php
/*
Template Name: ПРОЄКТИ сторинка
*/

get_header();

?>
<main>


	<?php
	$abouts = carbon_get_post_meta( get_the_ID(), 'about_textimg_main' );

	if ( $abouts ) : ?>
        <div class="boxAbout width-1280 pd-15">
	        <?php if ( function_exists( 'kama_breadcrumbs' ) ) {
		        kama_breadcrumbs( '' );
	        } ?>
			<?php foreach ( $abouts as $about ) { ?>
                <h2 class="title-h2"><?php echo $about['about_title'] ?></h2>

                <div class="boxAbout_description description">
					<?php echo $about['about_desc'] ?>
                </div>
                <div class="listAbout flex f_wrap">

					<?php foreach ( $about['photos_abouts'] as $about_img ) {
						?>
                        <div class="listAbout_li">
                            <div class="listAbout_thumb img-position">
                                <img class="lazy"
                                     data-src="<?php echo wp_get_attachment_image_url( $about_img, 'full' ) ?>"
                                     src="<?php echo wp_get_attachment_image_url( $about_img['photo'], 'full' ) ?>"
                                     width="100" height="100">
                            </div>
                        </div>
					<?php } ?>
					<?php echo wp_get_attachment_image( $about['photos_abouts'], 'full' ) ?>
                </div>
                <?php
				if ( $about['abt_show_btn'] ){?>
                    <a href="<?php echo $about['link_url_btn_about'] ?>"
                       class="boxAbout_link buttonLink flex a-i_center j-c_center"><?php echo $about['link_text_btn_about'] ?></a>
					<?php
				}
				else {	}

                ?>

			<?php } ?>
        </div>
	<?php endif; ?>

	<?php
	$project_title = get_post_meta( get_the_ID(), '_project_title', true );
	$projects = carbon_get_post_meta( get_the_ID(), 'project_img_main' );
	?>
	<?php if ( $projects ) : ?>
        <div class="boxProjects width-1280 pd-15">
            <h2 class="title-h2"><?php echo esc_html( $project_title ) ?></h2>
            <div class="listProjects flex f_wrap">
				<?php
				foreach ( $projects as $project ) {
					?>
                    <div class="listProjects_li">
                        <div class="listProjects_thumb img-center">
                            <img class="lazy"
                                 data-src="<?php echo wp_get_attachment_image_url( $project['photo_project'], 'full' ) ?>"
                                 src="<?php echo wp_get_attachment_image_url( $project['photo_project'], 'full' ) ?>"
                                 width="100%" height="100%">
                        </div>
                        <div class="listProjects_pd">
                            <h3 class="listProjects_title"><?php echo $project['project_titlemain'] ?></h3>
                            <p><?php echo $project['project_desc_main1'] ?></p>
                            <a href="<?php echo $project['link_url_btn'] ?>"
                               class="listProjects_link buttonLink flex a-i_center j-c_center"><?php echo $project['link_text_btn'] ?></a>
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

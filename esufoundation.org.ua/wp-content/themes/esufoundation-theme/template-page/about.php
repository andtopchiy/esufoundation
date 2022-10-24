<?php
/*
Template Name: ПРО ФОНД сторинка
*/

get_header();

?>
<main>

    <div class="boxProjects width-1280 pd-15">
		<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
			kama_breadcrumbs( '' );
		} ?>


		<?php
		$about_title1 = get_post_meta( get_the_ID(), '_about_title11', true );
		?>
        <h1 class="title-h2"><?php echo carbon_get_post_meta( get_the_ID(), 'about_textimg_main1' ); ?></h1>
        <div class="boxProjects_description description">
			<?php echo carbon_get_post_meta( get_the_ID(), 'about_textimg_main2' ); ?>
        </div>

		<?php
		$projects2 = carbon_get_post_meta( get_the_ID(), 'project_img_main2' );
		?>
		<?php if ( $projects2 ) : ?>
            <div class="listTeam flex f_wrap j-c_center">
				<?php
				foreach ( $projects2 as $project2 ) {
					?>
                    <div class="listTeam_li">
                        <div class="listTeam_thumb">
                            <img class="lazy"
                                 data-src="<?php echo wp_get_attachment_image_url( $project2['photo_project2'], 'full' ) ?>"
                                 src="<?php echo wp_get_attachment_image_url( $project2['photo_project2'], 'full' ) ?>"
                                 width="100" height="100">
                        </div>
                        <h3 class="listTeam_name"><?php echo $project2['project_titlemain2'] ?></h3>
                        <p><?php echo $project2['link_url_btn2'] ?><p>
                    </div>
				<?php } ?>
            </div>
		<?php endif; ?>

		<?php
		$projects3 = carbon_get_post_meta( get_the_ID(), 'project_img_main3' );
		?>
		<?php if ( $projects3 ) : ?>
			<?php
			foreach ( $projects3 as $project3 ) {
				?>
                <div class="all-logoTeam">
					<?php if ( $project3['show_img_cur'] ) { ?>
                        <div class="logoTeam img-center">
                            <img class="lazy"
                                 data-src="<?php echo wp_get_attachment_image_url( $project3['photo_project3'], 'full' ) ?>"
                                 src="<?php echo wp_get_attachment_image_url( $project2['photo_project3'], 'full' ) ?>"
                                 width="100" height="100">
                        </div>
					<?php } else {
					} ?>

                    <p class="logoTeam_text"><?php echo $project2['project_titlemain3'] ?></p>
                </div>

                <div class="listTeam_description description">
                    <p><?php echo $project2['link_url_btn3'] ?></p>
                </div>
			<?php } ?>
		<?php endif; ?>

		<?php
		$document_items1 = carbon_get_post_meta( get_the_ID(), 'document_items' );
		?>
		<?php if ( $document_items1 ) : ?>
            <div class="listDocuments">
				<?php
				foreach ( $document_items1 as $document_item1 ) {
					?>
                    <p><a href="<?php echo $document_item1['url_document'] ?>"
                          target="_blank"><?php echo $document_item1['name_document'] ?></a></p>

				<?php } ?>
            </div>
		<?php endif; ?>

		<?php
		$about_btn_bottom_block1 = carbon_get_post_meta( get_the_ID(), 'about_btn_bottom_block' );
		?>
		<?php if ( $about_btn_bottom_block1 ) : ?>
			<?php
			foreach ( $about_btn_bottom_block1 as $about_btn_bottom_bloc1 ) {
				?>
                <div class="boxLink inline-flex a-i_center f_wrap">
                    <p><?php echo $about_btn_bottom_bloc1['about_btn_text_bottom'] ?></p>
                    <a href="<?php echo $about_btn_bottom_bloc1['url_btn_about'] ?>"
                       class="boxLink_link buttonLink inline-flex a-i_center j-c_center"><?php echo $about_btn_bottom_bloc1['name_btn_bottom_about'] ?></a>
                </div>
			<?php } ?>
		<?php endif; ?>
    </div>


</main>
<?php
the_content();
?>
<?php
get_footer();
?>

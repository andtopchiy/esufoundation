<?php
/*
Template Name: Партнерство сторинка
*/

get_header();

?>
<main>

	<?php
	$partnership_title_main1 = carbon_get_post_meta( get_the_ID(), 'partnership_title_main' );
	$partnership_desc_main1 = carbon_get_post_meta( get_the_ID(), 'partnership_desc_main' );
	?>
    <div class="boxProjects width-1280 pd-15">
	    <?php if ( function_exists( 'kama_breadcrumbs' ) ) {
		    kama_breadcrumbs( '' );
	    } ?>
        <h1 class="title-h2"><?php echo carbon_get_post_meta( get_the_ID(), 'partnership_title_main' ); ?></h1>
        <div class="boxProjects_description description">
	        <?php echo carbon_get_post_meta( get_the_ID(), 'partnership_desc_main' ); ?>
        </div>
    </div>

	<?php echo apply_shortcodes( '[cf7form cf7key="partership"]' ); ?>
	<?php
	$partnership_title_list1 = carbon_get_post_meta( get_the_ID(), 'partnership_title_list' );
	?>
    <div class="ourPartners width-1280 pd-15">
        <h2 class="title-h2"><?php echo carbon_get_post_meta( get_the_ID(), 'partnership_title_main1' ); ?></h2>
        <div class="listPartners flex f_wrap a-i_center">
	        <?php
	        $partnership_title_list3_ = carbon_get_post_meta( get_the_ID(), 'partnership_title_list3' );
	        ?>
	        <?php if ( $partnership_title_list3_ ) : ?>
	        <?php
	        foreach ( $partnership_title_list3_ as $partnership_title_list3__ ) {
	        ?>
            <div class="listPartners_li">
                <div class="listPartners_thumb img-center">
                    <img class="lazy" data-src="<?php echo wp_get_attachment_image_url( $partnership_title_list3__['partnership_title_list111'], 'full' ) ?>" src="<?php echo wp_get_attachment_image_url( $partnership_title_list3__['partnership_title_list111'], 'full' ) ?>" width="100%"
                         height="100%">
                </div>
            </div>
	        <?php } ?>
	        <?php endif; ?>
        </div>
    </div>

</main>
<?php
the_content();
?>
<?php
get_footer();
?>

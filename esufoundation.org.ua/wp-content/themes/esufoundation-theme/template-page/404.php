<?php
/*
Template Name: 404 сторинка
*/

get_header();

?>
<main>
	<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
    <div class="boxProjects width-1280 pd-15">
        <article id="post-0">
	        <?php
	        the_content();
	        ?>
            <h1><?php echo carbon_get_post_meta( get_the_ID(), 'url_btn_about222' ); ?></h1><br>
            <p><?php echo carbon_get_post_meta( get_the_ID(), 'url_btn_about333' ); ?></p>
        </article>
    </div>

</main>
<?php
get_footer();
?>

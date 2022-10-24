<?php
/*
Template Name: Отчеты страница
*/

get_header();

?>
<main>
    <div class="boxReporting width-1280 pd-15">
		<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
			kama_breadcrumbs( '' );
		} ?>
        <h1 class="title-h2"><?php echo carbon_get_post_meta( get_the_ID(), 'partnership_title_main222' ); ?></h1>
        <div class="listReporting_scroll">
            <ul class="listReporting flex">
				<?php
				$year_comps = carbon_get_post_meta( get_the_ID(), 'year_comp' );
				?>
				<?php if ( $year_comps ) : ?>
					<?php
					foreach ( $year_comps as $year_comp_item ) {
						?>
                        <li <?php if ( $year_comp_item['firsty'] ) { ?> class="active" <?php } else {
						} ?>><?php echo $year_comp_item['next_ye']; ?></li>
                        </li>
					<?php } ?>
				<?php endif; ?>
            </ul>
        </div>

		<?php if ( $year_comps ) : ?>
			<?php
			foreach ( $year_comps as $year_comp_item1 ) {
				?>
                <div class="listReporting_content <?php if ( $year_comp_item1['firsty'] ) { ?> active <?php } else {
				} ?>">
                    <div class="listMonths flex f_wrap j-c_between">
						<?php
						foreach ( $year_comp_item1['month_compa'] as $year_comp_item_m ) {
							?>
                            <div class="listMonths_li <?php if ( $year_comp_item_m['active_btnm1'] ) { ?> <?php } else {?>no-active <?php
                            } ?>">
                                <a href="<?php echo $year_comp_item_m['month_ad_url']; ?>"
                                   target="_blank"><?php echo $year_comp_item_m['month_ad']; ?></a>
                            </div>


						<?php } ?>

                    </div>
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

<?php /* Template Name: Home Template */ ?>

<?php get_header();
?>
    <div class="container">
        <div class="row__heading">
            <div class="row__heading-col-sort">
                <p><?php _e('Sort Alphabetically')?></p>
            </div>
            <div class="row__heading-col-text"><h1><?php _e('BEST SPORTS BETTING
                    SITES')?></h1></div>
            <div class="row__heading-col-view">
                <p><?php _e('Change View')?>

                </p>
                <label class="switch">

                    <input type="checkbox">
                    <span class="slider round"></span>

                </label>
            </div>
        </div>
		<?php get_template_part( 'template-parts/home', 'into' );

		$args = array(
			'post_type'      => 'rekki_sports_sites',
			'post_status'    => 'publish',
			'posts_per_page' => 5,
			'orderby'        => 'title',
			'order'          => 'ASC',
		);

		$loop = new WP_Query( $args );

		?>
        <div class="row__sites grid" id="damn">
			<?php
			while ( $loop->have_posts() ) : $loop->the_post();
				get_template_part( 'template-parts/sites' );
			endwhile;
			?>
        </div>
		<?php
		wp_reset_postdata();
		?>
        <a href="#">View All Sports Betting Sites</a>
    </div>
<?php
get_footer();
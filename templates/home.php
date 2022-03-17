<?php /* Template Name: Home Template */ ?>

<?php get_header();
?>
    <div class="container home-wrapper" >
        <div class="row__heading">
            <div class="row__heading-col-sort">
                <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">

                    <label>
                        <input type="radio" name="date" value="ASC" selected="selected" style="display: none" />
                        <p><?php _e( 'Sort Alphabetically' ) ?></p>

                    </label>


                    <input type="hidden" name="action" value="myfilter">
                </form>
            </div>
            <div class="row__heading-col-text">
                <img src="<?= get_site_url() ?>/wp-content/uploads/2022/03/Flag_of_Canada.svg"
                     alt="">
                <h1><?php _e( 'BEST SPORTS BETTING
                    SITES' ) ?></h1></div>
            <div class="row__heading-col-view">
                <p><?php _e( 'Change View' ) ?>

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
			'orderby'        => 'date',
			'order'          => 'DESC',
		);

		$loop = new WP_Query( $args );

		?>
        <div id="response"></div>


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
        <a href="#" class="view-more">View All Sports Betting Sites</a>
    </div>
    <footer class="img">
        <img src="<?= get_site_url() ?>/wp-content/uploads/2022/03/Bottom-Screenshot.png"
             alt="">
    </footer>
<?php
get_footer();
<div class="row__sites-col">
    <div class="row__sites-col__wrapper">
        <a href="#" class="overlay"></a>
        <div class="col__wrapper-logo ">
			<?php the_post_thumbnail(); ?>
        </div>
        <div class="col__wrapper-rating inner">
            <div class="col__wrapper-rating-review">
                <div class="col__wrapper-rating-review-star">
                    <img src="<?= get_site_url()?>/wp-content/uploads/2022/03/Star.svg"
                         alt=""><img src="<?= get_site_url()?>/wp-content/uploads/2022/03/Star.svg"
                         alt=""><img src="<?= get_site_url()?>/wp-content/uploads/2022/03/Star.svg"
                         alt=""><img src="<?= get_site_url()?>/wp-content/uploads/2022/03/Star.svg"
                         alt=""><img src="<?= get_site_url()?>/wp-content/uploads/2022/03/Star.svg"
                         alt="">

                </div>

                <a href="#12"
                   class="col__wrapper-rating-review-text"><?php _e( 'Read Review' ) ?></a>
            </div>
        </div>
        <div class="col__wrapper-list-gap"></div>

        <div class="col__wrapper-text ">
            <p>
                <span class="bold">       <?php _e( '- Exclusive -' ) ?></span>
                <br>
                <span>        <?php _e( 'Bonus up to' ) ?><span
                            class="bold"><?php _e( ' $200' ) ?></span></span>
            </p></div>
        <div class="col__wrapper-button  inner">
            <a href="#1"><?php _e( 'Play now' ) ?></a>
        </div>
    </div>
</div>
<div class="row__sites-col">
    <div class="row__sites-col__wrapper">
        <a href="#" class="overlay"></a>
        <div class="col__wrapper-logo inner">
            <a href="<?php the_permalink()?>"> <?php the_post_thumbnail(); ?></a>
        </div>
        <div class="col__wrapper-rating inner">
            <div class="col__wrapper-rating-review">
                <div class="col__wrapper-rating-review-star">
                    <img src="<?= get_site_url() ?>/wp-content/uploads/2022/03/Star.svg"
                         alt=""><img
                            src="<?= get_site_url() ?>/wp-content/uploads/2022/03/Star.svg"
                            alt=""><img
                            src="<?= get_site_url() ?>/wp-content/uploads/2022/03/Star.svg"
                            alt=""><img
                            src="<?= get_site_url() ?>/wp-content/uploads/2022/03/Star.svg"
                            alt=""><img
                            src="<?= get_site_url() ?>/wp-content/uploads/2022/03/Star.svg"
                            alt="">

                </div>

                <a href="<?php the_permalink();?>"
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
            <span><?php _e( 'Play now' ) ?>   </span> <img
                        src="http://localhost:8888/visca_web/wp-content/uploads/2022/03/Vector.svg"
                        alt="">
        </div>
    </div>
</div>
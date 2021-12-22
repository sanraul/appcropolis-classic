<?php

$args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 3, 
);
 
$recommended = get_posts( $args );

?>


<div class="portfolio-related-post pb--100 bg__white">
    <div class="container">
        <div class="section__title text-center mb--50">
            <h2 class="title__line">Related Work</h2>
        </div>
        <div class="tab-content portfolio-carousel-style jump">
            <div class="related-portfolio">
                <div class="row">
                    <div class="portfolio-slider-active owl-carousel">

                        <?php
                        foreach ($recommended as $key => $post_rec) {

                            $attachment_id = get_post_thumbnail_id( $post_rec->ID);
                            $post_thumbnail = wp_get_attachment_url($attachment_id, true, false, true);
                            $post_permalink = esc_url( get_permalink( $post_rec->ID) );
                            $cat_names = get_post_categories($post_rec->ID, 'name');

                            ?>
                            <div class="single-portfolio mb--30">
                                <div class="portfolio-img-title">
                                    <a href="<?= $post_permalink ?>">
                                        <img src="<?= $post_thumbnail ?>" alt="<?= $post_rec->post_title ?>" />
                                    </a>
                                    <div class="portfolio-title hover-title">
                                        <h3><a href="<?= $post_permalink ?>"><?= $post_rec->post_title ?></a></h3>
                                        <span><?= $cat_names ?></span>
                                    </div>
                                </div>					
                            </div>	
                            <?php
                        }			
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
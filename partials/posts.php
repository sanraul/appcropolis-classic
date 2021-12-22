


<div class="row grid">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                $cat = 'cat' . rand(1, 5);
                $post_permalink = esc_url( get_permalink( $post->ID) );
                $attachment_id = get_post_thumbnail_id( $post->ID);
                $post_thumbnail = wp_get_attachment_url($attachment_id, true, false, true);
                $cat_classes = get_post_categories($post->ID, 'slug');
                $cat_names = get_post_categories($post->ID, 'name');

                ?>
                <div class="col-lg-4 col-md-6 col-12 grid-item <?= $cat_classes ?>">
                    <div class="single-portfolio mb--30">
                        <div class="portfolio-img-title">
                            <a href="<?= $post_permalink ?>">
                                <img src="<?= $post_thumbnail ?>" alt="<?= $post->post_title ?>" />
                            </a>
                            <div class="portfolio-title hover-title">
                                <h3><a href="<?= $post_permalink ?>"><?= $post->post_title ?></a></h3>
                                <span><?= $cat_names ?></span>
                            </div>
                        </div>					
                    </div>				
                </div>
                <?php
            }
        }
        ?>	
</div>	
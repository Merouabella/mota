<div class="banner">
    <h1>Photographe event</h1>
    <?php
    $photo_args = array(
        'post_type' => 'photos',
        'posts_per_page' => 1,
        'orderby' => 'rand',
    );

    $photo_query = new WP_Query($photo_args);

    if ($photo_query->have_posts()) {
        while ($photo_query->have_posts()) {
            $photo_query->the_post();
            echo '<div class="hero-image" style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] . ');"></div>';
        }
        wp_reset_postdata();
    }
    ?>
</div>
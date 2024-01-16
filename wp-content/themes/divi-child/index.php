<?php
get_header();
?>
<div id="main-content">
    <div class="container">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'products',
            'posts_per_page' => 6,
            'order' => 'desc',
            'orderby' => 'date',
            'post_status' => 'publish',
        ));
        if ($query->have_posts()) :
            ?>
            <div class="mm_section" id="post_count">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="mm_section_row">
                        <div class="mm_section_row_img my_img"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                        <div class="content">
                            <div class="mm_title">
                                <a href="<?php echo get_permalink() ?>">
                                    <h2><?php echo get_the_title() ?></h2>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php
get_footer();
?>
<section class="programmes">
    <div class="my-1 my-sm-3 py-3">
        <div class="container">
            <h3 class="my-1 text-center"><?php echo get_sub_field('title'); ?></h3>
            <?php

            $programmes = get_sub_field('programmes');
            if ($programmes) : ?>
                <div class="programmes row mb-2">
                    <?php foreach ($programmes as $post): setup_postdata($post); ?>
                        <div class="col-md-3 gy-1">
                            <?php require get_template_directory() . '/item-programme.php'; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; wp_reset_postdata(); ?>

        </div>
    </div>
</section>
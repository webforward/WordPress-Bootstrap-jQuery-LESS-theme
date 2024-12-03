<section class="footer_logos my-2 my-sm-3">
    <div class="container">
        <div class="text-center">
            <h3 class="mt-1 mb-2"><?php echo get_field('fl_title', 'option'); ?></h3>
        </div>

    </div>

    <?php
    $images = get_field('fl_logos', 'option');
    $size = 'logos';
    if ($images): ?>
        <div class="images slider logos mt-2">
            <?php foreach ($images as $image_id): ?>
                <div class="image col-md-2">
                    <?php echo wp_get_attachment_image($image_id, $size); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>
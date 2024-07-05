<div class="my-2 my-sm-5">
    <div class="container">
        <div class="text-center">
            <h3 class="my-1"><?php echo get_sub_field('title'); ?></h3>
            <div class="my-1 editable-content">
                <?php echo get_sub_field('text'); ?>
            </div>

        </div>
    </div>

    <?php
    $images = get_sub_field('images');
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
</div>
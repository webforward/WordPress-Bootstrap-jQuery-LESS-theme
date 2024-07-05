<div class="my-2 my-sm-5">
    <div class="container">
        <h3 class="mb-1"><?php echo get_sub_field('title'); ?></h3>
        <div class="row">
            <div class="col-lg-4">
                <div class="my-1 editable-content">
                    <?php echo get_sub_field('text'); ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="my-1 image">
                    <?php echo wp_get_attachment_image( get_sub_field('image'), 'large' ); ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="my-1 editable-content">
                    <?php echo get_sub_field('right_content'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
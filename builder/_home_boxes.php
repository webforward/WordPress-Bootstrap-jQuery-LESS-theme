<div class="my-2 my-sm-5">
    <div class="container">
        <div class="row">
            <?php if (have_rows('home_boxes')): ?>
                <?php while (have_rows('home_boxes')):
                    the_row();
                    $link = get_sub_field('link');
                    ?>
                    <div class="col-lg-4">
                        <a class="box" href="<?php echo $link['url'] ?? ''; ?>"
                           target="<?php echo $link['target'] ?? ''; ?>">
                            <h4 class="m-0 <?php echo get_sub_field('title_class'); ?>"><?php echo get_sub_field('title'); ?></h4>
                            <?php if (get_sub_field('image')) : ?>
                                <div class="image">
                                    <?php echo wp_get_attachment_image(get_sub_field('image'), 'half'); ?>
                                </div>
                            <?php endif; ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
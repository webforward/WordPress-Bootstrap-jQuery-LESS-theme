<ul class="social-icons">
    <?php while (have_rows('network', 'option')): the_row(); ?>
    <li>
        <a title="Click to visit our <?php echo get_sub_field('name'); ?> page" target="_blank" href="<?php echo get_sub_field('link'); ?>">
            <?php echo get_sub_field('svg'); ?>
        </a>
    </li>
    <?php endwhile; ?>
</ul>
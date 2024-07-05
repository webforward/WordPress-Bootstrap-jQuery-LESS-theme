<?php
if (get_option('header_bar', 'option')) {
    ?>
    <div class="topbar text-center">
        <a href="<?php echo get_field('header_bar_text_1_link', 'option'); ?>">
            <?php echo get_field('header_bar_text_1', 'option'); ?>
        </a>
        |
        <a href="<?php echo get_field('header_bar_text_2_link', 'option'); ?>">
            <?php echo get_field('header_bar_text_2', 'option'); ?>
        </a>
    </div>
    <?php
}
?>
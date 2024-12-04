<?php
/*
Template Name: Smart World
*/

// Zoho SalesIQ
remove_action('wp_footer', 'ld_embedchat', 5);

// Poj Accessibility
remove_action('wp_footer', array('Pojo_A11y_Frontend', 'print_skip_to_content_link'), 20);
remove_action('wp_footer', array('Pojo_A11y_Frontend', 'print_toolbar'), 30);
require 'header-blank.php';
if (have_posts()) : while (have_posts()) : the_post();

    ?>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                    $image = get_field('logo');
                    $image = wp_get_attachment_image_src($image, 'full');
                    ?>
                    <img class="logo" src="<?php echo $image[0]; ?>" alt="Smart World"/>
                    <p><?php the_field('intro'); ?></p>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <?php
                    $image = get_field('right_icon');
                    $image = wp_get_attachment_image_src($image, 'full');
                    ?>
                    <img class="right_image alignright" src="<?php echo $image[0]; ?>" alt="Smart World"/>
                </div>
            </div>
        </div>
    </div>
    <?php

    if (have_rows('sections')):
        while (have_rows('sections')) : the_row();

            $title = get_sub_field('title');
            $bg_image = get_sub_field('background_image');
            $bg_colour = get_sub_field('background_colour');
            $text_colour = get_sub_field('text_colour');

            $classes = '';
            if ($bg_image || $bg_colour) {
                $classes .= 'bg';
            }

            $styles = '';
            if ($bg_image) {
                $bg_image = wp_get_attachment_image_src($bg_image, 'full');
                $styles .= 'background-image: url(' . $bg_image[0] . ');';
            }
            if ($bg_colour) {
                $styles .= 'background-color: ' . $bg_colour . ';';
            }

            echo '<section class="section ' . $classes . '" style="' . $styles . '">';
            echo '<div class="container">';

            if ($title) {
                echo '<h4 style="color: ' . $text_colour . '">' . $title . '</h2>';
            }


            if (have_rows('buttons')):
                echo '<div class="row">';
                while (have_rows('buttons')) : the_row();

                    $type = get_sub_field('type');
                    $text = get_sub_field('text');
                    $link = get_sub_field('link');
                    $icon = get_sub_field('icon');
                    $bg_image = get_sub_field('background_image');
                    $bg_colour = get_sub_field('background_colour');
                    $text_colour = get_sub_field('text_colour');

                    $styles = '';
                    if ($bg_image) {
                        $bg_image = wp_get_attachment_image_src($bg_image, 'full');
                        $styles .= 'background-image: url(' . $bg_image[0] . ');';
                    }
                    if ($bg_colour) {
                        $styles .= 'background-color: ' . $bg_colour . ';';
                    }
                    if ($text_colour) {
                        $styles .= 'color: ' . $text_colour . ';';
                    }

                    $icon_image = wp_get_attachment_image_src($icon, 'full');

                    switch ($type) {
                        case 'large':
                            echo '<div class="col-12 col-md-6">';
                            echo '<a target="_blank" href="' . $link . '" class="button button-large" style="' . $styles . '">';
                            echo '<span class="grad"></span>';
                            echo '<span class="text">'.$text.'</span>';
                            echo '</a>';
                            echo '</div>';
                            break;
                        case 'medium':
                            echo '<div class="col-12 col-md-4">';
                            echo '<a target="_blank" href="' . $link . '" class="button button-medium" style="' . $styles . '">';
                            echo '<span class="grad"></span>';
                            echo '<span class="text">'.$text.'</span>';
                            echo '</a>';
                            echo '</div>';
                            break;
                        case 'small':
                            echo '<div class="col-6 col-md-2">';
                            echo '<a target="_blank" href="' . $link . '" class="button button-small" style="' . $styles . '">';
                            echo '<span class="text" style="color: ' . $text_colour . '">' . $text . '</span>';
                            if ($icon) {
                                echo '<div class="icon_container">';
                                echo '<span class="icon" style="background-image: url(' . $icon_image[0] . ');"></span>';
                                echo '</div>';
                            }
                            echo '</a>';
                            echo '</div>';
                            break;
                        case 'icon':
                            echo '<div class="col-4 col-md-2 col-lg-1">';
                            echo '<a data-bs-toggle="tooltip" data-bs-title="' . $text . '" target="_blank" href="' . $link . '" class="button button-icon" style="' . $styles . '">';
                            if ($icon) {
                                echo '<span class="icon" style="background-image: url(' . $icon_image[0] . ');"></span>';
                            }
                            echo '</a>';
                            echo '</div>';
                            break;
                    }


                endwhile;
                echo '</div>';
            endif;

            echo '</div>';
            echo '</section>';

        endwhile;
    endif;

endwhile;
endif;


?>
<section class="feedback">
    <div class="container">
        <div class="feedback">
            <h4><?php the_field('feedback_title'); ?></h4>
            <div><?php the_field('feedback'); ?></div>
        </div>
    </div>
</section>
<?php

require 'footer-blank.php';
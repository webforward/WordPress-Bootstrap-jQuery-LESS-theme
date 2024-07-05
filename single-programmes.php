<?php get_header(); ?>

<?php require 'sections/headline.php'; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container">

        <div class="mb-2 mb-sm-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="image rounded-full mb-2">
                        <?php echo wp_get_attachment_image( get_field('icon'), 'icon' ); ?>
                    </div>
                    <div class="my-1 text-center">
                        <?php
                        $button_field = 'buttons_buttons';
                        require get_template_directory() . '/snippets/buttons.php';
                        ?>
                    </div>
                </div>
                <div class="col-md-7 offset-md-1">

                    <h3 class="h4 mb-1">Apprenticeship Overview:</h3>

                    <div class="editable-content">
                        <?php echo get_field('overview'); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section class="discover_boxes">
        <div class="mb-2 mb-sm-5 overflow">
            <div class="container-fluid py-2 py-sm-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xl-6">
                            <h3><?php
                                $title = get_field('cta_title', 'option');
                                echo str_replace('{{title}}', get_the_title(), $title);
                                ?></h3>
                        </div>
                    </div>

                    <div class="boxes">
                        <?php
                        if (have_rows('cta_boxes', 'option')): ?>
                            <div class="row">
                                <?php while (have_rows('cta_boxes', 'option')): the_row(); ?>
                                    <div class="col-md-6 gy-1">
                                        <div class="box">
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="image mb-1">
                                                    <?php echo wp_get_attachment_image(get_sub_field('icon'), '100x100'); ?>
                                                </div>
                                            <?php endif; ?>

                                            <h3 class="m-0 <?php echo get_sub_field('title_class'); ?>"><?php echo get_sub_field('title'); ?></h3>

                                            <?php if (strlen(get_sub_field('text')) > 20) : ?>
                                                <div class="mt-1 editable-content">
                                                    <?php echo get_sub_field('text'); ?>
                                                </div>
                                            <?php endif; ?>

                                            <div class="mt-1">
                                                <?php
                                                $button_field = 'buttons';
                                                require get_template_directory() . '/snippets/buttons.php';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="related_programmes">
        <div class="my-1 my-sm-3">
            <div class="container">
                <h3>Related Courses:</h3>

                <?php
                $programmes = get_field('related');
                if ($programmes): ?>
                    <div class="programmes row">
                        <?php foreach ($programmes as $post): ?>
                            <div class="col-md-3 gy-1">
                                <?php require get_template_directory() . '/item-programme.php'; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php
                    wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
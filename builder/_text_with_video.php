<?php
$position = get_sub_field('position');
?>
<div class="py-2 py-md-3 bg-color5 overflow-hidden">
    <div class="container position-relative">
        <div class="d-none d-lg-block">
        <div class="row" style="position: absolute; width: 100%; height: 400vh;top:-100vh">
            <div class="bg-color4 col-3 offset-9" style="width: 100vw; "></div>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-6" style="z-index: 1">
                <div class="content">
                    <h1 class="m-0"><?php echo get_sub_field('title'); ?></h1>
                    <div class="my-1 editable-content">
                        <?php echo get_sub_field('text'); ?>
                    </div>

                </div>
            </div>
            <div class="col-lg-6" style="z-index: 1">
                <div class="video mb-1 bg-white">
                    <iframe src="https://player.vimeo.com/video/<?php echo get_sub_field('video'); ?>?badge=0&amp;autopause=0&amp;autoplay=1&amp;loop=1" frameborder="0" allow="autoplay; fullscreen;"></iframe>
                    <script src="https://player.vimeo.com/api/player.js"></script>
                </div>
                <div class="d-none d-lg-flex justify-content-end">
                    <?php
                    $button_field = 'buttons';
                    require get_template_directory() . '/snippets/buttons.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
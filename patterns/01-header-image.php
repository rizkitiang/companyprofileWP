<?php

/**
 * Title: Header Image
 * Slug: webstein-rizki/header-image
 * Categories: webstein-rizki
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-image.jpg","id":2257,"dimRatio":40,"overlayColor":"header-image-overlay","minHeightUnit":"vh","isDark":false,"align":"full","className":"hero-image fullheight"} -->
<div class="wp-block-cover alignfull is-light hero-image fullheight">
    <span aria-hidden="true" class="wp-block-cover__background has-header-image-overlay-background-color has-background-dim-40 has-background-dim"></span>
    <img class="wp-block-cover__image-background wp-image-2257" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-image.jpg" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:group -->
            <div class="wp-block-group">
                <!-- wp:heading {"style":{"typography":{"fontSize":"80px"}},"textColor":"white"} -->
                <h1 class="has-text-align-left has-white-color" style="font-size:80px">
                    <?php esc_html_e('Emergency Plumber Perth ', 'webstein-rizki') ?>
                </h1>
                <!-- /wp:heading -->
                <!-- wp:group -->
                <div class="wp-block-group">
                    <!-- wp:image {"align":"left","id":2093,"width":183,"height":42,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
                    <figure class="wp-block-image alignleft size-full is-resized">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="" class="wp-image-2093" width="183" height="42" />
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"align":"center","placeholder":"<?php esc_html_e('Write title…', 'webstein-rizki') ?>","style":{"spacing":{"margin":{"top":"0"}}},"textColor":"white","fontSize":"large"} -->
                <p class="has-text-align-center has-white-color has-text-color has-large-font-size" style="margin-top:0">
                    <?php esc_html_e('Experience the magic of full site editing', 'webstein-rizki') ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:columns -->



    </div>
</div>
<!-- /wp:cover -->
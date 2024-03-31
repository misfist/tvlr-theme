<?php
/**
 * Title: Newsletter Signup
 * Slug: tvlr/newsletter-signup
 * Categories: call-to-action
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"newsletter-signup","layout":{"type":"default"},"metadata":{"name":"Newsletter Signup"}} -->
<section
    class="wp-block-group alignfull newsletter-signup">
    <!-- wp:columns {,"className":"newsletter-signup__inner"} -->
    <div class="wp-block-columns newsletter-signup__inner">
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:heading -->
            <h2 class="wp-block-heading"><?php _e( 'Subscribe to Receive
                <strong>Last Week in Southern Labor</strong> & <strong>Boss Watch</strong> in Your Inbox', 'tvlr' ); ?>
            </h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|1","bottom":"var:preset|spacing|1"}}},"borderColor":"secondary","backgroundColor":"custom-white","layout":{"type":"default"},"metadata":{"name":"Field"}} -->
            <div class="wp-block-group has-border-color has-secondary-border-color has-custom-white-background-color has-background"
                style="padding-top:var(--wp--preset--spacing--1);padding-bottom:var(--wp--preset--spacing--1)">
                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-white"}}}},"textColor":"custom-white"} -->
                <p class="has-custom-white-color has-text-color has-link-color">dummy field</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->
 
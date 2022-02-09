<?php
/**
 *
 * This file is used for rendering and saving plugin welcome settings.
 */
if (!defined('ABSPATH')) {
    exit;
    // Exit if accessed directly
}
?>
<div class="wbcom-welcome-main-wrapper">
    <div class="wbcom-welcome-head">
        <h2 class="wbcom-welcome-title"><?php esc_html_e( 'Custom Font Uploader', 'cfup' ); ?></h2>
        <p class="wbcom-welcome-description"><?php esc_html_e( 'Custom Font Uploader is a powerful, extendable, google web fonts plugin that helps you to use google fonts in your theme.It also allows you to upload custom fonts to your site. The distinct feature of plugin only loads the fonts you select. This is good for your page loading times, as you want your site to load fast.', 'cfup' ) ?></p>
    </div><!-- .wbcom-welcome-head -->

    <div class="wbcom-welcome-content">

        <div class="wbcom-video-link-wrapper">

        </div>

        <div class="wbcom-welcome-support-info">
            <h3><?php esc_html_e( 'Help &amp; Support Resources', 'cfup' ); ?></h3>
            <p><?php esc_html_e( 'Here are all the resources you may need to get help from us. Documentation is usually the best place to start. Should you require help anytime, our customer care team is available to assist you at the support center.', 'cfup' ); ?></p>
            <hr>

            <div class="three-col">

                <div class="col">
                    <h3><span class="dashicons dashicons-book"></span><?php esc_html_e( 'Documentation', 'cfup' ); ?></h3>
                    <p><?php esc_html_e( 'We have prepared an extensive guide on Custom Font Uploader Page to learn all aspects of the plugin. You will find most of your answers here.', 'cfup' ); ?></p>
                    <a href="<?php echo esc_url( 'https://wbcomdesigns.com/docs/buddypress-free-addons/custom-font-uploader/' ); ?>" class="button button-primary button-welcome-support" target="_blank"><?php esc_html_e( 'Read Documentation', 'cfup' ); ?></a>
                </div>

                <div class="col">
                    <h3><span class="dashicons dashicons-sos"></span><?php esc_html_e( 'Support Center', 'cfup' ); ?></h3>
                    <p><?php esc_html_e( 'We strive to offer the best customer care via our support center. Once your theme is activated, you can ask us for help anytime.', 'cfup' ); ?></p>
                    <a href="<?php echo esc_url( 'https://wbcomdesigns.com/support/' ); ?>" class="button button-primary button-welcome-support" target="_blank"><?php esc_html_e( 'Get Support', 'cfup' ); ?></a>
                </div>

                <div class="col">
                    <h3><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e( 'Got Feedback?', 'cfup' ); ?></h3>
                    <p><?php esc_html_e( 'We want to hear about your experience with the plugin. We would also love to hear any suggestions you may for future updates.', 'cfup' ); ?></p>
                    <a href="<?php echo esc_url( 'https://wbcomdesigns.com/contact/' ); ?>" class="button button-primary button-welcome-support" target="_blank"><?php esc_html_e( 'Send Feedback', 'cfup' ); ?></a>
                </div>

            </div>

        </div>
    </div>
</div><!-- .wbcom-welcome-main-wrapper -->
<?php
/**
 * Title: Main navigation
 * Slug: blankspace/nav-main
 */
?>

<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontWeight":"400","textTransform":"uppercase"},"spacing":{"blockGap":"var:preset|spacing|60"}},"fontSize":"small","layout":{"type":"flex","justifyContent":"center"},"setCascadingProperties":true,"ariaLabel":"<?php esc_attr_e( 'Main Menu', 'blankspace-demo' ); ?>"} -->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'blankspace-demo' ); ?>","url":"<?php echo esc_url( home_url( 'blog/' ) ); ?>"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'blankspace-demo' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Patterns', 'blankspace-demo' ); ?>","url":"#"} /-->
    <!-- wp:navigation-submenu {"label":"<?php esc_html_e( 'Templates', 'blankspace-demo' ); ?>"} -->
        <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Template 1', 'blankspace-demo' ); ?>","url":"#"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Template 2', 'blankspace-demo' ); ?>","url":"#"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Template 3', 'blankspace-demo' ); ?>","url":"#"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e( '404', 'blankspace-demo' ); ?>","url":"#"} /-->
    <!-- /wp:navigation-submenu -->
<!-- /wp:navigation -->
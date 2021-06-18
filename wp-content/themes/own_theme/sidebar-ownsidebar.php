<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marmelada
 */

if ( ! is_active_sidebar( 'ownsidebar' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'ownsidebar' ); ?>
</aside><!-- #secondary -->


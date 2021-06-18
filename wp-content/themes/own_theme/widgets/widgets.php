<?php
// register Foo_Widget widget
function register_info_widget() {
    register_widget( 'Info_Widget' );
}
add_action( 'widgets_init', 'register_info_widget' );
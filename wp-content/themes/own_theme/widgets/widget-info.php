<?php

/**
 * Adds Foo_Widget widget.
 */
class Info_Widget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    function __construct()
    {
        parent::__construct(
            'info_widget', // Base ID
            esc_html__('Aside info widget', 'text_domain'), // Name
            array('description' => esc_html__('A Info Widget', 'text_domain'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @param array $args Widget arguments.
     * @param array $instance Saved values from database.
     * @see WP_Widget::widget()
     *
     */
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        };
        ?>
        <div class="info-block">
            <h3><?php echo $instance['title'] ?></h3>
            <p><?php echo $instance['text'] ?></p>
            <a class="text-color" href="#" target="_blank"><?php echo $instance['link'] ?></a>
        </div>
        <?php

        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @param array $instance Previously saved values from database.
     * @see WP_Widget::form()
     *
     */
    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('New title', 'text_domain');
        $text = !empty($instance['text']) ? $instance['text'] : esc_html__('Your text here', 'text_domain');
        $link = !empty($instance['link']) ? $instance['link'] : esc_html__('Your text for link here', 'text_domain');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text')); ?>"><?php esc_attr_e('Text:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('text')); ?>" type="text"
                   value="<?php echo esc_attr($text); ?>">
        </p>
        <table>
            <tr>
                <td>
                    <p>
                        <label for="<?php echo esc_attr($this->get_field_id('link')); ?>"><?php esc_attr_e('Link:', 'text_domain'); ?></label>
                        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link')); ?>"
                               name="<?php echo esc_attr($this->get_field_name('link')); ?>" type="text"
                               value="<?php echo esc_attr($link); ?>">
                    </p>
                </td>
            </tr>
        </table>

        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     * @see WP_Widget::update()
     *
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['text'] = (!empty($new_instance['text'])) ? sanitize_text_field($new_instance['text']) : '';
        $instance['link'] = (!empty($new_instance['link'])) ? sanitize_text_field($new_instance['link']) : '';

        return $instance;
    }

} // class Foo_Widget

<?php

class Twitter_widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('twitter', 'twitter', array('description' => 'Un widget qui affiche vos derniers tweets'));
    }
    // Visuel dans le site (pas le dashboard)
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
//echo $apply_filters('widget_title', $instance['title']);
        ?>
        <h2 class="white">Lastest Tweets</h2>
        <a class="twitter-timeline" data-width="288" data-height="628" data-theme="light" data-link-color="#E95F28" href="https://twitter.com/HaemersTech?ref_src=twsrc%5Etfw">Tweets by HaemersTech</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        <?php
        echo $args['after_widget'];
    }
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
    // Visuel dans le dashboard
    public function form($instance)
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        ?>
        <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Titre:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title ?>">
        <?php
    }
    
}

add_action('widgets_init', function(){register_widget('Twitter_Widget');});

?>
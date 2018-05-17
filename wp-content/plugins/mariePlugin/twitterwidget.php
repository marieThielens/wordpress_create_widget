<?php

class Twitter_widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('twitter', 'twitter', array('description' => 'Un widget pour tweeter'));
    }
    // Visuel dans le site (pas le dashboard)
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        ?>
        <h2 class="white">Lastest Tweets</h2>
        <a class="twitter-timeline" data-width="288" data-height="262" data-theme="dark" data-link-color="#E95F28" href="https://twitter.com/HaemersTech?ref_src=twsrc%5Etfw">Tweets by HaemersTech</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        <?php
        echo $args['after_widget'];
    }
    public function update($new_instance, $old_instance)
    {

    }
    // Visuel dans le dashboard
    public function form($instance)
    {

    }
}

add_action('widgets_init', function(){register_widget('Twitter_Widget');});

?>
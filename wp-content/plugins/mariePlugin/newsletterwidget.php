<?php
class Marie_Newsletter_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('marie_newsletter', 'Newsletter de Marie', array('description' => 'Un formulaire d\'inscription à la newsletter.'));
    }
    
    // Creation du front-end widget (ce qu'on verra sur le site et non dans le dashboard)
    public function widget($args, $instance)
    {
        // Le titre est donc récupéré par l’instruction $instance['title']
       $title = apply_filters( 'widget_title', $instance['title'] );

        echo $args['before_widget'];
        if ( !empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];
        
        ?>
        <form action="" method="post">
            <p>
                <label for="zero_newsletter_email">Email Address</label>
                <input id="zero_newsletter_email" name="zero_newsletter_email" type="email"/>
            </p>
            <input type="submit"/>
        </form>
        <?php

        echo $args['after_widget'];
    }

    // L'arrière plan du widget avec la méthode form()
    public function form($instance)
    {
        // L'utilisateur peut choisir de mettre un titre
        $title = isset($instance['title']) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo  $title; ?>" />
        </p>
        <?php
    }
    // nous devons implémenter la fonction de mise à jour pour actualiser le widget chaque fois que les paramètres sont modifiés.
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
        }
} 
add_action('widgets_init', function(){register_widget('Marie_Newsletter_Widget');});
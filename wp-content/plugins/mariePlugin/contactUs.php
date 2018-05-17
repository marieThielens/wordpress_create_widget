<?php
class Marie_ContactUs_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('marie_contactUs', 'Contact us de Marie', array('description' => 'widget addresse'));
    }
    
    // Creation du front-end widget (ce qu'on verra sur le site et non dans le dashboard)
    public function widget($args, $instance)
    {
        // Le titre est donc récupéré par l’instruction $instance['title']
       $title = apply_filters( 'widget_title', $instance['title'] );
       $address = apply_filters( 'widget_title', $instance['address'] );

        echo $args['before_widget'];
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];
        
        ?>
<!--         <form action="" method="post">
            <p>
                <label for="zero_newsletter_email">Votre email :</label>
                <input id="zero_newsletter_email" name="zero_newsletter_email" type="email"/>
            </p>
            <input type="submit"/>
        </form> -->
        <?php

        echo $args['after_widget'];
    }

    // L'arrière plan du widget avec la méthode form()
    public function form($instance)
    {
        // L'utilisateur peut choisir de mettre un titre
        $title = isset($instance['title']) ? $instance['title'] : '';
        $address = isset($instance['address']) ? $instance['address'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo  $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'address' ); ?>"><?php _e( 'Address:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo  $title; ?>" />
        </p>
        <?php
    }
    // nous devons implémenter la fonction de mise à jour pour actualiser le widget chaque fois que les paramètres sont modifiés.
     public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';

        return $instance;
        }
}  

//add_action('widgets_init', function(){register_widget('Marie_contactUs_Widget');});
add_action('widgets_init', 
            create_function('', 'return register_widget("Marie_contactUs_Widget");')
        );
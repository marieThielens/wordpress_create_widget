<?php

class Marie_flickr_widget extends WP_Widget 
{
	// Constructeur du widget
	public function __construct(){
		parent::__construct('galerieFlickr', 'Galerie Flickr', array('description' => 'Affichage de votre galerie Flickr'));
	}
	
    // Le corps (visuel dans HTML)
    public function widget($args, $instance)
    {
        // Exctraction de chaque paramètre
        $title = apply_filters( 'widget_title', $instance['title'] );
        $identifiant = apply_filters( 'widget_identifiant', $instance['identifiant'] );
        $pseudo = apply_filters( 'widget_pseudo', $instance['pseudo'] );
        $nb_images = apply_filters( 'widget_nb_images', $instance['nb_images'] );

        // code à exécuter avant le widget
        echo $args['before_widget'];
        if ( ! empty( $title ) )
        // Affichage du titre le cas échéant
        echo $args['before_title'] . $title . $args['after_title'];
        echo $args['after_widget'];
     ?>
        
        <p>
        <!-- get_field_id vient récupérer l'id d'un paramètre-->
        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo  $title; ?>" />
        </label>
        </p>

        <p>
        <label for="<?php echo $this->get_field_id('identifiant'); ?>">
        <?php _e('Identifiant'); ?>
        <input class="widefat" id="<?php echo $this->get_field_id('identifiant'); ?>" name="<?php echo $this->get_field_name('identifiant'); ?>" type="text" value="<?php echo $identifiant; ?>" />
        </label>
        </p>

        <p>
        <label for="<?php echo $this->get_field_id('pseudo'); ?>">
        <?php _e('Pseudonyme'); ?>
        <input class="widefat" id="<?php echo $this->get_field_id('pseudo'); ?>" name="<?php echo $this->get_field_name('pseudo'); ?>" type="text" value="<?php echo $pseudo; ?>" />
        </label>
        </p>

        <p>
        <label for="<?php echo $this->get_field_id('nb_images'); ?>">
        <?php _e('Nombre de photos'); ?>
        <input class="widefat" id="<?php echo $this->get_field_id('nb_images'); ?>" name="<?php echo $this->get_field_name('nb_images'); ?>" type="text" value="<?php echo $nb_images; ?>" />
        </label>
        </p>

    <?php    
    }
    // Enregistrement des inputs dans les variables de notre instance
    public function update($new_instance, $old_instance)
    {
        // Modification des paramètres du widget
        $instance = array();

        /* Récupération des paramètres des champs de configuration envoyés et on l'associe à notre variable instance */

        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['identifiant'] = ( ! empty( $new_instance['identifiant'] ) ) ? strip_tags( $new_instance['identifiant'] ) : '';
        $instance['pseudo'] = ( ! empty( $new_instance['pseudo'] ) ) ? strip_tags( $new_instance['pseudo'] ) : '';
        $instance['nb_images'] = ( ! empty( $new_instance['nb_images'] ) ) ? strip_tags( $new_instance['nb_images'] ) : '';

        return $instance;
    }
}

add_action('widgets_init', function(){register_widget('Marie_flickr_widget');});


?>
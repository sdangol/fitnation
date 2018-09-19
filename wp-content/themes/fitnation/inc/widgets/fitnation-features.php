<?php

/**
 * Features section
 */
class FN_Features extends WP_Widget {
 
 function __construct() {

     parent::__construct(
         'fn-features',  // Base ID
         'Fitnation Features'   // Name
     );

     add_action( 'widgets_init', function() {
         register_widget( 'FN_Features' );
     });

 }

 public $args = array(
     'before_title'  => '<div class="line text-center"><h2 class="text-dark text-size-50 text-m-size-40">',
     'after_title'   => '</h2><hr class="break background-primary break-small break-center margin-bottom-50">
     </div>',
     'before_widget' => '<section class="section-top-padding background-white">',
     'after_widget'  => '</section>'
 );

 public function widget( $args, $instance ) {

     echo $args['before_widget'];

     if ( ! empty( $instance['title'] ) ) {
         echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
     }

     echo '<div class="fn-features">';

     echo esc_html__( $instance['text'], 'text_domain' );

     echo '</div>';

     echo $args['after_widget'];

 }

 public function form( $instance ) {

     $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'text_domain' );
     $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'text_domain' );
     $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'text_domain' );
     ?>
     <div class="single-feature">
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'icon' ) ); ?>"><?php esc_attr_e( 'Icon Class:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon' ) ); ?>" type="text" value="<?php echo esc_attr( $icon ); ?>">
        </p>
        <p>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
        </p>
    </div>
    <button class="feature-add-btn button-primary">Add Faeture</button>
     <?php

 }

 public function update( $new_instance, $old_instance ) {

     $instance = array();

     $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
     $instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';

     return $instance;
 }

}
$FN_Features = new FN_Features();
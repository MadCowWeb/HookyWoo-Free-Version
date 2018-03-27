<?php
//This class generates all of the hooks from hw-single-product and hw-shop
class Hooky_Loop_Class{
 
    public function __construct( $strings ){
        $this->strings = $strings;
        foreach( $this->strings as $string ) {
            add_action( $string[ 'wooHook' ], array( $this, 'echo_strings' ), $string['priority'] );
        }
    } // End function __construct()
 
    public function echo_strings() {
			    $hook = current_filter();
			    foreach ( $this->strings as $string ) {
			        if ( $string['wooHook'] == $hook ) {
       					echo '<div class="' . $string['div_class'] . '">' . $string['hooky_content'] . '</div>';
			        }
			    }
    } // End function echo_strings()
} // End class Example_Class
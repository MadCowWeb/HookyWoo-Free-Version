<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$strings = array(
  array(
    'wooHook' => 'woocommerce_single_product_summary',
    'priority' => ', 3',
    'div_class' => 'hw-after-product',
    'hooky_content' => get_option('before_product_title'),
  ),
  array(
    'wooHook' => 'woocommerce_before_add_to_cart_form',
    'priority' => '',
    'div_class' => 'hw-after-short-description',
    'hooky_content' => get_option('after_short_description'),
  ),
  array(
    'wooHook' => 'woocommerce_before_variations_form',
    'priority' => '',
    'div_class' => 'hw-before-variations',
    'hooky_content' => get_option('before_variations_content'),
  ),
  array(
    'wooHook' => 'woocommerce_after_add_to_cart_button',
    'priority' => '',
    'div_class' => 'hw-after-cart',
    'hooky_content' => get_option('after_add_to_cart_button'),
  ),
  array(
    'wooHook' => 'woocommerce_after_variations_form',
    'priority' => '',
    'div_class' => 'hw-after-variations',
    'hooky_content' => get_option('after_variations_content'),
  ),
  array(
    'wooHook' => 'woocommerce_product_meta_start',
    'priority' => '',
    'div_class' => 'hw-before-product-meta',
    'hooky_content' => get_option('before_product_meta'),
  ),
  array(
    'wooHook' => 'woocommerce_product_meta_end',
    'priority' => '',
    'div_class' => 'hw-after-product-meta',
    'hooky_content' => get_option('after_product_meta'),
  ), 
  array(
    'wooHook' => 'woocommerce_after_single_product_summary',
    'priority' => '',
    'div_class' => 'hw-before-product-tabs',
    'hooky_content' => get_option('before_tabs_section'),
  ), 
  array(
    'wooHook' => 'woocommerce_after_single_product',
    'priority' => '',
    'div_class' => 'hw-after-product',
    'hooky_content' => get_option('after_product_content'),
  ),                 
);
require_once( 'loop-classes.php' );
$shop_loop = new Hooky_Loop_Class( $strings );
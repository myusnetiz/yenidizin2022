<?php
/**
* Registering meta boxes
*
* All the definitions of meta boxes are listed below with comments.
* Please read them CAREFULLY.
*
* You also should read the changelog to know what has been changed before updating.
*
* For more information, please visit:
* @link http://www.deluxeblogtips.com/meta-box/
*/


add_filter( 'rwmb_meta_boxes', 'ana_register_meta_boxes' );

/**
* Register meta boxes
*
* @return void
*/
function ana_register_meta_boxes( $meta_boxes )
{
/**
* Prefix of meta keys (optional)
* Use underscore (_) at the beginning to make keys hidden
* Alt.: You also can make prefix empty to disable it
*/
// Better has an underscore as last sign
$prefix = 'ana_';

// 1st meta box
$meta_boxes[] = array(
// Meta box id, UNIQUE per meta box. Optional since 4.1.5
'id' => 'standard',

// Meta box title - Will appear at the drag and drop handle bar. Required.
'title' => __( 'Site Hakkında', 'rwmb' ),

// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
'post' => array( 'post', 'page' ),

// Where the meta box appear: normal (default), advanced, side. Optional.
'context' => 'normal',

// Order of meta box: high (default), low. Optional.
'priority' => 'high',

// Auto save: true, false (default). Optional.
'autosave' => true,

// List of meta fields
'fields' => array(
// TEXT
array(
'name' => __( 'Adres', 'rwmb' ),
'id' => "{$prefix}website_url",
'desc' => __( 'http:// kullanınız', 'rwmb' ),
'type' => 'text',
'std' => __( '', 'rwmb' ),
'clone' => false,
),
array(
'name' => __( 'Ad', 'rwmb' ),
'id' => "{$prefix}website_owner",
'desc' => __( 'Site sahibinin adı', 'rwmb' ),
'type' => 'text',
'std' => __( '', 'rwmb' ),
'clone' => false,
),
array(
'name' => __( 'Email', 'rwmb' ),
'id' => "{$prefix}email",
'desc' => __( '', 'rwmb' ),
'type' => 'text',
'std' => __( '', 'rwmb' ),
'clone' => false,
),
)
);

return $meta_boxes;
}
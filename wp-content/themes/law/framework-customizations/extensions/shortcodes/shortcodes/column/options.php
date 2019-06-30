<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    // custom
    'col_class' => array(
        'label' => __('Column Class', 'clean'),
		'type'  => 'text',
		'desc' => __('Column Class', 'clean'),
	),
	'col_id' => array(
    	'label' => __('Column ID', 'fw'),
		'type'  => 'text',
		'desc' => __('Column ID', 'fw'),
	),
);
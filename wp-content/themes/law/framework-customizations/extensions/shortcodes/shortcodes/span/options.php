<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'span_wrapper'       => array(
		'type' => 'checkbox',
		'label' => __( 'Span Wrapper', 'fw' )
	),
	'span_wrapper_class'       => array(
		'type' => 'text',
		'label' => __( 'Span Wrapper Class', 'fw' )
	),
	'span_icon'       => array(
		'type' => 'icon',
		'label' => __( 'Span Icon', 'fw' )
	),
	'span_content'    => array(
		'type'  => 'text',
		'label' => __( 'Span Content', 'fw' ),
		'desc'  => __( 'Span Content', 'fw' ),
	),

    // custom
    'span_class' => array(
        'label' => __('Span Class', 'clean'),
		'type'  => 'text',
		'desc' => __('Span Class', 'clean'),
	),
	'span_id' => array(
    	'label' => __('Span ID', 'fw'),
		'type'  => 'text',
		'desc' => __('Span ID', 'fw'),
	),
	'span_data_attrs' => array(
    	'label' => __('Span Attribues', 'fw'),
		'type'  => 'text',
		'desc' => __('Span Attribues', 'fw'),
    ),
);
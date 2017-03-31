<?php
/**
 * Header Tab For Theme Option.
 *
 * @package H-Code
 */
?>
<?php
$this->sections[] = array(
    'icon' => 'fa fa-header',
    'title' => esc_html__('Mini Header', 'H-Code'),
    'desc' => esc_html__('This header bar will be displayed at very top of the page if it is enabled.', 'H-Code').'<br>'.esc_html__( 'Mini Header section configuration settings', 'H-Code'),
    'fields' => array(
          array(
            'id'       => 'hcode_enable_mini_header',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Mini Header', 'H-Code'),
            'default'  => false,
            '1'       => 'On',
            '0'      => 'Off',
          ),
          array(
            'id'        => 'hcode_enable_mini_header_sidebar',
            'type'      => 'select',
            'title'     => esc_html__('Sidebar', 'H-Code'),
            'data'      => 'sidebar',
            'default'   => '',
            'subtitle' => esc_html__('Select sidebar to display in mini header for all pages', 'H-Code'),
            'required'  => array('hcode_enable_mini_header', 'equals', true ),
        ),
    )
);
<?php
/**
 * Section setup.
 *
 * This file adds the section, settings and controls to the customizer. 
 *
 * @package   Taproot
 * @author    Sky Shabatura <theme@sky.camp>
 * @copyright 2018 Sky Shabatura
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://taproot-theme.com
 */


use function Taproot\Customize\range;
use function Taproot\Customize\range_atts;
use function Taproot\Customize\color;


# =======================================================
# Add Section
# =======================================================


$manager->add_section( 'branding--tagline-mobile', [
    'title' => esc_html__( 'Tagline Mobile', 'taproot' ),
    'panel' => 'branding',
]);


# =======================================================
# Add Settings & Controls
# =======================================================


// Setting: Hide Site Tagline
$manager->add_setting( 'branding--tagline-mobile--hide-tagline', [
    'sanitize_callback' => 'taproot_sanitize_checkbox',
    'transport' => 'postMessage',
]);

$manager->add_control( 'branding--tagline-mobile--hide-tagline', [
    'type' => 'checkbox',
    'section' => 'branding--tagline-mobile',
    'label' => esc_html__( 'Hide Site Tagline', 'taproot' ),       
]);


// Font Size
range( $manager, 'branding--tagline-mobile--font-size', [
    'section' => 'branding--tagline-mobile',
    'label' => esc_html__('Font Size', 'taproot'),    
    'atts'  => range_atts('heading')
]);


// Line Height
range( $manager, 'branding--tagline-mobile--line-height', [
    'section' => 'branding--tagline-mobile',
    'label' => esc_html__('Line Height', 'taproot'),    
    'atts'  => range_atts('line-height')
]);


// Tagline Gutter
range( $manager, 'branding--tagline-mobile--gutter', [
    'section' => 'branding--tagline-mobile',
    'label' => esc_html__('Tagline Gutter', 'taproot'),    
    'atts'  => [
        'px' => [
            'max'   => 100,
            'default' => 4
        ],        
        'em' => [
            'max'   => 4,
            'default' => 0.25
        ],
        '%' => [
            'default' => 2
        ],                   
    ]
]);

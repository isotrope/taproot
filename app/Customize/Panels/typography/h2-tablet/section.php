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


# =======================================================
# Add Section
# =======================================================


$manager->add_section( 'typography--h2-tablet', [
    'title' => esc_html__( 'H2 - Tablet', 'taproot' ),
    'panel' => 'typography',
]);


# =======================================================
# Add Settings & Controls
# =======================================================


// Font Size
range( $manager, 'typography--h2-tablet--font-size', [
    'section' => 'typography--h2-tablet',
    'label' => esc_html__('Font Size', 'taproot'),    
    'atts' => range_atts( 'heading' )
]);


// Line Height
range( $manager, 'typography--h2-tablet--line-height', [
    'section' => 'typography--h2-tablet',
    'label' => esc_html__('Line Height', 'taproot'),    
    'atts' => range_atts( 'line-height' )
]);

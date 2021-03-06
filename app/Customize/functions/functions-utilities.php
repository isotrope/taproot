<?php
/**
 * Utility functions for customize controls and styles
 *
 * @package   Taproot
 * @author    Sky Shabatura <theme@sky.camp>
 * @copyright 2018 Sky Shabatura
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://taproot-theme.com
 */

namespace Taproot\Customize;


/**
 * Utility function for building a path string
 *
 * @since  1.0.0
 * @param string    $item
 * @return string
 */
function path( ...$item ) {
    return join( '/', $item );
}


/**
 * Is boxed layout activated?
 *
 * @since  1.0.0
 * @return bool
 */
function is_boxed_layout() {
    return ( get_theme_mod( 'layout--site--boxed-layout' ) ) ? true : false;
}


/**
 * Get a screen from breakpoint data
 *
 * @since 1.0.0
 *
 * @param string $bp
 * @param bool $mobile
 * @return string
 */
function get_screen_from_bp( $bp = 'bp-t', $mobile = true ) {

    $mobile_screens_array = [
        'bp-none' => false,
        'bp-m' => 'mobile',
        'bp-t' => 'tablet-and-under',
        'bp-always' => 'default'
    ];

    $screens_array = [
        'bp-none' => 'default',
        'bp-m' => 'tablet-and-up',
        'bp-t' => 'desktop',
        'bp-always' => false
    ];

    $screens = ( $mobile ) ? $mobile_screens_array : $screens_array;

    return ( isset($screens[$bp]) && $screens[$bp] ) ? $screens[$bp] : false;
}


/**
 * Get mobile screen from setting
 *
 * @since 1.0.0
 *
 * @param string $screen
 * @return string
 */
function get_mobile_screen( $screen = 'default' ) {
    return ( 'never' === $screen ) ? false : $screen;
}

/**
 * Get mobile screen from setting
 *
 * @since 1.0.0
 *
 * @param string $screen
 * @return string
 */
function get_desktop_screen( $screen = 'default' ) {

    $screens_array = [
        'never' => 'default',
        'mobile' => 'tablet-and-up',
        'tablet-and-under' => 'desktop',
        'always' => false,
    ];

    return ( isset( $screens_array[$screen] ) ) ? $screens_array[$screen] : false;
}


/**
 * Get Font Styles
 *
 * @since 1.0.0
 *
 * @param array $styles
 * @return string
 */
function get_font_styles( $id ) {

    $styles_array = get_theme_mod( $id, false );
    if( !$styles_array ) return false;
    $styles_array = explode( '|', $styles_array );
    $styles = [];

    // Font weight
    if( in_array( 'bold', $styles_array ) ) {
        $styles['font-weight'] = 'bold';
    }

    // Font style
    if( in_array( 'italic', $styles_array ) ) {
        $styles['font-style'] = 'italic';
    }

    // Underline
    if( in_array( 'underline', $styles_array ) ) {
        $styles['text-decoration'] = 'underline';
    }

    // Uppercase
    if( in_array( 'uppercase', $styles_array ) ) {
        $styles['text-transform'] = 'uppercase';
    }

    // Capitalize
    elseif( in_array( 'capitalize', $styles_array ) ) {
        $styles['text-transform'] = 'capitalize';
    }

    return $styles;
}


/**
 * Get Font Family if not set to default
 *
 * @since 1.0.0
 *
 * @param string $font
 * @return string
 */
function get_font_family( $font ) {

    if( 'default' === $font || !$font ) {
        return false;
    }
    elseif( strpos( $font, '"') !== false ) {
        return $font;
    }
    else {
        return sprintf( '"%s"', $font );
    }
}


/**
 * Maybe convert to em?
 *
 * Utility to convert unitless values to em.
 * Used to define block spacing that maintains vertical rhythm.
 *
 * @since  1.0.0
 * @param string    $value - the value to maybe convert
 * @return string
 */
function maybe_convert_to_em( $value = false ) {

    // if nothing is set, bail
    if( !$value ) return false;

    // if px, %, or ems unit is used, return value
    if( strpos($value, 'px') !== false || strpos($value, '%') !== false || strpos($value, 'em') !== false ) {
        return $value;
    }

    // otherwise, make sure there's no unit, and add 'em'
    else {
        return sprintf( '%sem',  (float) filter_var( $value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ) );
    }
}


/**
 * Get Boxed Layout breakpoint
 *
 * Utility to calculate the sceensize when the site is the full
 * width when using boxed layout. Used to create media query for
 * fullwidth blocks.
 *
 * @since  1.0.0
 * @return string
 */
function get_boxed_layout_bp( $site_max, $boxed_layout_padding, $font_size ) {

    $max_width_int = (int) filter_var($site_max, FILTER_SANITIZE_NUMBER_INT);
    $boxed_layout_padding_int = (int) filter_var($boxed_layout_padding, FILTER_SANITIZE_NUMBER_INT);
    $min_width = false;

    if(strpos($boxed_layout_padding, 'vw') !== false) {
        $percentage = (100 - (2 * $boxed_layout_padding_int) ) / 100;
        $min_width = $max_width_int / $percentage;
    }
    elseif(strpos($boxed_layout_padding, 'px') !== false) {
        $min_width = $max_width_int + (2 * $boxed_layout_padding_int);
    }
    elseif(strpos($boxed_layout_padding, 'rem') !== false) {
        $desktop_font_size_int = (int) filter_var($font_size, FILTER_SANITIZE_NUMBER_INT);
        $min_width = $max_width_int + (2 * $boxed_layout_padding_int * $desktop_font_size_int);
    }

    return $min_width;
}


/**
 * Get Palette Color From Slug
 *
 * Utility to get a registered theme color from the color slug name.
 *
 * @since  1.0.0
 * @return string
 */
function get_palette_color( $slug ) {

    $colors = current( (array) get_theme_support( 'editor-color-palette' ) );

    foreach( $colors as $color => $args ) {
        if( $slug === $args['slug'] ) {
            return $args['color'];
        }
    }

    return false;
}

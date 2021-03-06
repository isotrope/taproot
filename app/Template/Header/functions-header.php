<?php
/**
 * Template tags.
 *
 * This file holds template tags for the theme. Template tags are PHP functions
 * meant for use within theme templates.
 *
 * @package   Taproot
 * @author    Sky Shabatura <theme@sky.camp>
 * @copyright 2018 Sky Shabatura
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://taproot-theme.com
 */

namespace Taproot\Template;


/**
 * Output Header Additional Content
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function additional_content() {
    $additional_content = apply_filters('taproot/header/additional-content', false );
    if( !$additional_content ) return;
    echo '<div class="additional-header-content">';
        echo $additional_content;
    echo '</div>';
}

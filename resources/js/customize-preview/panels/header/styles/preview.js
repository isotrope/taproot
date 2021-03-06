/**
 * Customize controls preview scripts
 *
 * This file binds javascript actions to cutomize controls.
 *
 * @package   Taproot
 * @author    Sky Shabatura <theme@sky.camp>
 * @copyright 2018 Sky Shabatura
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 */


// Header Background Color
wp.customize( 'header--styles--background-color', function( value ) {
    value.bind( function( to ) {
        var styles = {};
        styles['background-color'] = to;
        if( !to || '#ffffff' === to || 'rgb(255,255,255)' === to ) {
            styles['border-bottom'] = '1px solid rgba(0, 0, 0, 0.1)';
        }
        rootstrap.style({
            id: 'header--styles--background-color',
            selector: '.app-header',
            styles:  styles
        });
    });
});


// Fullwidth
wp.customize( 'header--styles--fullwidth', function( value ) {
    value.bind( function( to ) {

        if( to ) {
            $('.app-header').removeClass('app-header--standard-width').addClass('app-header--fullwidth');
        }
        else {
            $('.app-header').removeClass('app-header--fullwidth').addClass('app-header--standard-width');
        }

    });
});


// Header Default Color
wp.customize( 'header--styles--default-color', function( value ) {
    value.bind( function( to ) {
        rootstrap.style({
            id: 'header--styles--default-color',
            selector: '.app-header__container',
            styles: {
                color: to,
            }
        });
    });
});


// Header Default Color Hover
wp.customize( 'header--styles--default-color--hover', function( value ) {
    value.bind( function( to ) {
        rootstrap.style({
            id: 'header--styles--default-color--hover',
            selector: '.app-header__container .label-toggle:hover',
            styles: {
                color: to,
            }
        });
    });
});

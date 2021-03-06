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


const headingsSelector = 'h1, h2, h3, h4, h5, h6';


// Text Color
wp.customize( 'typography--headings--text-color', function( value ) {
    value.bind( function( to ) {
        rootstrap.style({
            id: 'typography--headings--text-color',
            selector: headingsSelector,
            styles: {
                'color': to
            }
        });
    });
});


// Font Family
wp.customize( 'typography--headings--font-family', function( value ) {
    value.bind( function( to ) {
        rootstrap.style({
            id: 'typography--headings--font-family',
            selector: headingsSelector,
            styles: {
                'font-family': to
            }
        });
    });
});


// Font Styles
wp.customize( 'typography--headings--font-styles', function( value ) {
    value.bind( function( to ) {

        var headingsStyles = utils.taprootFontStyles(to);

        rootstrap.style({
            id: 'typography--headings--font-styles',
            selector: headingsSelector,
            styles: headingsStyles
        });
    });
});

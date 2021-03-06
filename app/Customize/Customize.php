<?php
/**
 * Customize class.
 *
 * This file shows some basics on how to set up and work with the WordPress
 * Customization API. This is the place to set up all of your theme options for
 * the customizer.
 *
 * @package   Taproot
 * @author    Sky Shabatura <theme@sky.camp>
 * @copyright 2018 Sky Shabatura
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://taproot-theme.com
 */

namespace Taproot\Customize;

use WP_Customize_Manager;
use Hybrid\Contracts\Bootable;
use Taproot\Customize\Panels\Panels;
use Rootstrap\Modules\Styles\Styles;
use function Rootstrap\Modules\Screens\screens;
use function Taproot\asset;


/**
 * Handles setting up everything we need for the customizer.
 *
 * @link   https://developer.wordpress.org/themes/customize-api
 * @since  1.0.0
 * @access public
 */
class Customize implements Bootable {


    /**
     * Stores panels object
     * 
     * @since 1.0.0
     * @var string
     */ 
    private $panels;


    /**
     * Set up our Panles object
     *
     * @since 1.0.0
     * 
     * @param  string $id
     * @param  array $args
     */
    public function __construct() {
        $this->panels = new Panels();     
    }


	/**
	 * Adds actions on the appropriate customize action hooks.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function boot() { 

        // load panels
		add_action( 'init', [ $this, 'load_panels' ] );       

        // Load our controls, callbacks, adjustments and utility functions
        add_action( 'customize_register', [ $this, 'customize_register' ] );
  
        // load front facing styles
        add_filter( 'rootstrap/styles/public', [ $this, 'panel_styles'] );

		// Enqueue scripts and styles.
		add_action( 'customize_controls_enqueue_scripts', [ $this, 'controlsEnqueue'] );
        add_action( 'customize_preview_init', [ $this, 'previewEnqueue' ] );
    }
    

    /**
     * Print customizer public styles
     *
     * @since 1.0.0
     */
    public function load_panels() {
        $panels = $this->panels;
        include_once 'Panels/register-panels.php'; 
    }

   
	/**
     * Callback for customize register.
	 *
     * Load files for controls, callbacks, utilities and adjustments 
     * 
     * @since  1.0.0
     * @access public
     * @param  WP_Customize_Manager  $manager  Instance of the customize manager.
     * @return void
	 */
    public function customize_register( WP_Customize_Manager $manager ) {
        include_once 'functions/functions-controls.php';        
        include_once 'functions/functions-sanitize.php';
        include_once 'functions/functions-partials.php';
        include_once 'customize-register.php';
	}


    /**
     * Get panel styles
     *
     * @since 1.0.0
     */
    public function panel_styles() {

        $styles = new Styles( screens() );

        foreach( $this->panels->all() as $name => $panel ) {
            $panel->styles( $styles );
        }

        return $styles;
    }


	/**
	 * Register or enqueue scripts/styles for the controls that are output
	 * in the controls frame.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function controlsEnqueue() {
		wp_enqueue_script( 'taproot-customize-controls', asset( 'js/customize-controls.js' ), [ 'customize-controls' ], null, true );
		wp_enqueue_style( 'taproot-customize-controls', asset( 'css/customize-controls.css' ), [], null );
	}


	/**
	 * Register or enqueue scripts/styles for the live preview frame.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function previewEnqueue() {
		wp_enqueue_script( 'taproot-customize-preview', asset( 'js/customize-preview.js' ), [ 'customize-preview' ], null, true );
    }
    
}

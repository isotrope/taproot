<?php
/**
 * This file returns an array of default rootstrap settings.
 *
 * @package taproot/customizer
 * @since 0.8.2
 */

// define rootstrap settings array
$rootstrap_settings = array();

    /* Define devices */
    $rootstrap_devices = array();

        $rootstrap_devices['mobile'] = array(
            'min' => '',
            'max' => '480.001px',
            'preview-button' => array(
                'content' => "\\f470"
            )
        );

        $rootstrap_devices['mobile-landscape'] = array(
            'min' => '481px',
            'max' => '767.001px',
            'preview-button' => array(
                'content' => "\\f470",
                'style' => 'transform: rotate(270deg) scaleX(-1);'
            )
        );

        $rootstrap_devices['tablet'] = array(
            'min' => '768px',
            'max' => '980.001px',
            'preview-button' => array(
                'content' => "\\f471"
            )
        );

        $rootstrap_devices['laptop'] = array(
            'min' => '981px',
            'max' => '1199.001px',
            'preview-button' => array(
                'content' => "\\f547"
            )
        );

        $rootstrap_devices['desktop'] = array(
            'min' => '1200px',
            'max' => '',
            'preview-button' => array(
                'content' => "\\f472"
            )
        );

    $rootstrap_settings['devices'] = $rootstrap_devices;


    /* Define image sizes */
    $rootstrap_custom_image_sizes = array();

        $rootstrap_custom_image_sizes['taproot-tiny'] = array(
            'width' => 80,
            'height' => 80,
            'crop' => true,
        );

        $rootstrap_custom_image_sizes['taproot-small'] = array(
            'width' => 200,
            'height' => 0,
            'crop' => 0,
        );

    $rootstrap_settings['image_sizes'] = $rootstrap_custom_image_sizes;


    /* Define the images that are available in the media selectors */
    $rootstrap_image_sizes_select = array(
        'taproot-tiny' => esc_html__('Tiny Thumbnail', 'taproot'),
        'thumbnail' => esc_html__('Thumbnail', 'taproot'),
        'taproot-small' => esc_html__('Small', 'taproot'),
        'medium' => esc_html__('Medium', 'taproot'),
        'large' => esc_html__('Large', 'taproot'),
        'full' => esc_html__('Original Size', 'taproot')
    );

    $rootstrap_settings['image_sizes_select'] = $rootstrap_image_sizes_select;


    /* Define default sidebars */
    $rootstrap_sidebars = array();

        $rootstrap_sidebars['sidebar-1'] = 'Sidebar';
        $rootstrap_sidebars['footer-1'] = 'Footer Widgets 1';
        $rootstrap_sidebars['footer-2'] = 'Footer Widgets 2';
        $rootstrap_sidebars['footer-3'] = 'Footer Widgets 3';
        $rootstrap_sidebars['footer-4'] = 'Footer Widgets 4';

    $rootstrap_settings['sidebars'] = $rootstrap_sidebars;


    /* Define customizer defaults */
    $rootstrap_defaults = array(

       "taproot_boxed_layout" => "",
       "taproot_boxed_layout_padding" => "2",
       "taproot_max_content_width" => "1200",
       "taproot_sidebar_width" => "30",
       "taproot_sidebar_gutter" => "6",
       "taproot_background_color" => "",
       "taproot_background_image" => "",
       "taproot_background_repeat" => "no-repeat",
       "taproot_background_size" => "cover",
       "taproot_background_position" => "center",
       "taproot_background_scroll" => "fixed",
       "taproot_google_fonts" => "",
       "taproot_logo_color" => "#444444",
       "taproot_display_title" => 1,
       "taproot_site_title_font" => "default",
       "taproot_title_font_color" => "#ffffff",
       "taproot_title_font_color_fixed" => "",
       "taproot_site_title_font_style" => "uppercase",
       "taproot_display_tagline" => "",
       "taproot_site_tagline_font" => "default",
       "taproot_tagline_font_color" => "",
       "taproot_tagline_font_color_fixed" => "",
       "taproot_tagline_font_style" => "",
       "taproot_branding_layout_mobile" => "spread",
       "taproot_gutter_spacing_mobile" => "1",
       "taproot_logo_height_mobile" => "50",
       "taproot_logo_gutter_mobile" => "0.4",
       "taproot_title_font_size_mobile" => "32",
       "taproot_title_spacing_mobile" => "1",
       "taproot_title_line_height_mobile" => "1.2",
       "taproot_tagline_font_size_mobile" => "24",
       "taproot_tagline_spacing_mobile" => "1",
       "taproot_tagline_line_height_mobile" => "1.2",
       "taproot_tagline_top_margin_mobile" => "0.4",
       "taproot_branding_layout_mobile_landscape" => "spread",
       "taproot_gutter_spacing_mobile_landscape" => "1",
       "taproot_logo_height_mobile_landscape" => "50",
       "taproot_logo_gutter_mobile_landscape" => "1",
       "taproot_title_font_size_mobile_landscape" => "32",
       "taproot_title_spacing_mobile_landscape" => "1",
       "taproot_title_line_height_mobile_landscape" => "1.2",
       "taproot_tagline_font_size_mobile_landscape" => "24",
       "taproot_tagline_spacing_mobile_landscape" => "1",
       "taproot_tagline_line_height_mobile_landscape" => "1.2",
       "taproot_tagline_top_margin_mobile_landscape" => "0.4",
       "taproot_branding_layout_tablet" => "spread",
       "taproot_gutter_spacing_tablet" => "1",
       "taproot_logo_height_tablet" => "50",
       "taproot_logo_gutter_tablet" => "1",
       "taproot_title_font_size_tablet" => "32",
       "taproot_title_spacing_tablet" => "1",
       "taproot_title_line_height_tablet" => "1.2",
       "taproot_tagline_font_size_tablet" => "24",
       "taproot_tagline_spacing_tablet" => "1",
       "taproot_tagline_line_height_tablet" => "1.2",
       "taproot_tagline_top_margin_tablet" => "0.4",
       "taproot_gutter_spacing_laptop_fixed" => "0.6",
       "taproot_hide_logo_laptop_fixed" => "",
       "taproot_logo_height_laptop_fixed" => "50",
       "taproot_logo_gutter_laptop_fixed" => "1",
       "taproot_hide_site_title_laptop_fixed" => "",
       "taproot_title_font_size_laptop_fixed" => "",
       "taproot_title_spacing_laptop_fixed" => "",
       "taproot_title_line_height_laptop_fixed" => "",
       "taproot_hide_site_tagline_laptop_fixed" => "",
       "taproot_tagline_font_size_laptop_fixed" => "",
       "taproot_tagline_spacing_laptop_fixed" => "",
       "taproot_tagline_line_height_laptop_fixed" => "",
       "taproot_tagline_top_margin_laptop_fixed" => "",
       "taproot_gutter_spacing_laptop" => "0.6",
       "taproot_logo_height_laptop" => "50",
       "taproot_logo_gutter_laptop" => "1",
       "taproot_title_font_size_laptop" => "32",
       "taproot_title_spacing_laptop" => "1",
       "taproot_title_line_height_laptop" => "1.2",
       "taproot_tagline_font_size_laptop" => "24",
       "taproot_tagline_spacing_laptop" => "1",
       "taproot_tagline_line_height_laptop" => "1.2",
       "taproot_tagline_top_margin_laptop" => "0.4",
       "taproot_gutter_spacing_desktop_fixed" => "0.6",
       "taproot_hide_logo_desktop_fixed" => "",
       "taproot_logo_height_desktop_fixed" => "50",
       "taproot_logo_gutter_desktop_fixed" => "1",
       "taproot_hide_site_title_desktop_fixed" => "",
       "taproot_title_font_size_desktop_fixed" => "",
       "taproot_title_spacing_desktop_fixed" => "",
       "taproot_title_line_height_desktop_fixed" => "",
       "taproot_hide_site_tagline_desktop_fixed" => "",
       "taproot_tagline_font_size_desktop_fixed" => "",
       "taproot_tagline_spacing_desktop_fixed" => "",
       "taproot_tagline_line_height_desktop_fixed" => "",
       "taproot_tagline_top_margin_desktop_fixed" => "",
       "taproot_gutter_spacing_desktop" => "0.6",
       "taproot_logo_height_desktop" => "50",
       "taproot_logo_gutter_desktop" => "1",
       "taproot_title_font_size_desktop" => "32",
       "taproot_title_spacing_desktop" => "1",
       "taproot_title_line_height_desktop" => "1.2",
       "taproot_tagline_font_size_desktop" => "24",
       "taproot_tagline_spacing_desktop" => "1",
       "taproot_tagline_line_height_desktop" => "1.2",
       "taproot_tagline_top_margin_desktop" => "0.4",
       "taproot_main_header_fullwidth" => "",
       "taproot_header_background_color" => "#fd6f23",
       "taproot_header_default_color" => "rgba(255,255,255,0.9)",
       "taproot_header_default_color_hover" => "#ffffff",
       "taproot_main_header_display_when_fixed" => 1,
       "taproot_fixed_header_type" => "slide",
       "taproot_header_background_color_fixed" => "#444444",
       "taproot_fixed_header_default_color" => "#ffffff",
       "taproot_fixed_header_default_color_hover" => "",
       "taproot_enable_header_search" => "",
       "taproot_header_search_color" => "",
       "taproot_taproot_header_search_size" => "24",
       "taproot_enable_fixed_header_search" => "",
       "taproot_search_color_fixed" => "",
       "taproot_search_size_fixed" => "26",
       "taproot_footer_layout" => "two-thirds-one-third",
       "taproot_footer_style" => "default",
       "taproot_taproot_footer_fullwidth" => "",
       "taproot_footer_container_padding" => "1.6",
       "taproot_footer_gutter_spacing" => "1.6",
       "taproot_footer_background_color" => "#444444",
       "taproot_footer_widget_heading_color" => "#ffffff",
       "taproot_footer_widget_title_font_size" => "1.6",
       "taproot_footer_widget_text_color" => "rgba(255,255,255,0.75)",
       "taproot_footer_widget_font_size" => "16",
       "taproot_footer_link_color" => "rgba(255,255,255,0.75)",
       "taproot_footer_link_color_hover" => "#ffffff",
       "taproot_bottom_bar_background_color" => "#444444",
       "taproot_bottom_bar_text_color" => "rgba(255,255,255,0.75)",
       "taproot_bottom_bar_text_color_hover" => "#ffffff",
       "taproot_bottom_bar_font_size" => "16",
       "taproot_bottom_bar_height" => "1",
       "taproot_footer_nav_background" => "#444444",
       "taproot_footer_nav_menu_item_color" => "rgba(255,255,255,0.75)",
       "taproot_footer_nav_menu_item_hover_color" => "#ffffff",
       "taproot_footer_nav_font" => "default",
       "taproot_footer_nav_font_style" => "",
       "taproot_footer_nav_font_size" => "16",
       "taproot_footer_nav_item_spacing" => "0.5",
       "taproot_footer_nav_height" => "1",
       "taproot_footer_nav_align" => "center",
       "taproot_footer_nav_position" => "before",
       "taproot_footer_nav_mobile_breakpoint" => "bp-none",
       "taproot_topnav_background" => "#444444",
       "taproot_topnav_default_color" => "rgba(255,255,255,0.75)",
       "taproot_topnav_default_color_hover" => "#ffffff",
       "taproot_topnav_font" => "default",
       "taproot_topnav_font_style" => "",
       "taproot_topnav_font_size" => "13",
       "taproot_topnav_height" => "0.6",
       "taproot_topnav_item_spacing" => "0.6",
       "taproot_topnav_hide_when_not_mobile" => "",
       "taproot_topnav_mobile_breakpoint" => "bp-none",
       "taproot_topnav_hide_when_mobile" => "1",
       "taproot_topnav_display_when_fixed" => "",
       "taproot_fixed_topnav_background" => "",
       "taproot_fixed_topnav_default_color" => "",
       "taproot_fixed_topnav_default_color_hover" => "",
       "taproot_header_nav_menu_item_color" => "",
       "taproot_header_nav_menu_item_color_hover" => "",
       "taproot_header_nav_submenu_bkg_color" => "#444444",
       "taproot_header_nav_submenu_item_color" => "rgba(255,255,255,0.75)",
       "taproot_header_nav_submenu_item_color_hover" => "#ffffff",
       "taproot_header_nav_enable_dropdown_pointers" => "1",
       "taproot_header_nav_font" => "default",
       "taproot_header_nav_font_style" => "capitalize",
       "taproot_header_nav_font_size" => "15",
       "taproot_header_nav_height" => "1",
       "taproot_header_nav_item_spacing" => "0.4",
       "taproot_header_nav_align" => "right",
       "taproot_header_nav_hide_when_not_mobile" => "",
       "taproot_header_nav_mobile_breakpoint" => "bp-ml",
       "taproot_header_nav_hide_when_mobile" => "",
       "taproot_header_nav_type" => "slide",
       "taproot_header_nav_mobile_icon_size" => "1",
       "taproot_header_nav_mobile_icon_color" => "",
       "taproot_header_nav_mobile_background" => "#444444",
       "taproot_header_nav_mobile_separator_color" => "rgba(255,255,255,0.1)",
       "taproot_header_nav_mobile_item_color" => "rgba(255,255,255,0.75)",
       "taproot_header_nav_mobile_dropdown_item_height" => "1",
       "taproot_header_nav_mobile_dropdown_item_padding" => "1",
       "taproot_header_nav_mobile_bkg_color_hover" => "",
       "taproot_header_nav_mobile_item_color_hover" => "#ffffff",
       "taproot_header_nav_mobile_menubar_background" => "rgba(255,255,255,0.3)",
       "taproot_header_nav_display_when_fixed" => "1",
       "taproot_header_nav_menu_item_color_fixed" => "",
       "taproot_header_nav_menu_item_color_hover_fixed" => "",
       "taproot_header_nav_font_size_fixed" => "15",
       "taproot_header_nav_height_fixed" => "1",
       "taproot_header_nav_item_spacing_fixed" => "0.4",
       "taproot_header_nav_fixed_submenu_bkg_color" => "#fd6f23",
       "taproot_header_nav_fixed_submenu_item_color" => "",
       "taproot_header_nav_fixed_submenu_item_color_hover" => "",
       "taproot_header_nav_align_fixed" => "right",
       "taproot_navbar_background" => "#444444",
       "taproot_navbar_menu_item_color" => "rgba(255,255,255,0.75)",
       "taproot_navbar_menu_item_color_hover" => "#ffffff",
       "taproot_navbar_font" => "default",
       "taproot_navbar_font_style" => "",
       "taproot_navbar_font_size" => "15",
       "taproot_navbar_submenu_bkg_color" => "rgb(253,111,35)",
       "taproot_navbar_submenu_item_color" => "#ffffff",
       "taproot_navbar_submenu_item_color_hover" => "",
       "taproot_navbar_enable_dropdown_pointers" => "1",
       "taproot_navbar_height" => "1.1",
       "taproot_navbar_item_spacing" => "1.1",
       "taproot_navbar_align" => "center",
       "taproot_navbar_hide_when_not_mobile" => "",
       "taproot_navbar_mobile_breakpoint" => "bp-ml",
       "taproot_navbar_hide_when_mobile" => "",
       "taproot_navbar_nav_type" => "fullscreen",
       "taproot_navbar_height_mobile" => "1.2",
       "taproot_navbar_mobile_icon_color" => "#ffffff",
       "taproot_navbar_mobile_icon_size" => "1",
       "taproot_navbar_mobile_dropdown_bkg" => "#444444",
       "taproot_navbar_mobile_separator_color" => "rgba(255,255,255,0.1)",
       "taproot_navbar_mobile_item_color" => "rgba(255,255,255,0.75)",
       "taproot_navbar_mobile_dropdown_item_height" => "",
       "taproot_navbar_mobile_dropdown_item_padding" => "",
       "taproot_navbar_mobile_bkg_color_hover" => "",
       "taproot_navbar_mobile_item_color_hover" => "#ffffff",
       "taproot_navbar_display_when_fixed" => "",
       "taproot_fixed_navbar_background_color" => "",
       "taproot_fixed_navbar_item_color" => "",
       "taproot_fixed_navbar_item_color_hover" => "",
       "taproot_navbar_fixed_submenu_bkg_color" => "",
       "taproot_navbar_fixed_submenu_item_color" => "",
       "taproot_navbar_fixed_submenu_item_color_hover" => "",
       "taproot_body_font" => "default",
       "taproot_text_color" => "rgba(68,68,68,0.68)",
       "taproot_line_height" => "1.7",
       "taproot_heading_font" => "default",
       "taproot_heading_color" => "rgba(68,68,68,0.9)",
       "taproot_heading_line_height" => "1.3",
       "taproot_heading_font_style" => "",
       "taproot_post_title_font" => "default",
       "taproot_post_title_color" => "",
       "taproot_title_line_height" => "1.3",
       "taproot_title_font_style" => "",
       "taproot_font_size_mobile" => "16",
       "taproot_heading_font_size_mobile" => "2",
       "taproot_post_title_font_size_mobile" => "2.4",
       "taproot_font_size_mobile_landscape" => "16",
       "taproot_heading_font_size_mobile_landscape" => "2",
       "taproot_post_title_font_size_mobile_landscape" => "2.3",
       "taproot_font_size_tablet" => "16",
       "taproot_heading_font_size_tablet" => "2",
       "taproot_post_title_font_size_tablet" => "2.4",
       "taproot_sidebar_layout_font_size_laptop" => "16",
       "taproot_sidebar_layout_heading_font_size_laptop" => "2",
       "taproot_sidebar_layout_post_title_font_size_laptop" => "2.4",
       "taproot_sidebar_layout_sidebar_font_size_laptop" => "0.9",
       "taproot_font_size_laptop" => "18",
       "taproot_heading_font_size_laptop" => "2",
       "taproot_post_title_font_size_laptop" => "2.4",
       "taproot_sidebar_layout_font_size_desktop" => "16",
       "taproot_sidebar_layout_heading_font_size_desktop" => "2",
       "taproot_sidebar_layout_post_title_font_size_desktop" => "2.5",
       "taproot_sidebar_layout_sidebar_font_size_desktop" => "1",
       "taproot_font_size_desktop" => "18",
       "taproot_heading_font_size_desktop" => "2",
       "taproot_post_title_font_size_desktop" => "2.4",
       "taproot_blog_layout" => "right",
       "taproot_post_show_all" => "",
       "taproot_blog_title" => "Recent Posts",
       "taproot_blog_page_title_color" => "",
       "taproot_blog_page_pagination_size" => "1",
       "taproot_blog_page_pagination_radius" => "50",
       "taproot_blog_page_pagination_color" => "#ff6f02",
       "taproot_post_box_featured_image_size" => "thumbnail",
       "taproot_post_box_title_color" => "",
       "taproot_post_box_title_color_hover" => "#ff6f02",
       "taproot_post_box_text_color" => "",
       "taproot_post_box_meta_icons" => "1",
       "taproot_post_box_meta_size" => "0.8",
       "taproot_post_box_meta_color" => "",
       "taproot_post_box_meta_icon_color" => "",
       "taproot_post_box_link_style" => "link",
       "taproot_post_box_link_position" => "right",
       "taproot_post_box_link_color" => "",
       "taproot_post_box_excerpt_length" => 0,
       "taproot_top_bar_background_color" => "#ff6f02",
       "taproot_top_bar_default_color" => "",
       "taproot_top_bar_title_color" => "",
       "taproot_top_bar_meta_color" => "",
       "taproot_top_bar_post_navi_color" => "",
       "taproot_top_bar_post_navi_color_hover" => "",
       "taproot_top_bar_padding" => "0.5",
       "taproot_top_bar_vertical_align" => "center",
       "taproot_top_bar_horizontal_align" => "left",
       "taproot_post_nav_location" => "inside",
       "taproot_enable_top_post_nav" => "default",
       "taproot_top_post_navigation_link_size" => "1",
       "taproot_top_post_navigation_link_color" => "",
       "taproot_top_post_navigation_link_color_hover" => "",
       "taproot_enable_top_post_nav_separators" => 1,
       "taproot_enable_bottom_post_nav" => "default",
       "taproot_bottom_post_navigation_link_size" => "1",
       "taproot_bottom_post_navigation_link_color" => "",
       "taproot_bottom_post_navigation_link_color_hover" => "",
       "taproot_enable_bottom_post_nav_separators" => 1,
       "taproot_post_nav_prev_label_text" => "prev",
       "taproot_post_nav_next_label_text" => "next",
       "taproot_breadcrumbs_location" => "content",
       "taproot_breadcrumbs_align" => "center",
       "taproot_breadcrumbs_size" => "0.9",
       "taproot_post_navigation_breadcrumb_color" => "",
       "taproot_post_navigation_breadcrumb_color_hover" => "",
       "taproot_button_background_color" => "#ff6f02",
       "taproot_button_border_color" => "#ff6f02",
       "taproot_button_text_color" => "rgba(255,255,255,0.75)",
       "taproot_button_background_color_hover" => "#ffffff",
       "taproot_button_border_color_hover" => "#ff6f02",
       "taproot_button_text_color_hover" => "#ff6f02",
       "taproot_button_border_width" => "2",
       "taproot_button_border_radius" => "0",
       "taproot_button_font" => "default",
       "taproot_button_font_style" => "uppercase",
       "taproot_secondary_button_background_color" => "",
       "taproot_secondary_button_border_color" => "",
       "taproot_secondary_button_text_color" => "",
       "taproot_secondary_button_background_color_hover" => "",
       "taproot_secondary_button_border_color_hover" => "",
       "taproot_secondary_button_text_color_hover" => "",
       "taproot_secondary_button_border_width" => "0",
       "taproot_secondary_button_border_radius" => "0",
       "taproot_secondary_button_font" => "default",
       "taproot_secondary_button_font_style" => "",
       "taproot_link_color" => "#ff6f02",
       "taproot_link_color_hover" => "",
       "taproot_link_color_active" => "",
       "taproot_accent_color" => "#ff6f02",
       "taproot_accent_text_color" => "#ffffff",
       "taproot_accent_background_color" => "#f9f9f9",
       "taproot_header_search_size" => "24",
       "taproot_topnav_info_phone" => "",
       "taproot_topnav_info_email" => "",
       "taproot_blog_page_sidebar" => "sidebar-1",
       "taproot_single_layout" => "right",
       "taproot_single_sidebar" => "sidebar-1",
       "taproot_featured_image_location" => "before-title",
       "taproot_featured_image_size" => "large",
       "taproot_featured_image_position" => "none",
       "taproot_separator_color" => "rgb(229,229,229)",
       "taproot_sidebar-1_width" => 30,
       "taproot_sidebar-1_bkg" => "#f9f9f9",
       "taproot_sidebar-1_text" => "",
       "taproot_sidebar-1_heading" => "",
       "taproot_sidebar-1_action" => "",
       "taproot_sidebar-1_action_hover" => "",
       "taproot_sidebar-1_accent_color" => "#ff6f02",
       "taproot_sidebar-1_accent_text_color" => "rgba(255,255,255,0.9)",
       "taproot_sidebar-1_separator_color" => "rgb(204,204,204)",
       "taproot_sidebar-1_gutter_width" => "0",
       "taproot_fixed_header_logo_color" => "",
       "taproot_post_title" => "content",
       "taproot_comments_text_color" => "",
       "taproot_comments_link_color" => "",
       "taproot_comments_link_color_hover" => "",
       "taproot_comments_border_color" => "",
       "taproot_comments_form_background_color" => "#f9f9f9",
       "rootstrap_disable_customizer_styles" => "",
    );

    $rootstrap_settings['defaults'] = $rootstrap_defaults;


return $rootstrap_settings;
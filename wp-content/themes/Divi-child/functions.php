<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

// Menu icon
// Add custom fields to menu items
function add_menu_item_icon_field($item_id, $item, $depth, $args) {
    $icon_url = get_post_meta($item_id, '_menu_item_icon_url', true); // Retrieve the icon URL if set
    ?>
    <p class="field-icon-url description description-wide">
        <label for="edit-menu-item-icon-<?php echo $item_id; ?>">
            Icon URL<br>
            <input type="text" id="edit-menu-item-icon-<?php echo $item_id; ?>" class="widefat" name="menu-item-icon[<?php echo $item_id; ?>]" value="<?php echo esc_attr($icon_url); ?>">
            <br>
            <small>Upload an icon in the Media Library and paste its URL here.</small>
        </label>
    </p>
    <?php
}
add_action('wp_nav_menu_item_custom_fields', 'add_menu_item_icon_field', 10, 4);

// Save icon
function save_menu_item_icon_field($menu_id, $menu_item_db_id, $args) {
    if (isset($_POST['menu-item-icon'][$menu_item_db_id])) {
        $icon_url = sanitize_text_field($_POST['menu-item-icon'][$menu_item_db_id]);
        update_post_meta($menu_item_db_id, '_menu_item_icon_url', $icon_url);
    } else {
        delete_post_meta($menu_item_db_id, '_menu_item_icon_url');
    }
}
add_action('wp_update_nav_menu_item', 'save_menu_item_icon_field', 10, 3);

// Display icon in menu
function display_menu_item_icon($item_output, $item, $depth, $args) {
    $icon_url = get_post_meta($item->ID, '_menu_item_icon_url', true);
    if ($icon_url) {
        $icon_html = '<i class="menu-icon"><img src="' . esc_url($icon_url) . '" alt="" style="width: 20px; height: 20px; margin-right: 5px;"></i>';
        $item_output = $icon_html . $item_output;
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'display_menu_item_icon', 10, 4);

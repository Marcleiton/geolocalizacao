<?php 
/*
 * Plugin Name:       Geolocalização - Mostre a Localização do seu cliente em seu site
 * Plugin URI:        https://marcleitonalmeida.com/geolocalizacao
 * Description:       Mostre a Localização do seu cliente em seu site de modo facil utilizando nosso plugin.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Marcleiton Almeida
 * Author URI:        https://marcleitonalmeida.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://marcleitonalmeida.com
 * Text Domain:       geolocalizacao
 */ 


require plugin_dir_path(__FILE__) . 'admin/admin.php';
require plugin_dir_path(__FILE__) . 'app/city.php';

function geo_css() {
    wp_register_style( 'admin-style', plugins_url( 'css/admin-style.css', __FILE__ ) );
    wp_enqueue_style( 'admin-style' );
}
add_action( 'admin_enqueue_scripts', 'geo_css' );

function geo_config_plugin_info($links, $file) {
    // Verifique o nome do arquivo do seu plugin
    if (plugin_basename(__FILE__) === $file) {
        $plugin_data = get_plugin_data(__FILE__);

        $plugin_pro_version = '1.0 Pro';
        $pro_version_link = 'https://marcleitonalmeida.com/geolocalizacao';

        if (!empty($plugin_pro_version)) {
            $version_link = '<a href="' . esc_url($pro_version_link) . '" target="_blank" rel="noopener noreferrer">Ver versão pro</a>';
            $links[] = $version_link;
        }

        $theme_boost_pro_link = 'https://boostproecom.com/';

        $boost_pro_link = '<a href="' . esc_url($theme_boost_pro_link) . '" target="_blank" rel="noopener noreferrer">Conhecer Tema Boost Pro</a>';
        $links[] = $boost_pro_link;
    }

    return $links;
}
add_filter('plugin_row_meta', 'geo_config_plugin_info', 10, 2);


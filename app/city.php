<?php
function geo_obter_cidade_usuario() {
    $response = wp_remote_get('https://marcleitonalmeida.com/geoip');
    
    if (is_wp_error($response)) {
        return 'Erro ao obter a cidade do usuário';
    }
    
    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body);
    
    if (!$data || !isset($data->YourFuckingCity)) {
        return 'Cidade não encontrada';
    }
    
    return $data->YourFuckingCity;
}
add_shortcode('cidade_usuario', 'geo_obter_cidade_usuario');
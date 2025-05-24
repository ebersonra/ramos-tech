<?php
/**
 * Funções do tema Selavie
 */

if (!defined('ABSPATH')) exit;

// Adiciona suporte a recursos do tema
function selavie_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'selavie_theme_support');

// Registra os menus
function selavie_register_menus() {
    register_nav_menus(array(
        'primary-menu' => 'Menu Principal',
        'footer-menu' => 'Menu Rodapé'
    ));
}
add_action('init', 'selavie_register_menus');

// Carrega scripts e estilos
function selavie_enqueue_scripts() {
    // Estilos
    wp_enqueue_style('selavie-style', get_stylesheet_uri());
    wp_enqueue_style('selavie-custom-style', get_template_directory_uri() . '/style-selavie.css', array(), '1.0.0');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0');
    
    // Scripts
    wp_enqueue_script('selavie-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'selavie_enqueue_scripts');

// Adiciona página de opções do tema usando ACF
if(function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Configurações do Tema',
        'menu_title' => 'Configurações do Tema',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// Função para sanitizar números de telefone
function selavie_sanitize_phone($phone) {
    return preg_replace('/[^0-9]/', '', $phone);
}

// Função para formatar link do WhatsApp
function selavie_whatsapp_link($phone, $message = '') {
    $phone = selavie_sanitize_phone($phone);
    $message = urlencode($message);
    return "https://wa.me/{$phone}?text={$message}";
}

// Função para obter link do WhatsApp das opções do tema
function selavie_get_whatsapp_link() {
    $phone = get_field('whatsapp_number', 'option');
    $message = get_field('whatsapp_message', 'option');
    
    if(!$phone) {
        return '#';
    }
    
    return selavie_whatsapp_link($phone, $message);
}

// Remove barra de admin para não-administradores
function selavie_remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'selavie_remove_admin_bar');

// Limita o excerpt
function selavie_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'selavie_excerpt_length');

// Personaliza o more do excerpt
function selavie_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'selavie_excerpt_more');

// Adiciona suporte a logotipo personalizado
function selavie_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width'  => true,
        'flex-height' => true,
    ));
}
add_action('after_setup_theme', 'selavie_custom_logo_setup'); 
<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles',20);
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent generatepress
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/CSS/theme.css', array(), filemtime(get_stylesheet_directory() . '/CSS/theme.css'));
}


// Hook Filter

function add_admin_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in()) {
        $items .= '<li id="menu-item-67" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-67"><a href="http://localhost/P6/planty/wp-admin">Admin</a></li>';
    }
    return $items;
}

add_filter( 'wp_nav_menu_items', 'add_admin_item_to_nav_menu', 10, 2);
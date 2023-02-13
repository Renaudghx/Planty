<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles',20);
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent generatepress
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/CSS/theme.css', array(), filemtime(get_stylesheet_directory() . '/CSS/theme.css'));
    // Chargement du /css/widgets/image-titre-widget.css pour notre widget image titre
    //wp_enqueue_style('image-titre-widget', get_stylesheet_directory_uri() . '/css/widgets/image-titre-widget.css', array(), filemtime(get_stylesheet_directory() . '/css/widgets/image-titre-widget.css'));
    // Chargement du /css/widgets/bloc-lien-image-widget.css pour notre widget bloc lien image
    //wp_enqueue_style('bloc-lien-image-widget', get_stylesheet_directory_uri() . '/css/widgets/bloc-lien-image-widget.css', array(), filemtime(get_stylesheet_directory() . '/css/widgets/bloc-lien-image-widget.css'));
    // Chargement du /css/shortcodes/banniere-titre.css pour notre shortcode banniere titre
    //wp_enqueue_style('banniere-titre-shortcode', get_stylesheet_directory_uri() . '/css/shortcodes/banniere-titre.css', array(), filemtime(get_stylesheet_directory() . '/css/shortcodes/banniere-titre.css'));

}


// Hook Filter

function add_admin_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in()) {
        $items .= '<li id="menu-item-67" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-67"><a href="#">Admin</a></li>';
    }
    return $items;
}

add_filter( 'wp_nav_menu_items', 'add_admin_item_to_nav_menu', 10, 2);
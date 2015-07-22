<?php 
/*
Plugin Name: Storeroom
Plugin URI: http://wordpress.org/extend/plugins/storeroom/
Description: Allows you to have an inventory of your storeroom.
Author: bi0xid, pixelatedheart
Author URI: http://bi0xid.es/
Version: 0.1
Text Domain: storeroom
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
  $labels = array(
    "name" => "Tiendas",
    "singular_name" => "Tienda",
    "menu_name" => "Tiendas",
    "all_items" => "Todas las tiendas",
    "add_new" => "Añadir tienda",
    "add_new_item" => "Añadir nueva tienda",
    "edit" => "Editar",
    "edit_item" => "Editar tienda",
    "new_item" => "Nueva tienda",
    "view" => "Ver",
    "view_item" => "Ver tienda",
    "search_items" => "Buscar tienda",
    "not_found" => "No se encontraron tiendas",
    "not_found_in_trash" => "No hemos encontrado tiendas en la papelera",
    "parent" => "Tienda padre",
    );

  $args = array(
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "show_ui" => true,
    "has_archive" => true,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "tienda", "with_front" => true ),
    "query_var" => true,
        
    "supports" => array( "fields-tienda" ),    
  );
  register_post_type( "tienda", $args );

// End of cptui_register_my_cpts()
}


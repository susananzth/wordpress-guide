<?php
function ticket_post_type() {
    $labels = array(
        'name'                  => _x( 'Ticket', 'Post type general name', 'ticket' ),
        'singular_name'         => _x( 'Ticket', 'Post type singular name', 'ticket' ),
        'menu_name'             => _x( 'Tickets', 'Admin Menu text', 'ticket' ),
        'name_admin_bar'        => _x( 'Ticket', 'Add New on Toolbar', 'ticket' ),
        'add_new'               => __( 'Agregar nuevo Ticket', 'ticket' ),
        'add_new_item'          => __( 'Agregar nuevo Ticket', 'ticket' ),
        'new_item'              => __( 'Nuevo Ticket', 'ticket' ),
        'edit_item'             => __( 'Editar Ticket', 'ticket' ),
        'view_item'             => __( 'Ver Ticket', 'ticket' ),
        'all_items'             => __( 'Todos los Tickets', 'ticket' ),
        'search_items'          => __( 'Buscar Tickets', 'ticket' ),
        'parent_item_colon'     => __( 'Padre Tickets:', 'ticket' ),
        'not_found'             => __( 'No encontrados.', 'ticket' ),
        'not_found_in_trash'    => __( 'No encontrados.', 'ticket' ),
        'featured_image'        => _x( 'Imagen Destacada', '', 'ticket' ),
        'set_featured_image'    => _x( 'Añadir imagen destacada', '', 'ticket' ),
        'remove_featured_image' => _x( 'Borrar imagen', '', 'ticket' ),
        'use_featured_image'    => _x( 'Usar como imagen', '', 'ticket' ),
        'archives'              => _x( 'Archivo de Tickets', '', 'ticket' ),
        'insert_into_item'      => _x( 'Insertar un Ticket', '', 'ticket' ),
        'uploaded_to_this_item' => _x( 'Cargado en este Ticket', '', 'ticket' ),
        'filter_items_list'     => _x( 'Filtrar Tickets por lista', '”. Added in 4.4', 'ticket' ),
        'items_list_navigation' => _x( 'Navegación de Tickets', '', 'ticket' ),
        'items_list'            => _x( 'Lista de Tickets', '', 'ticket' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => false,
        'exclude_from_search'=> false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'tickets' ),
        'capability_type'    => 'post',
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-feedback',
        'has_archive'        => false,
        'hierarchical'       => false,
        'supports'           => array( 'title', 'editor'),
    );

    register_post_type( 'tickets', $args );
}

add_action( 'init', 'post_type' );

// refrescar el htaccess para que reconozca la ruta de tickets
function ticket_rewrite_flush(){
  ticket_post_type();
  flush_rewrite_rules();
}

?>

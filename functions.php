<?php
// Registro do tipo de postagem personalizado "Produto"
function custom_post_type_produto() {
    $labels = array(
        'name'               => 'Produtos',
        'singular_name'      => 'Produto',
        'menu_name'          => 'Produtos',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Produto',
        'edit'               => 'Editar',
        'edit_item'          => 'Editar Produto',
        'new_item'           => 'Novo Produto',
        'view'               => 'Ver',
        'view_item'          => 'Ver Produto',
        'search_items'       => 'Buscar Produtos',
        'not_found'          => 'Nenhum produto encontrado',
        'not_found_in_trash' => 'Nenhum produto encontrado na lixeira',
        'parent'             => 'Produto Pai'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'produto' ),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes','post-formats' ),
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-cart',
    );

    register_post_type( 'produto', $args );
}
add_action( 'init', 'custom_post_type_produto' );

// Registro da taxonomia personalizada "Categorias" para o tipo de postagem "Produto"
function custom_taxonomy_categorias() {
    $labels = array(
        'name'              => 'Categorias',
        'singular_name'     => 'Categoria',
        'search_items'      => 'Buscar Categorias',
        'all_items'         => 'Todas as Categorias',
        'parent_item'       => 'Categoria Pai',
        'parent_item_colon' => 'Categoria Pai:',
        'edit_item'         => 'Editar Categoria',
        'update_item'       => 'Atualizar Categoria',
        'add_new_item'      => 'Adicionar Nova Categoria',
        'new_item_name'     => 'Nome da Nova Categoria',
        'menu_name'         => 'Categorias',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categoria' ),
    );

    register_taxonomy( 'categorias', 'produto', $args );
}
add_action( 'init', 'custom_taxonomy_categorias' );

// Adicionar suporte à imagem de destaque
function custom_post_type_support_thumbnail() {
    add_theme_support( 'post-thumbnails');
}
add_action( 'after_setup_theme', 'custom_post_type_support_thumbnail' );

add_theme_support('menus');
?>

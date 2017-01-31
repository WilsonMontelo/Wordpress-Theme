<?php 
// CONTATOS

/*
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_contatos' );

/*
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_contatos() {

    /**
     * Labels customizados para o tipo de post
     * 
     */
    $labels = array(
      'name'                => _x('Contatos', 'post type general name'),
      'singular_name'       => _x('Contato', 'post type singular name'),
      'add_new'             => _x('Adicionar Novo', 'Post'),
      'add_new_item'        => __('Adicionar Novo post'),
      'edit_item'           => __('Editar Post'),
      'new_item'            => __('Novo Post'),
      'all_items'           => __('Todos as Posts'),
      'view_item'           => __('Ver Post'),
      'search_items'        => __('Procurar Post'),
      'not_found'           => __('Post Não Encontrada'),
      'not_found_in_trash'  => __('No Post found in Trash'),
      'parent_item_colon'   => '',
      'menu_name'           => 'Contatos'
    );
    
    /**
     * Registamos o tipo de post através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'contatos', array(
      'labels'                 => $labels,
      'public'                 => true,
      'publicly_queryable'     => true,
      'show_ui'                => true,
      'show_in_menu'           => true,
      'has_archive'            => 'contatos',
      'rewrite'                => array(
      'slug'                   => 'contatos',
      'with_front'             => false,
      ),
      'capability_type'        => 'post',
      'has_archive'            => true,
      'hierarchical'           => false,
      'menu_icon'              => 'dashicons-welcome-write-blog',
      'menu_position'          => 30,
      'supports'               => array('title','editor','author','thumbnail','excerpt','comments')
      )
    );
    
    /**
     * Registamos a categoria de Revistas para o tipo de post
     */
    register_taxonomy( 'contatos_category', array( 'contatos'), array(
        'hierarchical' => true,
        'label'        => __( 'Contatos Categoria' ),
        'labels'       => array( 

        // Labels customizadas
        'name'              => _x( 'Categorias', 'taxonomy general name' ),
        'singular_name'     => _x( 'Categorias', 'taxonomy singular name' ),
        'search_items'      => __( 'Procurar Categoria' ),
        'all_items'         => __( 'Todas as Categorias' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Editar Categorias' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Adicionar Nova Categoria' ),
        'new_item_name'     => __( 'Novo Nome de Categoria' ),
        'menu_name'         => __( 'Categorias' ),
      ),
        'show_ui'           => true,
        'show_in_tag_cloud' => true,
        'query_var'         => true,
        'rewrite'           => array(
        'slug'              => 'Contatos/Categorias',
        'with_front'        => false,
        ),
      )
    );
    
    /** 
     * Esta função associa tipos de categorias com tipos de posts.
     * Aqui associamos as tags ao tipo de post.
     */
    register_taxonomy_for_object_type( 'tags', 'Contatos' );
    
  } 
  // Hook into the 'init' action
  add_action( 'init', 'create_post_type_contatos', 0 );

  ?>
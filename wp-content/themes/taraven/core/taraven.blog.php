<?php

/**
 * //
 */
if( !function_exists('blog_show_parents_list') ):
function blog_show_parents_list($post_id)
{
  $blog = get_category_by_slug('blog');
  if(!$blog)
    return;

  $categories = wp_get_post_categories( $post_id );

  // Remove category Blog from list
  if (($key = array_search($blog->term_id, $categories)) !== false) {
    unset($categories[$key]);
    // 'reindex'
    $categories = array_values($categories);
  }

  foreach($categories as $key => $c){
    $cat = get_category( $c );
    $link = get_category_link($cat->term_id);

    $size = sizeof($categories);
    if ($size>1 && $key && ($key)!=$size) {
      echo ' • ';
    }

    echo "<a href=\"{$link}\" title=\"{$cat->name}\">{$cat->name}</a>";
  }
}
endif;


/**
 * //
 */
if( !function_exists('sc_blog_banner_rodape') ):
function sc_blog_banner_rodape ($atts='', $content='')
{
  $imagem = get_field('blog_banner_rodape_imagem', 'options');
  $link = get_field('blog_banner_rodape_link', 'options');
  $title = get_field('blog_banner_rodape_title', 'options');

  // Rendering
  if( !empty($imagem) ){
    return Timber::compile('blog/shortcode.banner-rodape.twig', array('imagem' => $imagem, 'link' => $link, 'title' => $title));
  } else {
    return false;
  }
}
add_shortcode('blog-banner-rodape', 'sc_blog_banner_rodape');
endif;


/**
 * Advanced Custom Filds for Blog
 */
if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array (
  'key' => 'group_56b4a834355e1',
  'title' => 'Blog',
  'fields' => array (
    array (
      'key' => 'field_56b4a8413ea2d',
      'label' => 'Banner Rodape',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
    ),
    array (
      'key' => 'field_56b4a8543ea2e',
      'label' => '',
      'name' => 'blog_banner_rodape_imagem',
      'type' => 'image',
      'instructions' => 'Recomendado: 750x120',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'url',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => 200,
      'min_height' => 100,
      'min_size' => '',
      'max_width' => 750,
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
    array (
      'key' => 'field_56b4ab4d8664a',
      'label' => 'Titulo',
      'name' => 'blog_banner_rodape_title',
      'type' => 'text',
      'instructions' => 'Titulo usado como "ALT e TITLE" para a imagem/link',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_56b4a8623ea2f',
      'label' => 'Link',
      'name' => 'blog_banner_rodape_link',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_56b4ac16be7d2',
      'label' => 'Lateral',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
    ),
    array (
      'key' => 'field_56b4ac966461c',
      'label' => 'Galeria',
      'name' => 'blog_sidebar_galeria',
      'type' => 'gallery',
      'instructions' => 'Tamanho extao de 350x240',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => '',
      'max' => '',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => 350,
      'min_height' => 240,
      'min_size' => '',
      'max_width' => 350,
      'max_height' => 240,
      'max_size' => '',
      'mime_types' => '',
    ),
    array (
      'key' => 'field_56b4b068e3b70',
      'label' => 'Social',
      'name' => 'blog_sidebar_social',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => '',
      'max' => '',
      'layout' => 'table',
      'button_label' => 'Adicionar Linha',
      'sub_fields' => array (
        array (
          'key' => 'field_56b4b07de3b71',
          'label' => 'Logo',
          'name' => 'logo',
          'type' => 'image',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'url',
          'preview_size' => 'thumbnail',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array (
          'key' => 'field_56b4b089e3b72',
          'label' => 'Link',
          'name' => 'link',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        array (
          'key' => 'field_56b4b08fe3b73',
          'label' => 'Titulo',
          'name' => 'title',
          'type' => 'text',
          'instructions' => 'Aparece como ALT e TITLE da imagem/link',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options-blog',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_56fbcc0931f63',
  'title' => 'Blog - Post',
  'fields' => array (
    array (
      'key' => 'field_56fbcc2112843',
      'label' => 'Imagem Destaque',
      'name' => 'imagem_destaque',
      'type' => 'image',
      'instructions' => 'Tamanho exato de 230x230',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'url',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => 230,
      'min_height' => 230,
      'min_size' => '',
      'max_width' => 230,
      'max_height' => 230,
      'max_size' => '',
      'mime_types' => '',
    ),
    array (
      'key' => 'field_56fbcc2d12844',
      'label' => 'Resumo',
      'name' => 'resumo',
      'type' => 'wysiwyg',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'full',
      'media_upload' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_category',
        'operator' => '==',
        'value' => 'category:blog',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'acf_after_title',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));
endif;
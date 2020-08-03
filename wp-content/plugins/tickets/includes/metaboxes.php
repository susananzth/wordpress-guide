<?php
if(! defined('ABSPATH')) exit;
add_action( 'admin_init', 'ticket_add_metaboxes', 1 );

function ticket_add_metaboxes()
{
    add_meta_box(
         'ticket_meta_box_name'
        ,'Respuestas'
        ,'render_meta_box_content'
        ,'tickets'
        ,'normal'
        ,'high'
    );
}

function render_meta_box_content($post)
{
  wp_nonce_field(basename(__FILE__), 'ticket_nonce');
  ?>
    <table class="form-table">
      <tr>
        <th class="row-title">
          <h2>Ticket de soporte</h2>
        </th>
      </tr>
      <tr>
        <th class="row-title">
          <label for="name">Nombre completo:</label>
        </th>
        <td>
          <input value="<?php echo esc_attr(get_post_meta($post->ID, 't_name', true)); ?>" type="text" id="name" name="t_name" placeholder="Su nombre" class="regular'text">
        </td>
      </tr>
      <tr>
        <th class="row-title">
          <label for="email">Correo electrónico:</label>
        </th>
        <td>
          <input value="<?php echo esc_attr(get_post_meta($post->ID, 't_email', true)); ?>" type="email" id="email" name="t_email" placeholder="Ej: correo@ejemplo.com" class="regular'text">
        </td>
      </tr>
      <tr>
        <th class="row-title">
          <label for="type">Tipo de solicitud:</label>
        </th>
        <td>
          <?php $selected = esc_attr(get_post_meta($post->ID, 't_type', true)); ?>
          <select id="type" name="t_type" class="postbox">
            <option <?php selected($selected, 'Seleccione'); ?> value="Seleccione">Seleccione...</option>
            <option <?php selected($selected, 'Consulta'); ?> value="Consulta">Consulta</option>
            <option <?php selected($selected, 'Solicitud'); ?> value="Solicitud">Solicitud</option>
            <option <?php selected($selected, 'Reclamo'); ?> value="Reclamo">Reclamo</option>
          </select>
        </td>
      </tr>
      <tr>
        <th class="row-title">
          <label for="title">Título:</label>
        </th>
        <td>
          <input value="<?php echo esc_attr(get_post_meta($post->ID, 't_title', true)); ?>" type="text" id="title" name="t_title" class="regular'text">
        </td>
      </tr>
      <tr>
        <th class="row-title">
          <label for="content">Contenido:</label>
        </th>
        <td>
          <textarea value="<?php echo esc_attr(get_post_meta($post->ID, 't_content', true)); ?>" id="content" name="t_content" rows="8" cols="80" placeholder="Describa detalladamente su solicitud..."></textarea>
        </td>
      </tr>
    </table>
  <?php
}

// Guardo los campos del metaboxes
function ticket_save_metaboxes($post_id, $post, $update){
  if(!isset($_POST['ticket_nonce']) || !wp_verify_nonce($_POST['ticket_nonce'], basename(__FILE__))){
    return $post_id;
  }
  if(!current_user_can('edit_post', $post_id)){
    return $post_id;
  }
  if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
    return $post_id;
  }
  $name = $email = $type = $title = $content = '';
  if(isset( $_POST['t_name']) ){
    $name = sanitize_text_field( $_POST['t_name'] );
  }
  update_post_meta($post_id, 't_name', $name);

  if(isset( $_POST['t_email']) ){
    $email = sanitize_email( $_POST['t_email'] );
  }
  update_post_meta($post_id, 't_email', $email);

  if(isset( $_POST['t_type']) ){
    $type = sanitize_text_field( $_POST['t_type'] );
  }
  update_post_meta($post_id, 't_type', $type);

  if(isset( $_POST['t_title']) ){
    $title = sanitize_text_field( $_POST['t_title'] );
  }
  update_post_meta($post_id, 't_title', $title);

  if(isset( $_POST['t_content']) ){
    $content = sanitize_textarea_field( $_POST['t_content'] );
  }
  update_post_meta($post_id, 't_content', $content);

}
add_action('save_post', 'ticket_save_metaboxes', 10, 3);

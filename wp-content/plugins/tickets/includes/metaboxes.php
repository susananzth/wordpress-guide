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

function render_meta_box_content()
{
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
          <input type="text" id="name" name="name" placeholder="Su nombre" class="regular'text">
        </td>
      </tr>
      <tr>
        <th class="row-title">
          <label for="email">Correo electrónico:</label>
        </th>
        <td>
          <input type="text" id="email" name="email" placeholder="Ej: correo@ejemplo.com" class="regular'text">
        </td>
      </tr>
      <tr>
        <th class="row-title">
          <label for="type">Tipo de solicitud:</label>
        </th>
        <td>
          <select id="type" name="type" class="postbox">
            <option value="">Consulta</option>
            <option value="">Solicitud</option>
            <option value="">Reclamo</option>
          </select>
        </td>
      </tr>
      <tr>
        <th class="row-title">
          <label for="title">Título:</label>
        </th>
        <td>
          <input type="text" id="title" name="title" class="regular'text">
        </td>
      </tr>
      <tr>
        <th class="row-title">
          <label for="content">Contenido:</label>
        </th>
        <td>
          <textarea id="content" name="content" rows="8" cols="80" placeholder="Describa detalladamente su solicitud..."></textarea>
        </td>
      </tr>
    </table>
  <?php
}

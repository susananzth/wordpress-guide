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
          <h2>A;ade las respuestas aqui</h2>
        </th>
      </tr>
    </table>
  <?php
}

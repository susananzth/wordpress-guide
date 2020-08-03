<?php
if(! defined('ABSPATH')) exit;
function ticket_create_role(){
  add_role('ticket', 'Soporte');
}
function ticket_remove_role(){
  remove_role('ticket', 'Soporte');
}

/*
function ticket_add_capabilities() {

	$roles = array( 'administrator', 'supervisor', 'agente' );

	foreach( $roles as $role ) {
		$role = get_role( $role );
		$role->add_cap( 'read' );
		$role->add_cap( 'edit_tickets' );
		$role->add_cap( 'publish_tickets' );
		$role->add_cap( 'edit_published_tickets' );

	}

	$manager_roles = array( 'administrator', 'supervisor' );

	foreach( $manager_roles as $role ) {
		$role = get_role( $role );
		$role->add_cap( 'read_private_tickets' );
		$role->add_cap( 'edit_others_tickets' );
		$role->add_cap( 'edit_private_tickets' );
		$role->add_cap( 'delete_tickets' );
		$role->add_cap( 'delete_published_tickets' );
		$role->add_cap( 'delete_private_tickets' );
		$role->add_cap( 'delete_others_tickets' );
	}

}

function ticket_remove_capabilities() {

	$manager_roles = array( 'administrator', 'supervisor' );

	foreach( $manager_roles as $the_role ) {
		$role = get_role( $the_role );
		$role->remove_cap( 'read' );
		$role->remove_cap( 'edit_tickets' );
		$role->remove_cap( 'publish_tickets' );
		$role->remove_cap( 'edit_published_tickets' );
		$role->remove_cap( 'read_private_tickets' );
		$role->remove_cap( 'edit_others_tickets' );
		$role->remove_cap( 'edit_private_tickets' );
		$role->remove_cap( 'delete_tickets' );
		$role->remove_cap( 'delete_published_tickets' );
		$role->remove_cap( 'delete_private_tickets' );
		$role->remove_cap( 'delete_others_tickets' );
	}

}*/

 ?>

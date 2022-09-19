<?php 

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 */
$routes = array(
		'/' => 'index#index', 
		'/view' => 'view#viewTask', 
		'/add' => 'create#addTask', 
		'/remove' => 'remove#remove', 
		'/update' => 'update#editTask', 
);

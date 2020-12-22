<?php

/**
 * Index Front Controller Page
 * @file: index.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 08-29-2020
 */

/**
 * Front Controller / Router
 */
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config.php';


//Security. Only allow request for these pages 
$allowed = array(
	'about'=>'about',
	'contact'=>'contact',
	'profile'=>'profile',
	'services'=>'services',
	'index'=>'index',
	'portfolio'=>'portfolio',
	'register'=>'register',
	'login'=>'login',
	'logout'=>'logout',
	'project'=>'project',
	'404'=>'404',
	'admin'=>'admin/index',
	'admin/users'=>'admin/users',
	'admin/categories'=>'admin/categories',
	'admin/comments'=>'admin/comments',
	'admin/projects'=>'admin/projects',
	'admin/addProject'=>'admin/addProject',
	'admin/editProject'=>'admin/editProject',
	'admin/deleteProject'=>'admin/deleteProject'
);

$pair = explode('?', $_SERVER['REQUEST_URI']);
$req = $pair[0];

/*
 *SEO URL cleaning (To be completed)
 */
$req = trim($req, '/');
//dd($req);

//Determine what page user is looking for 
//Determine what controller handles that page 
if(empty($req)){

	$controller = 'index';

} else{
	// We have to secure this 
	// (in_array($req, $allowed)) -> unassociate array
	if(array_key_exists($req, $allowed)){

		$controller = $req;

	} else{
		$controller = '404';// Error not found
	}
}

//Delegate control to that controller

$path = __DIR__ . '/../app/Controllers/';

//$file = $path . $controller . '.php';
$file = $path . $allowed[$controller]. '.php';

if(file_exists($file)){
	require $file;
} else{
	require $path . '404.php';
}
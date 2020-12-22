<?php

/**
 * Admin Projects Page
 * @file: projects.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-25-2020
 */

use App\Models\BaseModel;
use App\Models\ProjectModel;

//$user_id = $_SESSION['user_id'] ?? 0;
$isAdmin = $_SESSION['is_Admin'] ?? 0;

//Checking if User is admin
if(!$isAdmin) {
    flash('error', 'There was something wrong please login as Admin');
    header('Location: /login'); //GET request
    die;
}

// Any other code goes here..
//Index Variable Declearation
$title = "Projects";
$slug = 'projects';
$dec_first = 'PRO';
$dec_second = 'JECTS';

//Creating an Object of the ProjectModel
$projectModel = new ProjectModel();

//Retriving all projects
$projects = $projectModel->all();

//Getting search from GET and asigning to a variable
if (isset($_GET['s'])) {
	$search = $_GET['s'];
}

/*Handeling incorrect url and redirecting to the error page*/
if (!empty($search)) {

	$projects = $projectModel->getProjectBySearch($search);

} else {
	$projects = $projectModel->all();
}

/*Handeling incorrect project id and redirecting to the error page*/
if(!$projects) {
	require __DIR__ . '/../Views/404.php';
	die;
}

// Last thing on each page
//Including index.php
require __DIR__ . '/../../Views/admin/projects.php';
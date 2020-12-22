<?php

/**
 * Admin Edit Projects Page
 * @file: editProject.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-26-2020
 */

use App\Models\BaseModel;
use App\Models\CategoryModel;
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
$dec_first = 'EDIT';
$dec_second = 'PROJECTS';

//Creating an Object of the CategoryModel
$categoryModel = new CategoryModel();

//Retriving all category records
$categories = $categoryModel->all();

//Checking if it a POST request
if('POST' === $_SERVER['REQUEST_METHOD']) {
    require __DIR__ . '/edit.php';
    die;
}

//Condition to chech if a project_id was passed
if(empty($_GET['project_id'])) {
	flash('error', 'No changes were applied to the project!');
	header("Location: /admin/projects");
    die;
}

//Creating an Object of the ProjectModel
$projectModel = new ProjectModel();

//Retriving a specific project            
$post = $projectModel->one($_GET['project_id']);

/*Handeling incorrect project id and redirecting to the error page*/
if(!$post) {
	require __DIR__ . '/../../Views/404.php';
	die;
}

// Last thing on each page
//Including index.php
require __DIR__ . '/../../Views/admin/editProject.php';
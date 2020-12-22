<?php

/**
 * Portfolio Page
 * @file: portfolio.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 08-19-2020
 */

use App\Models\BaseModel;
use App\Models\ProjectModel;
use App\Models\CategoryModel;

// Any other code goes here..
//Portfolio Variable Declearation
$title = "Portfolio";
$slug = 'portfolio';
$dec_first = 'PORT';
$dec_second = 'FOLIO';

$projectModel = new ProjectModel();
$projects = $projectModel->all();
//dd($projectModel->getProjectBySearch('wE'));

$categoryModel = new CategoryModel();
$categories = $categoryModel->all();
//dd($categories);

//Getting category_id from GET and asigning to a variable
if (isset($_GET['category_id'])) {
	$category_id = $_GET['category_id'];
}

//Getting search from GET and asigning to a variable
if (isset($_GET['s'])) {
	$search = $_GET['s'];
}

/*Handeling incorrect url and redirecting to the error page*/
if (!empty($search)) {

	$projects = $projectModel->getProjectBySearch($search);
	$title = 'Search: '.htmlspecialchars($search);

} elseif (!empty($category_id)) {

	$projects = $projectModel->allProjectsByCategory($category_id);
	if ($categoryModel->one($category_id)) {
		$category_name = $categoryModel->one($category_id)['name'];
		$title = 'Project by Category: '.htmlspecialchars($category_name);
	}
	

} else {
	$projects = $projectModel->all();
	$title = 'Projects: ';
}

/*Handeling incorrect project id and redirecting to the error page*/
if(!$projects) {
	require __DIR__ . '/../Views/404.php';
	die;
}

// Last thing on each page
//Including portfolio.php
require __DIR__ . '/../Views/portfolio.php';
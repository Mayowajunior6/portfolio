<?php

/**
 * Portfolio Detail Page
 * @file: portfolio_detail.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-23-2020
 */

use App\Models\BaseModel;
use App\Models\ProjectModel;
use App\Models\CommentModel;
use App\Lib\Validator;

// Any other code goes here..
//Portfolio Variable Declearation
$title = "Portfolio";
$slug = 'portfolio';
$dec_first = 'PROJECT';
$dec_second = 'DETAILS';

$project_id = $_GET['project_id'] ?? 0;

/*Handeling incorrect url and redirecting to the error page*/
if ($project_id < 1 || !$project_id) {
	require __DIR__ . '/../Views/404.php';
	die;
}

//Creating a object of ProjectModel
$projectModel = new ProjectModel();

//Retriving a specific project
$project = $projectModel->one($project_id);

/*Handeling incorrect project id and redirecting to the error page*/
if(!$project) {
	require __DIR__ . '/../Views/404.php';
	die;
}

//Creating a object of CommentModel
$commentModel = new CommentModel();

//Getting all comments related to a specific project
$comments = $commentModel->allCommentProject($project_id);

//POST request check
if('POST' === $_SERVER['REQUEST_METHOD']) {
	//Creating an object of Validator Class
	$v = new Validator($_POST);
	$required = array(
	    'comment'
	);

	$v->required($required);

	if(count($v->error()) === 0) {
		$commentModel->saveComment($_POST);
		$comments = $commentModel->allCommentProject($project_id);
		flash('success', 'Comment is successfully submitted.');
	    header("Location: /project?project_id=$project_id");
	    die;
	}

	flash('error', 'Please add a valid comment to submit.');
	header("Location: /project?project_id=$project_id");
	
}


// Last thing on each page
//Including portfolio.php
require __DIR__ . '/../Views/project.php';
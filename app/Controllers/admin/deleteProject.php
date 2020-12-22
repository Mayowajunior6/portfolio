<?php

/**
 * Admin Edit Projects Page
 * @file: editProject.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-26-2020
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
//Condition to chech if a project_id was passed
if(empty($_GET['project_id'])) {
	flash('error', 'No changes were applied to the project!');
	header("Location: /admin/projects");
    die;
}

//Creating an Object of the ProjectModel
$projectModel = new ProjectModel();

//Deleting a project            
$count = $projectModel->deleteProject($_GET['project_id']);

//Chect if the record was deleted
if($count > 0) {
	flash('success', 'Project was successfully deleted!');
	header("Location: /admin/projects");
    die;
} else {
	flash('error', 'Error deleting project!');
	header("Location: /admin/projects");
    die;
}
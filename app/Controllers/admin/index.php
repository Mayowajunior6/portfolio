<?php

/**
 * Admin Main Page
 * @file: index.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-25-2020
 */

use App\Models\BaseModel;
use App\Models\ProjectModel;
use App\Models\UserModel;
use App\Models\CommentModel;
use App\Models\CategoryModel;

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
$title = "Home";
$slug = 'home';
$dec_first = 'Admin';
$dec_second = 'DASHBOARD';

//Creating an object of of the Modules Class
$categoryModel = new CategoryModel();
$projectModel = new ProjectModel();
$userModel = new UserModel();
$commentModel = new CommentModel();

//Calling the functions using the created objects
$categories = $categoryModel->all();
$projects = $projectModel->all();
$users = $userModel->all();
$comments = $commentModel->all();
$logs = $userModel->allLog();
$commentedProjects = $commentModel->allCommentedProject();
$allViews = $projectModel->allViews();
$maxPriceProject = $projectModel->maxPriceProject();
$avgPriceProject = $projectModel->avgPriceProject();


// Last thing on each page
//Including index.php
require __DIR__ . '/../../Views/admin/index.php';
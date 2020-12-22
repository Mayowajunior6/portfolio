<?php

/**
 * Admin Add Projects Page
 * @file: add.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-25-2020
 */

use App\Models\BaseModel;
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
$title = "Projects";
$slug = 'projects';
$dec_first = 'ADD';
$dec_second = 'PROJECTS';

//Creating a object of CategoryModel
$categoryModel = new CategoryModel();

//Retriving all category records
$categories = $categoryModel->all();

//Checking if it a POST request
if('POST' === $_SERVER['REQUEST_METHOD']) {
    require __DIR__ . '/add.php';
    die;
}

// Last thing on each page
//Including index.php
require __DIR__ . '/../../Views/admin/addProject.php';
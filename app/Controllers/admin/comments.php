<?php

/**
 * Admin Comments Page
 * @file: comments.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-25-2020
 */

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
$title = "Comments";
$slug = 'comments';
$dec_first = 'COM';
$dec_second = 'MENTS';



// Last thing on each page
//Including index.php
require __DIR__ . '/../../Views/admin/users.php';
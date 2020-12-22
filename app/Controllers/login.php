<?php

/**
 * Login Page
 * @file: login.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-02-2020
 */

// Any other code goes here..
//Contact Variable Declearation
$title = "Login";
$slug = 'login';
$dec_first = 'LOG';
$dec_second = 'IN';

//Checking if it a POST request
if('POST' === $_SERVER['REQUEST_METHOD']) {
    require __DIR__ . '/auth.php';
    die;
}

// Last thing on each page
//Including contact.php
require __DIR__ . '/../Views/login.php';
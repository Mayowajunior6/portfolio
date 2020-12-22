<?php

/**
 * Register Page
 * @file: register.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 08-25-2020
 */

// Any other code goes here..
//Contact Variable Declearation
$title = "Register";
$slug = 'register';
$dec_first = 'REGI';
$dec_second = 'STER';

//POST request check
if('POST' === $_SERVER['REQUEST_METHOD']) {
    require __DIR__ . '/addUser.php';
    die;
}

// Last thing on each page
//Including contact.php
require __DIR__ . '/../Views/register.php';
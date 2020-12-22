<?php

/**
 * Config Page
 * @file: Config.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 08-19-2020
 */

//Overiding the default server settings to render PHP errors
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

ob_start(); // start output buffering
session_start(); // start session

// Extract errors and post values from session
$errors = $_SESSION['errors'] ?? [];
$post = $_SESSION['post'] ?? [];
$flash = $_SESSION['flash'] ?? [];

// Clear errors and post values from session
// so that they do not linger
unset($_SESSION['errors']);
unset($_SESSION['post']);
unset($_SESSION['flash']);

//Defining the Project Name
define('PROJECT_NAME', 'MO2');

require __DIR__ . '/connect.php';

//Make sure MySQL is set to show exceptions
$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

App\Models\BaseModel::init($dbh);


//Including function.php
require __DIR__ . '/functions.php';

//Including validation.php
require __DIR__ . '/validators.php';

$logger = new App\Lib\DatabaseLogger($dbh);
logVisit($logger);

$file = __DIR__."/logs/events.log";
$logger = new App\Lib\FileLogger($file);
logVisit($logger);

//csrf (Cross Site Request Forgery) check
if('POST' === $_SERVER['REQUEST_METHOD']) {
    if(empty($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Fatal error! CSRF token mismatch!');
    }
}
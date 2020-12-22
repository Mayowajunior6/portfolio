<?php

/**
 * Utility function Page
 * @file: function.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 08-19-2020
 */


/**
 * Simple var dumper and continue script 
 * @param  Mixed $var Variable to dump
 * @return Void
 */
function dc($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}


/**
 * Simple var dumper and die
 * @param  Mixed $var Variable to dump
 * @return Void
 */
function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die;
}

/**
 * Sanitize a string for output
 * @param  string $str 
 * @return string
 */
function e($str)
{
    return htmlentities($str, ENT_QUOTES, "UTF-8", "");
}

/**
 * Flash message for success and error
 * @param  string $type
 * @param  string $message
 * @return void
 */
function flash($type, $message)
{
    $_SESSION['flash'][] = [$type, $message];
}

/**
 * logVisit Function to structure the Log
 * @param  App\Lib\ILogger $logger
 * @return void
 */
function logVisit(App\Lib\ILogger $logger)
{
	$event = date('y-m-d')." ".date('h:i:s')."|"
			 .$_SERVER['HTTP_USER_AGENT']."|"
			 .$_SERVER['REQUEST_METHOD']."|"
			 .$_SERVER['REQUEST_URI']."|"
			 .http_response_code();

	$logger->write($event);
			 
}

/**
 * setTarget Function to store targeted url
 * @return string
 */
function setTarget()
{
    $_SESSION['target'] = $_SERVER['REQUEST_URI'];
    return '/login'; 
}

/**
 * [Cross Site Request Forgery]
 * @return string $setToken
 */
function csrfToken()
{
    //csrf (Cross Site Request Forgery)
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    $setToken = $_SESSION['csrf_token'];
    return $setToken;
}
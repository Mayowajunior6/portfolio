 <?php

/**
 * Add User Controller
 * @file: addUser.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 08-25-2020
 */

use App\Models\BaseModel;
use App\Models\UserModel;
use App\Lib\Validator;

//Creating an object of Validator Class
$v = new Validator($_POST);

$required = array(
    'first_name',
    'last_name',
    'email',
    'phone',
    'age',
    'street',
    'city',
    'postal',
    'province',
    'country',
    'password',
    'confirm_password'
);

$v->required($required);
$v->email('email');
$v->name('first_name');
$v->name('last_name');
$v->phone('phone');
$v->num('age', 1, 120);
$v->postal('postal');
$v->matches('password', 'confirm_password', 'password');
$v->len('street', 3, 255);
$v->len('city', 3, 255);
$v->len('province', 3, 255);
$v->len('country', 3, 255);

$userModel = new UserModel();
// Checking if Email already exist
$emailExist = $userModel->checkEmail($v->post());
//$emailExist = $v->checkEmail($v->post(), $dbh);
if ($emailExist) {
    flash('error', 'Email already exist!');
    header('Location: /register');
    die;
}

if (count($v->error()) > 0) {

    // If there are errors, save errors and post
    // values to session, and redirect back to form
    $_SESSION['post'] = $v->post();
    $_SESSION['errors'] = $v->error();
    header('Location: /register');
    // When you do a header redirect, you MUST die on the next line
     die;

} else {
    
    // If there are no errors, save to database and
    // redirect to the profile page
    
    // 1. Create connection (see config file)
    
    // Run all DB code inside try/catch block
    // in order to catch and display Exceptions
    try {


        $user_id = $userModel->saveUser($v->post());

       // $user_id = saveUser($v->post(), $dbh);

        $_SESSION['user_id'] = $user_id;
        // precaution against session hijacking
        session_regenerate_id();
        // Set a message a message for the user
        flash('success', 'You have successfully registered!');
        // Redirect to profile page
        header('Location: /profile');
        // in JS: window.location = 03_form_1_success.php
        // When you do a header redirect, you MUST die on the next line
        die;

    } catch(Exception $e) {

        echo $e->getMessage();
        die;

    }
}

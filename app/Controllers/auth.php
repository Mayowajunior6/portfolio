 <?php

/**
 * Authentication Controller
 * @file: auth.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-02-2020
 */

use App\Models\BaseModel;
use App\Models\UserModel;
use App\Lib\Validator;

//Creating an object of Validator Class
$v = new Validator($_POST);

$required = array(
    'email',
    'password'
);

$v->required($required);

if (count($v->error()) > 0) {

    // If there are errors, save errors and post
    // values to session, and redirect back to form
    $_SESSION['post'] = $v->post();
    $_SESSION['errors'] = $v->error();
    header('Location: /login');
    // When you do a header redirect, you MUST die on the next line
     die;

} else {
    
    // If there are no errors, save to database and
    // redirect to the success page
    
    // 1. Create connection (see config file)
    
    // Run all DB code inside try/catch block
    // in order to catch and display Exceptions
    try {

        $userModel = new UserModel();

        $user = $userModel->authUser($v->post());
        $isAdmin = $userModel->checkPrivilege($v->post());
        
        if (password_verify($_POST['password'], $user['password'])) {
            // Logging in the user
            flash('success', 'You have successfully logged in!');
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['is_Admin'] = $isAdmin;
            session_regenerate_id(); // protection against session hijacking
            //Checking Uesr priviledge
            if ($isAdmin) {
                header('Location: /admin');
                die;
            }

            //Target Redirecting
            if (!empty($_SESSION['target'])) {
                $target = $_SESSION['target'];
                unset($_SESSION['target']);
                header('Location: '.$target);
                die;
            }

            header('Location: /profile'); // GET request
            // in JS: window.location = 03_form_1_success.php
            // When you do a header redirect, you MUST die on the next line
            die;
        } 

        flash('error', 'There was something wrong with your credentials.');
        header('Location: /login'); //GET request
        die;

    } catch(Exception $e) {

        echo $e->getMessage();
        die;

    }
}
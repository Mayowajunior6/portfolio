 <?php

/**
 * Logout Controller
 * @file: logout.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-03-2020
 */

if(!empty($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    unset($_SESSION['is_Admin']);
    session_regenerate_id();
    flash('success', 'You have successfully logged out!');
} else {
    flash('error', 'You cannot log out because you are not logged in!');
}
header('Location: /login');
die;

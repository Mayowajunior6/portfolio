<?php

/**
 * Success Page
 * @file: success.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 08-19-2020
 */

use App\Models\BaseModel;
use App\Models\UserModel;
use App\Models\CommentModel;

$user_id = $_SESSION['user_id'] ?? 0;

//Checking if user is logged in
if($user_id === 0) {
    flash('error', 'There was something wrong please login or register.');
    header('Location: /login'); //GET request
    die;
}

//Creating a object of UserModel
$userModel = new UserModel();

//Retriving user record
$user = $userModel->one($user_id);
//$user = getUser($user_id, $dbh);

//Creating a object of CommentModel
$commentModel = new CommentModel();

//Retriving aall user comment from user
$comments = $commentModel->allUserComment($user_id);

$title = "Profile";
$slug = 'profile';
$dec_first = 'PRO';
$dec_second = 'FILE';

require __DIR__ . '/../Views/includes/header.inc.php';


?>

<?php require __DIR__ .'/../Views/includes/flash.php'; ?>
<h1>Welcome back <?=e($user['first_name'])?> </h1>
<h2>User Information:</h2>

<ul>
    <li><strong>First name</strong>: <?=e($user['first_name'])?></li>
    <li><strong>Last name</strong>: <?=e($user['last_name'])?></li>
    <li><strong>Street</strong>: <?=e($user['street'])?></li>
    <li><strong>City</strong>: <?=e($user['city'])?></li>
    <li><strong>Postal code</strong>: <?=e($user['postal_code'])?></li>
    <li><strong>Province</strong>: <?=e($user['province'])?></li>
    <li><strong>Country</strong>: <?=e($user['country'])?></li>
    <li><strong>Phone number</strong>: <?=e($user['phone'])?></li>
    <li><strong>Email</strong>: <?=e($user['email'])?></li>
    <li><strong>Age</strong>: <?=e($user['age'])?></li>
    <li><strong>Registered on</strong>: <?=e($user['created_at'])?></li>
</ul>

<h3>Comments(<?=e(count($comments))?>):</h3>

<?php foreach($comments as $comment => $value) : ?>
  <br />
  <ul>
    <li><strong>Project</strong>: 
        <a href="project?project_id=<?=e($value['project_id'])?>"> <?=e($value['title'])?>
    </li>
    <li><strong>Comment</strong>: <?=e($value['comment'])?></li>
    <li><strong>Created At</strong>: <?=e($value['created_at'])?></li>
  </ul>
<?php endforeach; ?>

<?php


require __DIR__ . '/../Views/includes/footer.inc.php';


?>
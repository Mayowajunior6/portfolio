<?php

/**
 * Admin Add Projects Page
 * @file: add.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-25-2020
 */

use App\Models\BaseModel;
use App\Models\ProjectModel;

//Passing $_POST to a variable
$post = $_POST;

//Creating an Object of the ProjectModel
$projectModel = new ProjectModel();


try {
        //Creating a project
        $project_id = $projectModel->saveProject($post);

        // Set a message a message for the user
        flash('success', 'You have successfully added a project!');
        // Redirect to profile page
        header('Location: /admin/addProject');
        // in JS: window.location = 03_form_1_success.php
        // When you do a header redirect, you MUST die on the next line
        die;

    } catch(Exception $e) {

        echo $e->getMessage();
        die;

    }
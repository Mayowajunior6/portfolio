<?php

/**
 * Admin Add Project View Page
 * @file: add.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-25-2020
 */

//Loading the header
require __DIR__ . '/includes/header.inc.php';

// Load config, and start session
// require __DIR__ . '/../config.php';

//dc($errors);
//dc($post);


?>

<?php require __DIR__ .'/includes/flash.php'; ?>
<!-- Content Section of the page -->
<section id="contact_section">
  <div class="contact_content">
    <!-- Add Projects -->
    <form id="infoForm" name="infoForm" autocomplete="on" method="post" action="/admin/addProject" novalidate>

      <fieldset>
        <legend style="color: #0048ff">Add Project</legend>
        <div id="info">
          <input type="hidden" name="csrf_token" value="<?=csrfToken()?>" />
          <p>
            <label for="title"> Title:</label>
            <input type="text" required
                   id="title" 
                   name="title" 
                   value="<?=e($post['title'] ?? '')?>" 
                   placeholder="Enter title"
                   maxlength="20"
                   size="30"/>
          </p>
          <p>
            <label for="categories_id"> Category:</label>
            <select id="categories_id" name="categories_id" style="color: #000;">
              <?php foreach($categories as $category => $value) : ?>
                <option value="<?=e($value['category_id'])?>" style="color: #000;"><?=e($value['name'])?></option>
              <?php endforeach; ?>  
            </select>
          </p>
          <p>
            <label for="description"> Description:</label>
            <input type="text" required
                   id="description"  
                   name="description" 
                   value="<?=e($post['description'] ?? '')?>"
                   placeholder="Enter description"
                   maxlength="20"
                   size="30"/>
          </p>
          <p>
            <label for="detailed_description"> Detailed Description:</label>
            <textarea rows="4" cols="30"
                   id="detailed_description"  
                   name="detailed_description" 
                   value="<?=e($post['detailed_description'] ?? '')?>"
                   placeholder="Enter detailed description"></textarea>
          </p>
          <p>
            <label for="type"> Type:</label>
            <input type="text" required
                   id="type"
                   name="type"
                   value="<?=e($post['type'] ?? '')?>"
                   placeholder="Enter type"
                   maxlength="30"
                   size="30"/>
          </p>
          <p>
            <label for="technology"> Technology:</label>
            <input type="text" required
                   id="technology"
                   name="technology"
                   value="<?=e($post['technology'] ?? '')?>"
                   placeholder="Enter technology"
                   maxlength="30"
                   size="30"/>
          </p>
          <p>
            <label for="image"> Image:</label>
            <input type="text" required
                   id="image"
                   name="image"
                   value="<?=e($post['image'] ?? '')?>"
                   placeholder="Enter image"
                   maxlength="30"
                   size="30"/>
          </p>
          <p>
            <label for="price"> Price:</label>
            <input type="text" required
                   id="price"
                   name="price"
                   value="<?=e($post['price'] ?? '')?>"
                   placeholder="Enter price"
                   maxlength="30"
                   size="30"/>
          </p>
          <p>
            <label for="status"> Status:</label>
            <select id="status" name="status" style="color: #000;">
              <option value="deployed" style="color: #000;">deployed</option>
              <option value="development" style="color: #000;">development</option>
            </select>
            <span class="errors"><?=e($errors['status'][0] ?? '') ?></span>
          </p>

          <p>
            <label for="view"> View:</label>
            <input type="text" required
                   id="view"
                   name="view"
                   value="<?=e($post['view'] ?? '')?>"
                   placeholder="Enter view"
                   maxlength="30"
                   size="30"/>
          </p>
          <p>
            <label for="start_date"> Start Date:</label>
            <input type="datetime-local" required 
                   id="start_date"
                   name="start_date" value="<?=e($post['start_date'] ?? '')?>"
                   min="2020-09-23T00:00" max="2023-06-14T00:00">
          </p>
          <p>
            <label for="end_date"> End Date:</label>
            <input type="datetime-local" required 
                   id="end_date"
                   name="end_date" value="<?=e($post['end_date'] ?? '')?>"
                   min="2020-09-23T00:00" max="2023-06-14T00:00">
          </p>

        </div>

        <p class="buttons">
          <input type="submit" value="Add Project" />
          <input type="reset" value="Reset"/>
        </p>

      </fieldset>
    </form>
  </div>
</section>

<?php


require __DIR__ . '/includes/footer.inc.php';


?>
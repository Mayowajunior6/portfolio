<?php

/**
 * Login View Page
 * @file: login.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-02-2020
 */

//Loading the header
require __DIR__ . '/includes/header.inc.php';

?>

<?php require __DIR__ .'/includes/flash.php'; ?>
<!-- Content Section of the page -->
<section id="contact_section">
  <div class="contact_content">
    <!-- Login Section -->
    <form id="infoForm" name="infoForm" autocomplete="on" method="post" action="/login" novalidate>

      <fieldset>
        <legend style="color: #0048ff">Login</legend>
        <div id="info">
          <input type="hidden" name="csrf_token" value="<?=csrfToken()?>" />
          <p>
            <label for="email"> Email Address:</label>
            <input type="email" required
                   id="email"
                   name="email"
                   value="<?=e($post['email'] ?? '')?>"
                   placeholder="Enter your email"
                   maxlength="30"
                   size="30"/>
            <span class="errors"><?=e($errors['email'][0] ?? '') ?></span>
          </p>

          <p>
            <label for="password"> Password:</label>
            <input type="password" required
                   id="password" 
                   name="password" 
                   placeholder="Enter your Password"
                   maxlength="20"
                   size="30"/>
            <span class="errors"><?=e($errors['password'][0] ?? '') ?></span>
          </p>
        </div>

        <p class="buttons">
          <input type="submit" value="Login" />
          <input type="reset" value="Reset"/>
        </p>

      </fieldset>
    </form>
  </div>
</section>

<?php


require __DIR__ . '/includes/footer.inc.php';


?>
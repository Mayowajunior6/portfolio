<?php

/**
 * Register View Page
 * @file: register.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 08-25-2020
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
    <!-- User registration form -->
    <form id="infoForm" name="infoForm" autocomplete="on" method="post" action="/register" novalidate>

      <fieldset>
        <legend style="color: #0048ff">Registration</legend>
        <div id="info">
          <input type="hidden" name="csrf_token" value="<?=csrfToken()?>" />
          <p>
            <label for="first_name"> First Name:</label>
            <input type="text" required
                   id="first_name" 
                   name="first_name" 
                   value="<?=e($post['first_name'] ?? '')?>" 
                   placeholder="Enter your first name"
                   maxlength="20"
                   size="30"/>
            <span class="errors"><?=e($errors['first_name'][0] ?? '') ?></span>
          </p>
          <p>
            <label for="last_name"> Last Name:</label>
            <input type="text" required
                   id="last_name"  
                   name="last_name" 
                   value="<?=e($post['last_name'] ?? '')?>"
                   placeholder="Enter your last name"
                   maxlength="20"
                   size="30"/>
            <span class="errors"><?=e($errors['last_name'][0] ?? '') ?></span>
          </p>
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
            <label for="phone"> Phone Number:</label>
            <input type="tel" required
                   id="phone"
                   name="phone"
                   value="<?=e($post['phone'] ?? '')?>"
                   placeholder="Enter your phone number"
                   maxlength="12"
                   size="30"/>
            <span class="errors"><?=e($errors['phone'][0] ?? '') ?></span>
          </p>
          <p>
            <label for="age"> Age:</label>
            <input type="text" required
                   id="age" 
                   name="age" 
                   value="<?=e($post['age'] ?? '')?>"
                   placeholder="Enter your Age"
                   maxlength="20"
                   size="30"/>
            <span class="errors"><?=e($errors['age'][0] ?? '') ?></span>
          </p>
          <p>
            <label for="street"> Street:</label>
            <input type="text" required
                   id="street" 
                   name="street" 
                   value="<?=e($post['street'] ?? '')?>"
                   placeholder="Enter your Street"
                   maxlength="20"
                   size="30"/>
            <span class="errors"><?=e($errors['street'][0] ?? '') ?></span>
          </p>
          <p>
            <label for="city"> City:</label>
            <input type="text" required
                   id="city" 
                   name="city" 
                   value="<?=e($post['city'] ?? '')?>"
                   placeholder="Enter your City"
                   maxlength="20"
                   size="30"/>
            <span class="errors"><?=e($errors['city'][0] ?? '') ?></span>
          </p>
          <p>
            <label for="postal"> Postal Code:</label>
            <input type="text" required
                   id="postal" 
                   name="postal" 
                   value="<?=e($post['postal'] ?? '')?>"
                   placeholder="Enter your Postal Code"
                   maxlength="20"
                   size="30"/>
            <span class="errors"><?=e($errors['postal'][0] ?? '') ?></span>
          </p>
          <p>
            <label for="province"> Province:</label>
            <input type="text" required
                   id="province" 
                   name="province" 
                   value="<?=e($post['province'] ?? '')?>"
                   placeholder="Enter your Province"
                   maxlength="20"
                   size="30"/>
            <span class="errors"><?=e($errors['province'][0] ?? '')?></span>
          </p>
          <p>
            <label for="country"> Country:</label>
            <input type="text" required
                   id="country" 
                   name="country" 
                   value="<?=e($post['country'] ?? '')?>"
                   placeholder="Enter your Country"
                   maxlength="20"
                   size="30"/>
            <span class="errors"><?=e($errors['country'][0] ?? '') ?></span>
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
          <p>
            <label for="confirm_password"> Confirm Password:</label>
            <input type="password" required
                   id="confirm_password" 
                   name="confirm_password" 
                   placeholder="Confirm your Password"
                   maxlength="20"
                   size="30"/>
            <span class="errors"><?=e($errors['confirm_password'][0] ?? '') ?></span>
          </p>

        </div>

        <p class="buttons">
          <input type="submit" value="Register" />
          <input type="reset" value="Reset"/>
        </p>

      </fieldset>
    </form>
  </div>
</section>

<?php


require __DIR__ . '/includes/footer.inc.php';


?>
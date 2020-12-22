<?php

/**
 * Contact View Page
 * @file: contact.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 08-19-2020
 */


require __DIR__ . '/includes/header.inc.php';


?>

<!-- Content Section of the page -->
<section id="contact_section">
  <div class="contact_content">
    <form id="infoForm" name="infoForm" autocomplete="on" method="get" action="http://www.scott-media.com/test/form_display.php">
      <fieldset>
        <legend style="color: #0048ff">let's Connect</legend>
        <div id="info">
          <p>
            <label for="FirstName"> First Name:</label>
            <input type="text" required
                   id="FirstName" 
                   name="FirstName" 
                   placeholder="Enter your first name"
                   maxlength="20"
                   size="30"/>
          </p>
          <p>
            <label for="LastName"> Last Name:</label>
            <input type="text" required
                   id="LastName"  
                   name="LastName" 
                   placeholder="Enter your last name"
                   maxlength="20"
                   size="30"/>
          </p>
          <p>
            <label for="email_address"> Email Address:</label>
            <input type="email" required
                   id="email_address"
                   name="email_address"
                   placeholder="Enter your email"
                   maxlength="30"
                   size="30"/>
          </p>

          <p>
            <label for="phone_number"> Phone Number:</label>
            <input type="tel" required
                   id="phone_number"
                   name="phone_number"
                   placeholder="Enter your phone number"
                   maxlength="12"
                   size="30"/>
          </p>
          <p>
            <label for="comments"> Comment:</label>
            <textarea name="comments" id="comments" cols="32" rows="5" required="" spellcheck="false"></textarea>
          </p>
        </div>

        <p class="buttons">
          <input type="submit" value="Send Email" />
          <input type="reset" value="Reset"/>
        </p>

      </fieldset>
    </form>
  </div>
  
  <h2>CONTACT INFO:</h2>
  <div id="info_table">
    <table>
      <tr>
        <th>Technical Support:</th>
        <td>123456789</td>
      </tr>
      <tr>
        <th>Toll-free number:</th>
        <td>987654321</td>
      </tr>
      <tr>
        <th>Email:</th>
        <td>ajamu@webmail.uwinnipeg.ca</td>
      </tr>
      <tr>
        <th>Address:</th>
        <td>460 Portage Ave.</td>
      </tr>

    </table>
  </div>
</section>

<?php


require __DIR__ . '/includes/footer.inc.php';


?>
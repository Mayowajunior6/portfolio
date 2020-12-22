# Intermediate PHP Assignment 2

Second Assignment for Intermediate to PHP


#Removed code from displaying the error as a list in both register and login page:
#<?php if(count($errors) > 0) : ?>
#  <div class="errors">
#      <p>Please correct the following errors:</p>
#      <ul>
#      <?php foreach($errors as $key => $value) : ?>
#          <li><?=e($value[0] ?? '' )?></li>
#      <?php endforeach; ?>
#      </ul>
#  </div>
#<!-- End of errors -->
#<?php endif; ?>
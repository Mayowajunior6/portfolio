<?php

/**
 * Portfolio Detailed View Page
 * @file: portfolio_detail.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-23-2020
 */

require __DIR__ . '/includes/header.inc.php';

?>
<?php require __DIR__ .'/includes/flash.php'; ?>
<!-- Content Section of the page -->
<section id="portfolio_section">
  <div id="portfolio_content">

    <!-- Detailed information on selected projects -->
    <h1><?=e($project['title'])?> </h1>
    <?=e($project['description'])?>
    <div>
      <img src="/images/<?=e($project['image'])?>" alt="<?=e($project['title'])?>"/>
    </div>
    <div>
      <strong>Description</strong>: <?=e($project['detailed_description'])?>
    </div>

    <div>
      <strong>Type</strong>: <?=e($project['type'])?>
    </div>

    <div>
      <strong>Technologies</strong>: <?=e($project['technology'])?>
    </div>

    <div>
      <strong>Project Status</strong>: <?=e($project['status'])?>
    </div>

  </div>

  <!-- Comment section -->
  <h2>Comments(<?=e(count($comments))?>):</h2>
  <div id="portfolio_comment">
    <?php foreach($comments as $comment => $value) : ?>
      <br />
      <ul>
        <li><strong>Author</strong>: <?=e($value['first_name'])?></li>
        <li><strong>Comment</strong>: <?=e($value['comment'])?></li>
        <li><strong>Created At</strong>: <?=e($value['created_at'])?></li>
      </ul>
    <?php endforeach; ?>
  </div>
  <?php if(!isset($_SESSION['user_id'])) : ?>

    <a href="<?=setTarget()?>">Please Login To Comment.</a>
                    
  <?php elseif (isset($_SESSION['user_id'])) : ?>

    <div class="comment_content">
      <form id="infoForm" name="infoForm" autocomplete="on" method="post" action="/project?project_id=<?=e($project['project_id'])?>" novalidate>

        <fieldset>
          <legend style="color: #0048ff">Add Comment</legend>
          <input type="hidden" name="csrf_token" value="<?=csrfToken()?>" />
          <div id="info">
            <input type="hidden" name="user_id" value="<?=e($_SESSION['user_id'])?>" />
            <input type="hidden" name="project_id" value="<?=e($project['project_id'])?>" />
            <textarea rows="4" cols="50" name="comment" placeholder="Write comment here..."></textarea>
          </div>

          <p class="buttons">
            <input type="submit" value="Submit" />
            <input type="reset" value="Clear"/>
          </p>

        </fieldset>
      </form>
    </div>
                    
  <?php endif ?>
  
</section>

<?php


require __DIR__ . '/includes/footer.inc.php';


?>
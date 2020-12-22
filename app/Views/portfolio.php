<?php

/**
 * Portfolio View Page
 * @file: portfolio.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 08-19-2020
 */

require __DIR__ . '/includes/header.inc.php';

?>

<!-- Content Section of the page -->
<section id="portfolio_section">
  <div id="info" class="search" style="float: right;">
    <form id="infoForm" name="infoForm" action="/portfolio" method="get" autocomplete="off" novalidate>
      <fieldset>
        <p style="padding-bottom: 0px;">
          <input id="s" type="text" name="s" placeholder="Enter keyword" maxlength="255" />&nbsp;
          <input style="color: #fff;background-color: #0048ff;border-color: #222;margin-right: 10px;padding: 1px 10px;font-weight: 700;" type="submit" value="search" />
        </p>
      </fieldset>
    </form>
  </div><!-- /.search -->

  <div>Filter:
    <?php foreach($categories as $category => $value) : ?>
      <a href="portfolio?category_id=<?=e($value['category_id'])?>">
        <?=e($value['name'])?> | 
      </a>
    <?php endforeach; ?>  
  </div>
  <br/>
  <span><?=e($title)?></span>
  <br/>
  <p>Click on project to view more.</p>
  <div id="portfolio_content">

    <?php foreach($projects as $project => $value) : ?>
      <a href="project?project_id=<?=e($value['project_id'])?>">
      <div class="project_img">
        <div class="imagebox">
          <img src="/images/<?=e($value['image'])?>" alt="<?=e($value['title'])?>" />
        </div>
        <div class="details">
          <div class="content">
            <h2><?=e($value['title'])?></h2>
            <p><?=e($value['description'])?></p>
          </div>
        </div>
      </div>
    </a>
    <?php endforeach; ?>

  </div>
  
</section>

<?php


require __DIR__ . '/includes/footer.inc.php';


?>
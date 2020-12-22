<?php

/**
 * Admin Users View Page
 * @file: users.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-25-2020
 */


require __DIR__ . '/includes/header.inc.php';


?>
<?php require __DIR__ .'/includes/flash.php'; ?>
<!-- Content Section of the page -->
<section id="project_section">
  <div id="info" class="search" style="float: right;">
    <form id="infoForm" name="infoForm" action="/admin/projects" method="get" autocomplete="off" novalidate>
      <fieldset>
        <p style="padding-bottom: 0px;">
          <input id="s" type="text" name="s" placeholder="Enter keyword" maxlength="255" />&nbsp;
          <input style="color: #fff;background-color: #0048ff;border-color: #222;margin-right: 10px;padding: 1px 10px;font-weight: 700;" type="submit" value="search" />
        </p>
      </fieldset>
    </form>
    <div class="banner">
	    <a href="/admin/addProject" class="btn btn1">Add Project</a>
	</div>
  </div><!-- /.search -->

  <h2>Project List(<?=e(count($projects))?>)</h2>
  <div id="info_table">
	  <table style="width: 100%;">
	    <tr>
	        <th>Project ID</th>
	        <th>Category ID</th>
	        <th>Title</th>
	        <th>Description</th>
	        <th>Type</th>
	        <th>Status</th>
	        <th>Action</th>
	    </tr>

	    <?php foreach($projects as $project => $value) : ?>
	    	<tr>
			    <td><?=e($value['project_id'])?></td>
			    <td><?=e($value['categories_id'])?></td>
			    <td><?=e($value['title'])?></td>
			    <td><?=e($value['description'])?></td>
			    <td><?=e($value['type'])?></td>
			    <td><?=e($value['status'])?></td>
			    <td>
			        <a href="deleteProject?project_id=<?=e($value['project_id'])?>" class="red" style="color: #f00;"
			        	onclick="return  confirm('Press OK to continue with the delete')">Delete</a>
			        <a href="editProject?project_id=<?=e($value['project_id'])?>" class="green" style="color: #060;">Edit</a>
			    </td>
			</tr>
	    <?php endforeach; ?>
	  </table>
  </div>
</section>

<?php


require __DIR__ . '/includes/footer.inc.php';


?>       
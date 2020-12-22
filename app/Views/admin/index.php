<?php

/**
 * Admin Home View Page
 * @file: index.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-25-2020
 */


require __DIR__ . '/includes/header.inc.php';


?>
<?php require __DIR__ .'/../includes/flash.php'; ?>
<!-- Content Section of the page -->
<section id="home_section">
  <h2>At a glance...</h2>
  <div id="info_table">
	  <table style="width: 100%;">
	    <tr>
	        <th>Overview (N0 of records)</th>
	        <th>Projets (Projects with comments)</th>
	        <th></th>
	    </tr>
    	<tr>
		    <td style="text-align: left;">
		    	<span>
			    	<strong>User</strong>: <?=e(count($users))?><br/>
			    	<strong>Categories</strong>: <?=e(count($categories))?><br/>
			    	<strong>Comments</strong>: <?=e(count($comments))?><br/>
			    	<strong>Project</strong>: <?=e(count($projects))?><br/>
		    	</span>
		    </td>
		    <td style="text-align: left;">
		    	<?php foreach($commentedProjects as $commentedProject => $value) : ?>
			    	<strong><?=e($value['title'])?></strong> project has a total of <?=e($value['total'])?> comments (<?=e($value['total'])?>)<br/>
				<?php endforeach; ?>
		    </td>
		    <td style="text-align: left;">
		    	<?php foreach($allViews as $allview => $value) : ?>
		    		<strong>Sum Views</strong>: <?=e($value)?><br/>
		    	<?php endforeach; ?>
		    	<?php foreach($maxPriceProject as $maxPrice => $value) : ?>
		    		<strong>Max Project Price</strong>: <?=e($value)?><br/>
		    	<?php endforeach; ?>
		    	<?php foreach($avgPriceProject as $avgPrice => $value) : ?>
		    		<strong>Avg Project Price</strong>: $<?=e(intval($value))?><br/>
		    	<?php endforeach; ?>
		    </td>
		</tr>
	  </table>
  </div>
  <h2>Most Recent Logs Entries</h2>
  <div id="info_table">
	  <table style="width: 100%;">
	    <tr>
	        <th style="    border-bottom: 20px solid #333; padding: 25px;">Newest Log Entries</th>
	    </tr>
	    <?php foreach($logs as $log => $value) : ?>
	    	<tr>
			    <td style="text-align: left; border-bottom: 2px solid #333; padding: 25px;">
			    	<?=e($value['event'])?>
			    </td>
			</tr>
		<?php endforeach; ?>
	  </table>
  </div>
</section>

<?php


require __DIR__ . '/includes/footer.inc.php';


?>       
<?php head(array('title'=>'404','bodyid'=>'404')); ?>

	
<h2>Whoops!</h2>
	
	<p>Sorry, that URL doesn't lead anywhere. If you're supposed to be on this site, 
	you can log in <span id="entererror"><?php echo link_to_admin_home_page(here); ?></span>

<?php foot(); ?>

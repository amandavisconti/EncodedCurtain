<?php head(array('bodyid'=>'home')); ?>	

<?php if ($homepageText = get_theme_option('Homepage Text')): ?>
<div id="enter"><?php echo $homepageText; ?></p>
<?php endif; ?>

<div id="enter"><?php echo link_to_admin_home_page(Enter); ?></div>
	
</div> <!-- End content div -->
<?php foot(); ?>
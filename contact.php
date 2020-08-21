<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="internal content contact">
	<div class="topbar">
	  	<div class="container">
	  		<h2>Get more info about our services</h2>
			<p>Enter your information to contact a representative</p>
			<div class="fields">
				
			</div>
	  	</div>
	</div> 
	<div class="container">
		<?php
			$a = new Area("Page Content");
			$a->display();
		?>
	</div>
</div>

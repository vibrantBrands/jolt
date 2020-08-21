<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="internal content salesforce">
	<div class="topbar">
	  	<div>
	  		<?php
				$a = new Area("Header Logo");
				$a->display();
			?>
	  		<span>Solutions</span>
	  	</div>
	</div>
	<div class="subnav">
	    <div class="container services">
	    	<div class="subnav-btn">Menu <i class="fas fa-caret-up"></i></div>
	      </div>
	    <div class="menu">
	      <?php   
          $bt = BlockType::getByHandle('autonav');
          $bt->controller->displayPages = 'custom'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
          $bt->controller->displayPagesCID = '189'; // if display pages is set ‘custom’
          $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
          $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'
          $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
          $bt->controller->displaySubPageLevelsNum = '0'; // if displaySubPages is set 'custom'
          $bt->render('templates/main_nav'); // for template 'templates/template_name';
        ?>
	    </div>
	  </div> 
	<div class="container">
		<?php
			$a = new Area("Page Content");
			$a->display();
		?>
	</div>
</div>

<?php $this->inc('elements/footer.php'); ?>
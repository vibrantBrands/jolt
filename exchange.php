<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="internal content">
  <div class="topbar">
      <?php
       $page = Page::getCurrentPage();
       $title = $page->getCollectionName();
           if($image = $c->getAttribute('header_image')):
               $image = $c->getAttribute('header_image');
               $image_src = $image->getRelativePath();
       ?>
           <img src='<?php echo $image_src; ?>'>
           
       <?php else: ?>
       <?php endif; ?>
      <div>
       <h1><?php echo $title; ?></h1>
     </div>
  </div>
  <div class="subnav">
    <div class="container services">
      <span class="subnav-btn">Menu</span> <i class="fas fa-caret-up"></i>
      </div>
    <div class="menu">
      <?php   
          $bt = BlockType::getByHandle('autonav');
          $bt->controller->displayPages = 'custom'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
          $bt->controller->displayPagesCID = '191'; // if display pages is set ‘custom’
          $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
          $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'
          $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
          $bt->controller->displaySubPageLevelsNum = '0'; // if displaySubPages is set 'custom'
          $bt->render('templates/main_nav'); // for template 'templates/template_name';
        ?>
    </div>
  </div>

  <article class="exchange">
    <div class="container">
        <?php
            $a = new Area('Content');
            $a->display($c);
          ?>
      </div>
    </div>
    
  </article>
</div>

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>


<?php $this->inc('elements/footer.php'); ?>
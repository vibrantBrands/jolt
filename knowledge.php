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

  <div class="knowledge-exchange">
    <div class="filter-btn-wrapper">
      <span class="orange-btn filter-btn">
        <a href>Filter</a>
      </span>
    </div>
    <div class="filter-zone">
      <div class="categories">
        <h2>Filter by Category</h2>
      <span class="orange-btn close-btn">
        <a href>Close</a>
      </span>
      <div>
        <input type="checkbox" value="experience" class="filter" /> 
        <label>Customer Experience</label>
      </div>
      <div>
        <input type="checkbox" value="technicians" class="filter" />
        <label>Field Service & Technicians</label>
      </div>
      <div>
        <input type="checkbox" value="support" class="filter" />
        <label>Customer Support</label>   
      </div>
      <div>
        <input type="checkbox" value="technology" class="filter" />
        <label>Technology</label>
      </div>
      <div>
        <input type="checkbox" value="digital" class="filter" />
        <label>Digital Channels</label>
      </div>
      <div>
        <input type="checkbox" value="industry" class="filter" />
        <label>Industry Trends</label>
      </div>
      <div>
        <input type="checkbox" value="other" class="filter" />
        <label>Other</label>
      </div>
    </div>
  </div>
    <div class="results">
      <?php
      $list = new \Concrete\Core\Page\PageList();
      $list->filterByPageTypeHandle(['news_item','trends','white_paper']);
      $list->sortByPublicDateDescending();
      $pages = $list->getResults();

      foreach($pages as $page) {
        $path = '';
        $pagename = $page->getCollectionName();
        $description = $page->getCollectionDescription();
        $date = $page->getCollectionDatePublic();
        $url = $page->getCollectionLink();

        if($page->getAttribute('thumbnail')) {
          $thumbnail = $page->getAttribute('thumbnail');
          $path = $thumbnail->getRelativePath();
        } 

        if($page->getAttribute('categories')) {
          $categories = $page->getAttribute('categories');
          $catarray = str_replace(',','', $categories);
          $lowercase = strtolower($catarray);
        } else {
            $categories = $classes = '';
        } ?> 

        <div class="news-item <?php echo $lowercase ?>">
          <div class="image">
            <?php if($path) { ?>
            <img src="<?php echo $path ?>" />
            <?php } else { ?>
              <img src="<?php echo $this->getThemePath(); ?>/images/jolt-placeholder.png" alt="Placeholder" />
            <?php } ?> 
          </div>
          <div class="text">
            <h2><a href="<?php echo $url ?>"><?php echo $pagename ?></a></h2>
            <div class="date"><?php echo $date ?></div>
            <small class="categories"><?php echo $categories; ?></small>
            <p><?php echo $description ?></p>
            <span class="orange-link"><a href="<?php echo $url ?>">Read more &raquo;</a></span>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<!-- <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script> -->


<?php $this->inc('elements/footer.php'); ?>
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
       <p>
         Jolt does more than connect clients to technology; we deliver results. See how we powered customer engagement and more for leading service companies.
       </p>
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

  <div class="knowledge-exchange container">
    <div class="filter-btn-wrapper">
      <span class="orange-btn filter-btn">
        <a href>Filter</a>
      </span>
    </div>
    <div class="filter-zone">
      <div class="categories">
      <h2>Filter by Category</h2>
      <strong>Primary Service:</strong>
      <span class="orange-btn close-btn">
        <a href>Close</a>
      </span>
      <ul>
        <li>
          <input type="checkbox" value="consulting" class="filter" /> 
          <label>Strategic Consulting</label>
        </li>
        <li>
          <input type="checkbox" value="salesforce" class="filter" />
          <label>Salesforce Solutions</label>
        </li>
        <li>
          <input type="checkbox" value="azure" class="filter" />
          <label>Azure Solutions</label>
        </li>
        <li>
          <input type="checkbox" value="adoption" class="filter" />
          <label>Technology Adoption and Training</label>
        </li>
      </ul>
      <strong>Verticals:</strong>
        <ul>
          <li>
            <input type="checkbox" value="manufacturing" class="filter" /> 
            <label>Manufacturing & Distribution</label>
          </li>
          <li>
            <input type="checkbox" value="health" class="filter" />
            <label>Health & Life Sciences</label>
          </li>
          <li>
            <input type="checkbox" value="mechanical" class="filter" />
            <label>Mechanical, HVAC and Building Services</label>
          </li>
          <li>
            <input type="checkbox" value="energy" class="filter" />
            <label>Energy & Environmental Services </label>
          </li>
          <li>
            <input type="checkbox" value="transportation" class="filter" />
            <label>Transportation & Logistics</label>
          </li>
          <li>
            <input type="checkbox" value="other" class="filter" />
            <label>Other</label>
          </li>
        </ul>

        <strong>Technology Used:</strong>
        <ul>
          <li>
            <input type="checkbox" value="service" class="filter" />
            <label>Service Cloud</label>
          </li>
          <li>
            <input type="checkbox" value="field" class="filter" />
            <label>Field Service Lightning</label>
          </li>
          <li>
            <input type="checkbox" value="sales" class="filter" />
            <label>Sales Cloud</label>
          </li>
          <li>
            <input type="checkbox" value="communities" class="filter" />
            <label>Communities</label>
          </li>
          <li>
            <input type="checkbox" value="pardot" class="filter" />
            <label>Pardot</label>
          </li>
          <li>
            <input type="checkbox" value="ifs" class="filter" />
            <label>IFS</label>
          </li>
          <li>
            <input type="checkbox" value="azure" class="filter" />
            <label>Microsoft Azure</label>
          </li>
          <li>
            <input type="checkbox" value="other" class="filter" />
            <label>Other</label>
          </li>
        </ul>
      </div>
    </div>
    <div class="results case-study-list">
      <?php
      $list = new \Concrete\Core\Page\PageList();
      $list->filterByPageTypeHandle('case_studies');
      $pages = $list->getResults();

      foreach($pages as $page) {
        $pagename = $page->getCollectionName();
        $description = $page->getCollectionDescription();
        $url = $page->getCollectionHandle();

        if($page->getAttribute('thumbnail')) {
          $thumbnail = $page->getAttribute('thumbnail');
          $path = $thumbnail->getRelativePath();
        } else {
          $path = '';
        }

        if($page->getAttribute('pdf')) {
          $pdf = $page->getAttribute('pdf');
          $pdfpath = $pdf->getRelativePath();
        } else {
          $pdf = '';
        }

        if($page->getAttribute('categories')) {
          $categories = $page->getAttribute('categories');
          $catarray = str_replace(',','', $categories);
          $lowercase = strtolower($catarray);
        } else {
            $categories = $classes = '';
        } ?> 

        <div class="news-item <?php echo $lowercase ?>">
          <div class="image drop-shadow">
          <?php if($pdf) { ?>
            <a href="<?php echo $pdfpath ?>" target="case-study">
          <?php } ?>
          <?php if($path) { ?>
            <img src="<?php echo $path ?>" />
          <?php } else { ?>
            <img src="<?php echo $this->getThemePath(); ?>/images/jolt-placeholder.png" alt="Placeholder" />
          <?php } ?> 
          <?php if($pdf) { ?>
            </a>
          <?php } ?>

          </div>
          <div class="text">
            <h2><?php echo $pagename ?></h2>
            <small class="categories"><?php echo $categories; ?></small>
            <p><?php echo $description ?></p>
              <?php if($pdf) { ?>
                <span class="orange-link">
                  <a href="<?php echo $pdfpath ?>" target="case-study">Read more &raquo;</a>
                </span>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<!-- <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>  -->


<?php $this->inc('elements/footer.php'); ?>
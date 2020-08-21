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
 <div class="container events-description">
   <?php
        $a = new Area('Internal Content');
        $a->display($c);
      ?>
 </div>

   <?php
    $list = new \Concrete\Core\Page\PageList();
    $list->filterByPageTypeHandle('event_item');
    $pages = $list->getResults();

    foreach($pages as $page) {
      $pagename = $page->getCollectionName();
      $description = $page->getCollectionDescription();
      $url = $page->getCollectionHandle();
      $startdate = $enddate = "TBD";

      if($page->getAttribute('thumbnail')) {
        $thumbnail = $page->getAttribute('thumbnail');
        $path = $thumbnail->getRelativePath();
      }
      if($page->getAttribute('start_date')) {
        $startdate = $page->getAttribute('start_date')->format('F j, Y');
      }
      if($page->getAttribute('end_date')) {
        $enddate = $page->getAttribute('end_date')->format('F j, Y'); 
      } ?>

      <article class="events">
        <div class="container">
          <div class="event-item">
            <div class="date">
            <span>FROM:</span>
              <?php echo $startdate; ?>
              <span>TO:</span>
              <?php echo $enddate; ?>
            </div>
            <div class="text">
              <img src="<?php echo $path ?>" class="thumbnail">
              <h2><?php echo $pagename ?></h2>
              <p><?php echo $description ?></p>
              <span class="orange-link"><a href="/knowledge-exchange/events/<?php echo $url ?>">Read More &raquo;</a></span>
            </div>
          </div>
        </div>
      </article>

    <?php }
  ?>
  <!-- <article class="events">
    <div class="container">
        <div class="event-item">
          <div class="date">
            <span>FROM:</span>
            July 2, 2019<br />
            11:00 am
            <span>TO:</span>
            July 5, 2019<br />
            7:00 pm
          </div>
          <div class="text">
            <h2>Webinar: Extend the control of your ERP<br />with Field Service Management Software</h2>
            <p>Service organizations who focus on customer service earn 60% higher profits than their competitors. A key element to providing superior service is an enabling set of IT systems to create a elevated customer experience. Quite often, ERP systems fall short in their ability to meet the ever increasing demands in this...</p>
              <span class="orange-link"><a href="">Read More &raquo;</a></span>
          </div>
        </div>
      </div>
    </div>
  </article> -->
</div>

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>


<?php $this->inc('elements/footer.php'); ?>
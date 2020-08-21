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
      <a href="/careers">Join Our Team</a>
    </div>
  </div>

  <article>
    <div class="container">
      <?php
        $a = new Area('Internal Content');
        $a->display($c);
      ?>
    </div>
    
  </article>
</div>

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>


<?php $this->inc('elements/footer.php'); ?>
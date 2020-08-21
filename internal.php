<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="internal content">
  
      <?php
       $page = Page::getCurrentPage();
       $title = $page->getCollectionName();
           if($image = $c->getAttribute('header_image')):
               $image = $c->getAttribute('header_image');
               $image_src = $image->getRelativePath();
       ?>
        <div class="topbar" style="background:url('<?php echo $image_src; ?>');">
       <?php else: ?>
        <div class="topbar" style="background:url('<?php echo $this->getThemePath(); ?>/images/placeholder.png')">
       <?php endif; ?>

       <div class="container">
         <h1><?php echo $title; ?></h1>
       </div>
  </div>

  <article>
    <div class="container">
      <?php
        $a = new Area('Internal Content');
        $a->display($c);
      ?>
    </div>
    <div class="container footnotes">
      <?php
        $a = new Area('Footnotes');
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
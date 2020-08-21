<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="page-header">
    <?php
       $page = Page::getCurrentPage();
       $title = $page->getCollectionName();
           if($image = $c->getAttribute('header_image')):
               $image = $c->getAttribute('header_image');
               $image_src = $image->getRelativePath();
       ?>
           <img src='<?php echo $image_src; ?>'>
       <?php else: ?>
           <img src='<?php echo $this->getThemePath() ?>/images/internal/about-us.png ?>' alt='About Us'>
       <?php endif; ?>

       <h1 class="page-title"><?php echo $title; ?></h1>
        
</div>

<article>
    <?php
        $a = new Area('Internal Content');
        $a->display($c);
    ?>
</article>
<div class="staff">
  <?php
        $a = new Area('About Us');
        $a->display($c);
    ?>
</div>

<?php $this->inc('elements/footer.php'); ?>
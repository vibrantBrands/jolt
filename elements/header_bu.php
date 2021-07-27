<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!DOCTYPE html>
<html lang="en">

<?php Loader::element('header_required'); ?>

<head>
    <meta charset="UTF-8">
    <title>Jolt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable = yes"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/web-to-case.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/lity.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/style.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="jolt">
  <div class="<?php echo $c->getPageWrapperClass()?>">

  <header>
    <div class="navigation">
      <div class="toggle-wrapper">
        <p>MENU</p>
        <div class="menu-toggle inactive">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          <span class="bg"></span>
        </div>
     </div>
     <div class="logo">
       <a href="/" class="mobile"><img src="<?php echo $this->getThemePath(); ?>/images/logo.png" alt="Logo"></a>
     </div>
        <?php   
          $bt = BlockType::getByHandle('autonav');
          $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
          //$bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
          $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
          $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'
          $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
          $bt->controller->displaySubPageLevelsNum = '0'; // if displaySubPages is set 'custom'
          $bt->render('templates/main_nav'); // for template 'templates/template_name';
          ?>
         <!-- <span class="orange-btn"><a href="/contact">Get in touch</a></span>  -->
    </div>
  </header>
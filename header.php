<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMERICAN VILLAGE</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js" defer></script>

    <?php wp_head(); ?>
</head>
<body>
<div class="container">
  <header class="header-sp">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="left-sp">
    <nav>
      <?php wp_nav_menu( array(
          'theme_location'=>'mainmenu', 
          'container'     =>'', 
          'menu_class'    =>'',
          'items_wrap'    =>'<ul id="main-nav">%3$s</ul>'));
      ?>
    </nav>
  </header>
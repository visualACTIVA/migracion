<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head();  ?>

</head>
<body>
  <header  class="header">

  <nav>
    <?php
       wp_nav_menu(array(
      'theme_location' => 'header',
      'container' => false,
      'items_wrap' => '<ul>%3$s</ul> '
    ));


     ?>
  </nav>

  </header>

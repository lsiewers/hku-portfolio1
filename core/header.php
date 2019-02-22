

<!DOCTYPE html>
<html lang="nl">
  <head>
    <?php
      include 'pages.php';
      include 'environment.php';
    ?>
    <title>Luuk Siewers' Portfolio</title>
    <link href="<?php echo "{$GLOBALS['urlPath']}" ?>/dist/styles.css" rel="stylesheet" type="text/css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

  <header class="header">
    <nav class="nav">
      
      <h1>
        <a class="nav__logo" href='<?php echo $GLOBALS['urlPath'] ?>'>
          Luuk Siewers
          <span>Interaction design</span>
        </a>
      </h1>

      <ul class="nav__list">
        <?php

          $pages = $GLOBALS['pages'];
          $portfolioParam = '';

          // generate the list of pages to HTML navigation
          foreach ($pages as $page => $navItem) {
            echo "
              <li class='nav__list__item'>
                <a class='{$status}' href='{$pages[$page]['filename']}'>{$pages[$page]['text']}</a>
              </li> \n
            ";
          } 
        ?>

        <!-- switch experience button!!! -->
        <!-- <li class='nav__list__item'>
          <button class='switch-button' onclick="switchStyle()">Crazy switch</button>
          <script>
            function switchStyle() {
              const cssLink = document.querySelector('head link[href$=".css"]');
              
              if (cssLink.getAttribute('href') === 'dist/styles.css') { 
                cssLink.setAttribute('href', 'dist/crazy.css');
              } else {
                cssLink.setAttribute('href', 'dist/styles.css');
              }
            }
          </script>
        </li> -->
      </ul>
    </nav>
  </header>
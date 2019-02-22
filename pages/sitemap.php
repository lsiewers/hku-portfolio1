
  <?php
    include "../core/header.php";
    include "../core/pages.php";
    include '../core/categories.php';
  ?>

<section class="sitemap">
<?php

    foreach($pages as $key => $page) {

      if($page['filename'] === 'portfolio') {
        
        echo "
        <li>
          <a href='{$GLOBALS['urlPath']}?page={$key}'>{$page['text']}</a>
          <ol>
        ";
        
        foreach ($categories as $key1 => $categorie) {

          foreach($categorie['subjects'] as $key2 => $subject) {
            echo "<li>
            <a href='{$GLOBALS['urlPath']}?page={$key}&category={$key1}&subject={$key2}'>{$subject['name']}</a>";

            $getProjects = scandir('portfolio/' . $subject['foldername'] . '/');
          
            // The following lines will remove values from the first two indexes.
            $getProjects = array_slice($getProjects, 2, count($getProjects));

            echo "<ol>";
            foreach($getProjects as $key3 => $project) {
              include "portfolio/{$subject['foldername']}/{$getProjects[$key3]}";
              $key3 += 1; 
              echo "<li><a href='{$GLOBALS['urlPath']}?page={$key}&category={$key1}&subject={$key2}&project={$key3}'>{$name}</a></li>";
            }
            echo "</ol></li>";
          }
        }

        echo"
          </ol>
        </li>
        ";
      }

      else {
        echo "
          <li><a href='{$GLOBALS['urlPath']}?page={$key}'>{$page['text']}</a></li>
        ";
      }
    }
  ?>
</section>
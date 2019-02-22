<!--
  Here the template is structured
  Content in separate project files
-->
<?php
  include 'core/categories.php';

  $subjectPath = scandir("pages/portfolio/{$GLOBALS['categories'][$_GET['category']]['subjects'][$_GET['subject']]['foldername']}");
  $subjectPath = array_slice($subjectPath, 1, count($subjectPath));
  $categoryPath = $GLOBALS['categories'][$_GET['category']]['subjects'][$_GET['subject']]['foldername'];
  include 'pages/portfolio/' . $categoryPath . '/' . $subjectPath[$_GET['project']];
?>
<?php 
  $filename = str_replace('.php', '', $subjectPath[$_GET['project']]);
  $imgpath = $GLOBALS['urlPath'] . '/dist/img/portfolio/' . $categoryPath . '/' . $filename;
  $vidpath = $GLOBALS['urlPath'] . '/dist/vid/portfolio/'  . $categoryPath . '/' . $filename;
?>

<article class="portfolio-detail">
  <header class="portfolio-detail__header">

    <?php
      // header
      echo"
        <figure class='portfolio-detail__header__heading'>
          <img src='{$imgpath}/{$filename}_header.jpg' alt='Headerfoto {$name}'>
          <figcaption>{$name}</figcaption>
        </figure>

        <ul class='portfolio-detail__header__info'>
          <li>
            <h3>Type</h3>
            <p>{$info['type']}</p>
          </li>
          <li>
            <h3>Opdrachtgever</h3>
            <p>{$info['client']}</p>
          </li>
          <li>
            <h3>Oplevering</h3>
            <p>{$info['finishdate']}</p>
          </li>
        </ul>

        <blockquote class='portfolio-detail__header__quote'>
          {$quote}
        </blockquote>
      ";
    ?>
  </header>

  <main>
    <?php
      // generate story as html
      foreach ($articles as $key => $article) {
        echo"
          <section class='portfolio-detail__article img--{$article['layout']}'>
            <figure>
        ";
        
        if (isset($article['img'])) {
          echo "<img src='{$imgpath}/{$article['img']}' />";
        }
        else if (isset($article['vid'])) {
          echo "<video controls>
            <source src='{$vidpath}/{$article['vid']}' />
          </video>
          ";
        }
        
        echo"
          <figcaption>{$article['imgcaption']}</figcaption>
          </figure>
          <p>{$article['story']}</p>
        </section>
        ";
      }
    ?>
  </main>

  <footer>
    <a class="portfolio-detail__back" href="<?php echo "?page=1&category={$_GET['category']}&subject={$_GET['subject']}" ?>">< Terug naar overzicht</a>
  </footer>
</article>
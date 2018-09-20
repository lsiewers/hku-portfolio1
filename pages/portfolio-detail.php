<!--
  Here the template is structured
  Content in separate project files
-->

<?php 
  $filename = strtolower($name);
  $imgpath = '/dist/img/portfolio/'.$filename;
?>

<article class="portfolio-detail">
  <header class="portfolio-detail__header">
    <?php
      // header
      echo"
        <figure class='portfolio-detail__header__heading'>
          <img src='{$imgpath}/{$filename}_header.jpg' alt='{$project}'>
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
              <img src='{$imgpath}/{$article['img']}' />
              <figcaption>{$article['imgcaption']}</figcaption>
            </figure>
            <p>{$article['story']}</p>
          </section>
        ";
      }
    ?>
  </main>
</article>
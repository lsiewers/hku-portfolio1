<?php include '../core/categories.php' ?>
<div class="portfolio">
  <header class="portfolio__categories">
    <?php 
      $url = "//$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]";
      foreach($GLOBALS['categories'] as $key => $categorie) {
        echo "<ul>
            <h1>{$categorie['name']}</h1>
            ";
        
            foreach($categorie['subjects'] as $key2 => $subject) {
              echo 
              "<li>
                  <a href='portfolio.php?category={$key}&subject={$key2}'>{$subject['name']} ></a>
                </li>
              ";
        }
      };

      $activeCategory = $GLOBALS['categories'][$_GET['category']];
      $activeSubject = $activeCategory[$_GET['subject']]['name'];
    ?>
  </header>

  <main class="portfolio__slider">
        
      <script src='slider.js' async> </script>
        <header>
          <h1><?= $activeSubject['name'] ?> </h1>
          <div>
            <button onclick='previousSlide()'><</button>
            <p><span class='active-slide'>$activeProject</span>/$totalProjects</p>
            <button onclick='nextSlide()'>></button>
          </div>
        </header>
        <main class='slider'>
          <ul>

            <!-- foreach project in folder -->
            <li class='slide $isActive'>
              <article>
                <div>
                  <h1>$name</h1>
                  <blockquote>$quote</blockquote>
                  <ul>
                    <li>
                      <h3>Type</h3>
                      <p>{$info['type']}</p>
                    </li>
                    <li>
                      <h3>Opdrachtgever</h3>
                      <p>{$info['client']}</p>
                    </li>
                    <li>
                      <h3>Opleverdatum</h3>
                      <p>{$info['finishdate']}</p>
                    </li>
                  </ul>
                  <a class='see-project' href='?page=1&category={$_GET['category']}&subject={$_GET['subject']}&project={$key}'>Bekijk project > </a>
                </div>
                <figure>
                  <img src='dist/img/portfolio/{$activeSubject['foldername']}/{$filename}/{$filename}_header.jpg' alt='Headerfoto {$name}'>
                </figure>
              </article>
            </li>

          </ul>  
        </main>
      <footer>
        <button onclick="previousSlide()">< Vorige</button>
        <button onclick="nextSlide()">Volgende ></button>
      </footer>
  </main>

</div>

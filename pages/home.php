
<section class="home">
  <img class="home__img" src="<?php echo $GLOBALS['urlPath'] ?>/dist/img/luuk.png" alt="Luuk Siewers">
  
  <div class="home__titles">
    <h1>
      <svg viewBox='-10 -70 160 80'>
        <path fill="transparent" id="path" d='M-7,-4C149,-24 420,-207 470,-440'/>
        <text width="500">
          <textPath alignment-baseline="top" xlink:href="#path">
            Luuk Siewers
          </textPath>
        </text>
      </svg>
    </h1>
    <p>
      <svg viewBox='-10 -80 180 100'>
        <path fill="transparent" id="path" d='M-7,-4C149,-24 420,-207 470,-440'/>
        <text width="500">
          <textPath alignment-baseline="top" xlink:href="#path">
            Interaction Design
          </textPath>
        </text>
      </svg>
    </p>
  </div>
  
  <section class="home__projects">
  <?php
    include 'core/highlights.php';
    $totalProjects = count($highlights);
    $activeProject = 1;

    echo "
      <script src='slider.js' async> </script>
        <header>
          <h1>Uitgelicht</h1>
          <div>
            <button onclick='previousSlide()'><</button>
            <p><span class='active-slide'>$activeProject</span>/$totalProjects</p>
            <button onclick='nextSlide()'>></button>
          </div>
        </header>
        <main class='slider'>
          <ul>
        ";

        foreach($highlights as $key => $project) {
          include "pages/portfolio/{$project['foldername']}/{$project['filename']}";
          
          $filename = str_replace('.php', '', $project['filename']);

          if ($key == $activeProject) {
            $isActive = 'is--active';
          } else {
            $isActive = 'not--active';
          }

          echo "
            <li class='slide $isActive'>
              <article>
                <h1>$name</h1>
                <figure>
                  <img src='dist/img/portfolio/{$project['foldername']}/{$filename}/{$filename}_header.jpg' alt='lifecycle'>
                </figure>
              </article>
              <a class='see-project' href='?page=1&category={$project['category']}&subject={$project['subject']}&project={$key}'>Bekijk project > </a>
            </li>
          ";
        };

        echo "
          </ul>  
        </main>
        ";
      ?>
  </section>
  <article class="home__info">
    <h1>Info</h1>
    <p>
    20 jaar oud, geinteresseerd in 
    Interaction design, bluesmuziek, boksen en minimalisme. Afgestudeerd als Interactief Mediavormgever (Deltion College, MBO). Huidig student Interaction Design aan de Hogeschool voor de Kunsten Utrecht.
    </p>
    <a href="?page=2">Meer info ></a>
  </article>

</section>
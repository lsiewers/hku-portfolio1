
<section class="home">
  <img class="home__img" src="/dist/img/luuk.png" alt="Luuk Siewers">
  <div class="home__titles">
    <h1 class="home__titles__name">Luuk Siewers</h1>
    <h3 class="home__titles__study">Interaction Design</h3>
    <div class="home__titles__buttons">
      <?php echo"
          <button onclick='routerLink(`/portfolio`)'>Portfolio</button>
          <button onclick='routerLink(`/about`)'>Over mij</button>
        "
      ?>
    </div>
  </div>
</section>


<?php
  // logbook
  $page = 'Homepage';
  $story = '
    Een fantastische pagina
  ';

  include '../core/logbook.php';
?>
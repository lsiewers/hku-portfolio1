<!--
  Code by Luuk Siewers - 2018
  Portfolio site
  According HTML/CSS lessons HKU by Ton Markus
-->
    <?php 
      include 'core/header.php';
    ?>

    <!-- background shapes -->
    <figure class="background-shapes">
      <!-- <img class="grid" src="dist/img/grid-01.svg"> -->
      <img class="custom-shape" src="dist/img/background/custom-shape.svg">
      <img class="circle" src="dist/img/background/circle.svg">
      <?php 
        if ($page !== 'portfolio') {
          echo "<img class='triangle_home' src='dist/img/background/triangle_home.svg'>";
        }
      ?>
    </figure>

    <!-- place where content will be loaded from navigation -->
    <div id="content">
    <script type="text/javascript">
      document.onload = function() {
        return `<?php
          include "pages/{$GLOBALS['pages'][$page]['filename']}.php";
        ?>`;
      }
    </script>

      <?php include 'core/footer.php' ?>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>Luuk Siewers' Portfolio</title>
    <?php echo "<link href='styles.css' rel='stylesheet' type='text/css' media='screen'>" ?>
  </head>
  <body>
    <header>
      <nav class="nav">
        <ul class="nav__list">
          <?php 
            $pages = array(
              // 'filename (without extension)' => array('text' (key) => 'name to be displayed')
              'home'  => array('text' => 'Home'),
              'portfolio'  => array('text' => 'Portfolio'),
              'about' => array('text' => 'Over mij'),
              'curriculum' => array('text' => 'CV'),
              'contact' => array('text' => 'Contact'),
            );

            // generate the array of pages to HTML navigation
            foreach ($pages as $key => $navItem) {
              echo "
                <li class='nav__list__item'>
                  <button class='{$key}' onclick='routerLink(`{$key}`)'>{$key}</button>
                </li>\n
              ";
            };
          ?>
          
          <script>
            function routerLink(page) {
              const xhttp = new XMLHttpRequest();
              const pathToFile = '/pages/' + page + '.php';

              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById('content').innerHTML = this.responseText;
                }
              };

              xhttp.open('GET', pathToFile, true);
              xhttp.send();

              const activeItem = document.querySelector(`.nav__list__item .${page}`);
              if (!activeItem.classList.contains('is--active')) {
                document.querySelectorAll(`.nav__list__item button`).forEach(e => {
                  e.classList.remove('is--active')
                });
                activeItem.classList.add('is--active')
              } 
            }
          </script>
        </ul>
      </nav>
    </header>

    <main id="content">
      <!-- initial page -->
      <?php include 'pages/home.php' ?>
    </main>

    <footer class="footer">
      &copy; Luuk Siewers - 2018
    </footer>
  </body>
</html>

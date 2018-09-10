<!DOCTYPE html>
<html>
  <head>
    <title>Luuk Siewers' Portfolio</title>
    <link href='styles.css' rel='stylesheet' type='text/css' media='screen'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            // generate the list of pages to HTML navigation
            foreach ($pages as $page => $navItem) {
              echo "
                <li class='nav__list__item'>
                  <button class='{$page}' onclick='routerLink(`{$page}`)'>{$pages[$page]['text']}</button>
                </li>\n
              ";
            };
          ?>
          
          <script>
            // load pages without reloading entire document and reusing the header and footer
            function routerLink(page) {
              const xhttp = new XMLHttpRequest();
              const pathToFile = 'pages/' + page + '.php';

              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  // place where content will be loaded
                  document.getElementById('content').innerHTML = this.responseText;
                }
              };
              
              // return scrollTop to 0
              window.scrollTo(0, 0);
              // set url
              history.pushState(page, page, page);
              // set HTML of requested file
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
            
            // support page-specific urls
            function getUrl() {
                routerLink(window.location.pathname.substring(1));
            } getUrl();
          </script>
        </ul>
      </nav>
    </header>

    <!-- place where content will be loaded from navigation -->
    <main id="content">
      <!-- initial page -->
      <?php include 'pages/home.php' ?>
    </main>

    <footer class="footer">
      &copy; Luuk Siewers - 2018
    </footer>
  </body>
</html>

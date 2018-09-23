
<header>
      <nav class="nav">
        
        <h1>
          <button class="nav__logo" onclick="routerLink('/home')">
            Luuk Siewers
            <span>Interaction design</span>
          </button>
        </h1>

        <ul class="nav__list">
          <?php 
            // list of all pages
            $pages = array(
              // 'filename (without extension)' => array('text' (key) => 'name to be displayed')
              'portfolio'  => array('text' => 'Portfolio'),
              'about' => array('text' => 'Over mij'),
              'curriculum' => array('text' => 'CV'),
              'logbook' => array('text' => 'Logboek'),
            );

            // generate the list of pages to HTML navigation
            foreach ($pages as $page => $navItem) {
              echo "
                <li class='nav__list__item'>
                  <button class='nav--{$page}' onclick='routerLink(`/{$page}`)'>{$pages[$page]['text']}</button>
                </li>\n
              ";
            };
          ?>
          
          <?php include 'environment.php' ?>
          <script>
            // load pages without reloading entire document and reusing the header and footer (SPA)
            function routerLink(page) {
              const url = "<?php echo $GLOBALS['urlPath'] ?>";
              const xhttp = new XMLHttpRequest();
              const urlState = page !== '/~luuk.siewers/' ? page : '/home';
              const pathToFile =  url + '/pages/' + urlState + '.php';
              const activePage = page.substring(1);
              const navItems = document.querySelectorAll(`.nav__list__item button`)

              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  // place where content will be loaded
                  document.getElementById('content').innerHTML = this.responseText;
                }
              };
              
              // return scrollTop to 0
              window.scrollTo(0, 0);
              // set url
              history.pushState(page, url + urlState, url + urlState);
              // set HTML of requested file
              xhttp.open('GET', pathToFile, true);
              xhttp.send();

              // set and/or remove the class of active of the main menu items
              navItems.forEach(item => {
                if (item.classList.contains('nav--' + activePage) && !item.classList.contains('is--active')) {
                  item.classList.add('is--active')
                } else if (!item.classList.contains('nav--' + activePage) && item.classList.contains('is--active')) {
                  item.classList.remove('is--active')
                }
              })
            }

            // history back
            window.onpopstate = function(e) { routerLink(e.state) };

            // support page-specific urls
            function getUrl() {
              if(window.location.pathname === '/') {
                routerLink('/home');
              } else {
                routerLink(window.location.pathname);
              }
            } window.onload = getUrl();
          </script>
        </ul>
      </nav>
    </header>

<header>
  <nav class="nav">
    <ul class="nav__list">
      <?php 
        // list of all pages
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
              <button class='{$page}' onclick='routerLink(`/{$page}`)'>{$pages[$page]['text']}</button>
            </li>\n
          ";
        };
      ?>
      
      <script>
        // load pages without reloading entire document and reusing the header and footer
        function routerLink(page) {
          const xhttp = new XMLHttpRequest();
          const pathToFile = '/pages' + page + '.php';
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
          history.pushState(page, page, page);
          // set HTML of requested file
          xhttp.open('GET', pathToFile, true);
          xhttp.send();

          // set and/or remove the class of active of the main menu items
          navItems.forEach(item => {
            if (item.classList.contains(activePage) && !item.classList.contains('is--active')) {
              item.classList.add('is--active')
            } else if (!item.classList.contains(activePage) && item.classList.contains('is--active')) {
              item.classList.remove('is--active')
            }
          })
        }
        
        // support page-specific urls
        function getUrl() {
          if(window.location.pathname === '/') {
            routerLink('/home');
          } else {
            routerLink(window.location.pathname);
          }
        } getUrl();
      </script>
    </ul>
  </nav>
</header>
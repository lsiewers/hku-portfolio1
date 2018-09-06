<!DOCTYPE html>
<html>
  <head>
    <title>Luuk Siewers' Portfolio</title>
    <?php include 'variables.php'; ?>
    <?php echo "<link href='{$path}/styles.css' rel='stylesheet' type='text/css' media='screen'>" ?>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <?php echo "<li><a href='{$path}'>Home</a></li>" ?>

          <?php 
            $pages = array(
              // 'filename (without .php)' => array('text' (key) => 'name to be displayed on the front-end')
              'portfolio'  => array('text' => 'Portfolio'),
              'about' => array('text' => 'Over mij'),
              'curriculum' => array('text' => 'CV'),
              'contact' => array('text' => 'Contact'),
            );

            // generate the array of pages to HTML navigation
            foreach ($pages as $key => $navItem) {
              echo "
                <li>
                  <a href='{$path}/pages/{$key}/{$key}.php'>{$navItem['text']}</a>
                </li>\n
              ";
            };
          ?>
          
        </ul>
      </nav>
    </header>
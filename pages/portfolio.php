
<?php 
  $projects = array(
    'Toelatingsopdracht',
    'JijEnOverijssel',
    'Lifecycle',
  );

  // generate the list of projects in HTML
  foreach ($projects as $project) {
    $filename = strtolower($project); // convert string to lowercase

    echo "
    <button class='project' onclick='routerLink(`/portfolio/{$filename}`)'>
      <article>
        <figure class='project__figure'>
          <img src='dist/img/portfolio/{$filename}/{$filename}_header.jpg' alt='{$project}'>
          <figcaption>{$project}</figcaption>
        </figure>
      </article>
    </button>
    ";
  };
?>

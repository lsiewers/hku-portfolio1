
<?php 
  $projects = array(
    'JijEnOverijssel',
    'MVRDV',
    'Lifecycle',
    'Stageverslag',
    'Edugym'
  );

  // generate the list of projects in HTML
  foreach ($projects as $project) {
    $filename = strtolower($project); // convert string to lowercase

    echo "
    <button onclick='routerLink(`/portfolio/{$filename}`)'>
      <article class='project'>
        <figure class='project__figure'>
          <img src='dist/img/portfolio/{$filename}.jpg' alt='{$project}'>
          <figcaption>{$project}</figcaption>
        </figure>
      </article>
    </button>
    ";
  };
?>

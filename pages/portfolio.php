
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
    echo "
      <article class='project'>
        <figure class='project__figure'>
          <img src='img/portfolio/{$project}.jpg' alt='{$project}'>
          <figcaption>{$project}</figcaption>
        </figure>
      </article>
    ";
  };
?>

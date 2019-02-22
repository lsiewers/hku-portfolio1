<?php
  // content
  $content =  array(
    $name = 'Usability',
    $info =  array(
      'type' => 'Huiswerk Project Portfolio',
      'client' => 'HKU, Tim Bosjes',
      'finishdate' => '25-10-2018',
      'exercise' => 'Test de portfolio site op gebruiksvriendelijkheid'
    ),

    $quote = 'Verslag over de bevindingen van de portfolio site (v2)',
    $articles =  array(
      // every page has inherit style, but is slightly customable for best storytelling experience
      // layout has 3 options: left, right or left to choose how the img will position
      '1' =>  array(
        'layout' => 'full',
        'imgcaption' => '',
        'story' => '
          Bekijk het verslag: <a target="_blank" href="dist/img/portfolio/project_portfolio/usability/verslag.pdf">Verslag (pdf)</a><br>
          Beluister de audiofragmenten van de tests: <a target="_blank" href="dist/img/portfolio/project_portfolio/usability/user_tests.zip">Test opnames (ZIP met 4 mp3-bestanden)</a>
        '
      ),
    )
  );
?>
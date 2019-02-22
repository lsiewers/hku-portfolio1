<?php
  // content
  $content = array (
    $name = 'Museumbezoek',
    $info = array (
      'type' => 'Schoolopdracht',
      'client' => 'HKU',
      'finishdate' => '20-11-2018',
      'exercise' => 'Onderzoek een kunstwerk van het Stedelijk Museum in Amsterdam en maak een presentatievideo hierover'
    ),

    $quote = '',
    $articles = array (
      // every page has inherit style, but is slightly customable for best storytelling experience
      // layout has 3 options: left, right or full to choose how the img will position
      'intro' => array(
        'layout' => 'left',
        'img' => 'museumbezoek_header.jpg',
        'imgcaption' => 'Het eindresultaat',
        'story' => '
          Bekijk de video: <a target="_blank" href="https://www.youtube.com/watch?v=p1JqtRsDRj0">Presentatie video (YouTube)</a>
        '
      ),
     
    )
  );
?>
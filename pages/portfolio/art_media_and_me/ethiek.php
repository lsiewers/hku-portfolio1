<?php
  // content
  $content = array (
    $name = 'Video ethiek',
    $info = array (
      'type' => 'Schoolopdracht',
      'client' => 'HKU',
      'finishdate' => '29-11-2018',
      'exercise' => 'Maak een video (ongeveer 1 minuut lang) over verantwoordelijkheid van ontwerpers'
    ),

    $quote = 'Voor hoeveel procent is de ontwerper van verantwoordelijk voor de negatieve effecten van zijn/haar werk op de gebruiker?',
    $articles = array (
      // every page has inherit style, but is slightly customable for best storytelling experience
      // layout has 3 options: left, right or full to choose how the img will position
      'intro' => array(
        'layout' => 'left',
        'img' => 'ethiek_header.jpg',
        'imgcaption' => 'Screenshot van de video',
        'story' => '
          Bekijk de video: <a target="_blank" href="https://www.youtube.com/watch?v=bAv19JaIwlo">Video ethiek (YouTube)</a>
        '
      ),
     
    )
  );
?>
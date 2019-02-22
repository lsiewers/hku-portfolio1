<?php
  // content
  $content =  array(
    $name = 'Animaties les 4 (digitaal)',
    $info =  array(
      'type' => 'Huiswerk animatie',
      'client' => 'HKU',
      'finishdate' => '17-10-2018',
      'exercise' => 'Oefenen met digitale animaties'
    ),

    $quote = 'Maak ten minste drie animaties waarbij de beweging van een voorwerp minstens drie keer wordt doorgegeven aan een ander object.',
    $articles =  array(
      // every page has inherit style, but is slightly customable for best storytelling experience
      // layout has 3 options: left, right or full to choose how the img will position
      '1' =>  array(
        'layout' => 'full',
        'img' => 'balloon.jpg',
        'imgcaption' => 'Mini avontuur van een ballon',
        'story' => '
          <a href="pages/overig/animaties_digitaal/balloons/balloon_full.html" target="_blank">Klik hier</a> om de animatie te bekijken.
        '
      ),
      '2' =>  array(
        'layout' => 'full',
        'img' => 'blocks.jpg',
        'imgcaption' => 'Bal die op 3 verschillende blokken springt',
        'story' => '
          <a href="pages/overig/animaties_digitaal/blocks/blocks.html" target="_blank">Klik hier</a> om de animatie te bekijken.
        '
      ),
      '3' =>  array(
        'layout' => 'full',
        'img' => 'canon-rope.jpg',
        'imgcaption' => 'Kanon die touw kapot schiet en de bal op een springveer laat vallen.',
        'story' => '
          <a href="pages/overig/animaties_digitaal/canon-rope/canon-rope.html" target="_blank">Klik hier</a> om de animatie te bekijken.
        '
      ),
      )
  );
?>
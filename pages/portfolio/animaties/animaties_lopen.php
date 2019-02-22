<?php
  // content
  $content =  array(
    $name = 'Animaties les 5 (lopende mensen)',
    $info =  array(
      'type' => 'Huiswerk animatie',
      'client' => 'HKU',
      'finishdate' => '21-11-2018',
      'exercise' => 'Oefenen met beweging van mensenlichamen'
    ),

    $quote = 'Maak 4 digitale animaties met een lopend persoon. Teken deze met een tekentablet per frame',
    $articles =  array(
      // every page has inherit style, but is slightly customable for best storytelling experience
      // layout has 3 options: left, right or full to choose how the img will position
      '1' =>  array(
        'layout' => 'full',
        'img' => 'walking-man.jpg',
        'imgcaption' => 'Normale, snelle wandelende man',
        'story' => '
          <a href="pages/overig/animaties_digitaal/normal-walk/normal-walk.html" target="_blank">Bekijk animatie</a>
        '
      ),
      '2' =>  array(
        'layout' => 'full',
        'img' => 'silly-walk.jpg',
        'imgcaption' => 'Wandelende man, gebaseerd op de "Ministry of Silly Walks" van Monthy Python (v1)' ,
        'story' => '
        <a href="pages/overig/animaties_digitaal/silly-walk/silly-walk.html" target="_blank">Bekijk animatie</a>
        '
      ),
      '3' =>  array(
        'layout' => 'full',
        'img' => 'silly-walk_2.jpg',
        'imgcaption' => 'Wandelende man, gebaseerd op de "Ministry of Silly Walks" van Monthy Python (v2).',
        'story' => '
        <a href="pages/overig/animaties_digitaal/silly-walk_2/silly-walk_2.html" target="_blank">Bekijk animatie</a>
        '
      ),
      '4' =>  array(
        'layout' => 'full',
        'img' => 'animaties_lopen_header.jpg',
        'imgcaption' => 'Wandelende man, gebaseerd op de "Ministry of Silly Walks" van Monthy Python (v2), verder uitgewerkt.',
        'story' => '
        <a href="pages/overig/animaties_digitaal/silly-walk_v2/silly-walk_v2.html" target="_blank">Bekijk animatie</a>
        '
      ),
    )
  );
?>
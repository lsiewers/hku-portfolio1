<?php
  // content
  $content = [
    $name = 'Toelatingsopdracht',
    $info = [
      'type' => 'Schoolopdracht',
      'client' => 'HKU',
      'finishdate' => '10-05-2018'
    ],
    $short_intro = '
      Bedenk een haptische interface voor winkelende ouderen
    ',

    $quote = 'Dementie onder ouderen neemt toe, maar supermarkten passen zich er niet op aan',
    $articles = [
      // every page has inherit style, but is slightly customable for best storytelling experience
      // layout has 3 options: left, right or full to choose how the img will position
      'intro' => [
        'layout' => 'left',
        'img' => 'visual_app.jpg',
        'imgcaption' => 'Maak een boodschappenlijstje in de app',
        'story' => '
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        '
      ],
      'onderzoek' => [
        'layout' => 'right',
        'img' => 'visual_controller.jpg',
        'imgcaption' => 'Maak een boodschappenlijstje in de app',
        'story' => '
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        '
      ],
      'voordelen/nadelen' => [
        'layout' => 'full',
        'img' => 'ontwerp_controller.jpg',
        'imgcaption' => 'Maak een boodschappenlijstje in de app',
        'story' => '
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        '
      ]
    ]
  ];
?>

<?php include '../portfolio-detail.php'; ?>
<?php
  // content
  $content =  array(
    $name = 'Taak 3',
    $info =  array(
      'type' => 'Huiswerk Look & Inspire',
      'client' => 'HKU',
      'finishdate' => '21-09-2018',
      'exercise' => 'Maak op een dag tussen 06:00u en 22:00 ieder halfuur een foto'
    ),

    $quote = 'Stil staan bij hedendaagse momenten',
    $articles =  array(
      // every page has inherit style, but is slightly customable for best storytelling experience
      // layout has 3 options: left, right or left to choose how the img will position
      'pdf' =>  array(
        'layout' => 'full',
        'imgcaption' => '',
        'story' => '
          <a target="_blank" href="dist/img/portfolio/look_and_inspire/taak_3/dayofmylife.pdf">Day of my life (PDF)</a>
        '
      ),
      '0' =>  array(
        'layout' => 'left',
        'img' => '0.jpg',
        'imgcaption' => '06:00',
        'story' => '
          De wekker gaat af.
        '
      ),
      '1' =>  array(
        'layout' => 'right',
        'img' => '1.jpg',
        'imgcaption' => '06:30',
        'story' => '
          Het observeren van de prachtige ochtendlucht
        '
      ),
      '2' =>  array(
        'layout' => 'left',
        'img' => '2.jpg',
        'imgcaption' => '07:00',
        'story' => '
          Spullen pakken in mijn kamer voor vertrek
        '
      ),
      '3' =>  array(
        'layout' => 'right',
        'img' => '3.jpg',
        'imgcaption' => '07:30',
        'story' => '
          Mijn nieuwe tweedehands kkoffiemolen bekijken
        '
      ),
      '4' =>  array(
        'layout' => 'left',
        'img' => '4.jpg',
        'imgcaption' => '08:00',
        'story' => '
          Met de trein naar Amersfoort
        '
      ),
      '5' =>  array(
        'layout' => 'right',
        'img' => '5.jpg',
        'imgcaption' => '08:30',
        'story' => '
        Overstap in Zwolle
        '
      ),
      '6' =>  array(
        'layout' => 'left',
        'img' => '6.jpg',
        'imgcaption' => '09:00',
        'story' => '
        In de trein
        '
      ),
      '7' =>  array(
        'layout' => 'right',
        'img' => '7.jpg',
        'imgcaption' => '09:30',
        'story' => '
        Aangekomen bij mijn kamer
        '
      ),
      '8' =>  array(
        'layout' => 'left',
        'img' => '8.jpg',
        'imgcaption' => '10:00',
        'story' => '
          Aan school verder
        '
      ),
      '9' =>  array(
        'layout' => 'right',
        'img' => '9.jpg',
        'imgcaption' => '10:30',
        'story' => '
          In de trein verder aan school
        '
      ),
      '10' =>  array(
        'layout' => 'left',
        'img' => '10.jpg',
        'imgcaption' => '11:00',
        'story' => '
          Research les deel 1
        '
      ),
      '12' =>  array(
        'layout' => 'right',
        'img' => '12.jpg',
        'imgcaption' => '11:30',
        'story' => '
        Research les deel 2
        '
      ),
      '13' =>  array(
        'layout' => 'left',
        'img' => '13.jpg',
        'imgcaption' => '12:00',
        'story' => '
        Pauze
        '
      ),
      '14' =>  array(
        'layout' => 'right',
        'img' => '14.jpg',
        'imgcaption' => '12:30',
        'story' => '
        Pauze deel 2
        '
      ),
      '15' =>  array(
        'layout' => 'left',
        'img' => '15.jpg',
        'imgcaption' => '13:00',
        'story' => '
        Tools for design thinking deel 1
        '
      ),
      '16' =>  array(
        'layout' => 'right',
        'img' => '16.jpg',
        'imgcaption' => '13:30',
        'story' => '
        Tools for design thinking deel 2
        '
      ),
      '17' =>  array(
        'layout' => 'left',
        'img' => '17.jpg',
        'imgcaption' => '14:00',
        'story' => '
        Tools for design thinking deel 3
        '
      ),
      '18' =>  array(
        'layout' => 'right',
        'img' => '18.jpg',
        'imgcaption' => '14:30',
        'story' => '
        Richting G&I space
        '
      ),
      '19' =>  array(
        'layout' => 'left',
        'img' => '19.jpg',
        'imgcaption' => '15:00',
        'story' => '
        Werkend in de G&I space
        '
      ),
      '20' =>  array(
        'layout' => 'right',
        'img' => '20.jpg',
        'imgcaption' => '15:30',
        'story' => '
        Nog steeds werkend in de G&I space
        '
      ),
      '21' =>  array(
        'layout' => 'left',
        'img' => '21.jpg',
        'imgcaption' => '16:00',
        'story' => '
        Naar volgende les
        '
      ),
      '22' =>  array(
        'layout' => 'right',
        'img' => '22.jpg',
        'imgcaption' => '16:30',
        'story' => '
        ECTTP
        '
      ),
      '23' =>  array(
        'layout' => 'left',
        'img' => '23.jpg',
        'imgcaption' => '17:00',
        'story' => '
        Fietsen in Utrecht
        '
      ),
      '24' =>  array(
        'layout' => 'right',
        'img' => '24.jpg',
        'imgcaption' => '17:30',
        'story' => '
        Mijn fiets zoeken in Amersfoort
        '
      ),
      '25' =>  array(
        'layout' => 'left',
        'img' => '25.jpg',
        'imgcaption' => '18:00',
        'story' => '
        Boodschappen
        '
      ),
      '26' =>  array(
        'layout' => 'right',
        'img' => '26.jpg',
        'imgcaption' => '18:30',
        'story' => '
        Koken
        '
      ),
      '27' =>  array(
        'layout' => 'left',
        'img' => '27.jpg',
        'imgcaption' => '19:00',
        'story' => '
        Eten
        '
      ),
      '28' =>  array(
        'layout' => 'right',
        'img' => '28.jpg',
        'imgcaption' => '19:30',
        'story' => '
        Afwassen
        '
      ),
      '29' =>  array(
        'layout' => 'left',
        'img' => '29.jpg',
        'imgcaption' => '20:00',
        'story' => '
        Koffie
        '
      ),
      '30' =>  array(
        'layout' => 'right',
        'img' => '30.jpg',
        'imgcaption' => '20:30',
        'story' => '
        Aan school
        '
      ),
      '31' =>  array(
        'layout' => 'left',
        'img' => '31.jpg',
        'imgcaption' => '21:00',
        'story' => '
        Kamer uitzicht
        '
      ),
      '32' =>  array(
        'layout' => 'right',
        'img' => '32.jpg',
        'imgcaption' => '21:30',
        'story' => '
        Dag afsluiten
        '
      ),
    )
  );
?>
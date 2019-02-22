<?php
  // content
  $content =  array(
    $name = 'Building Playful Worlds blog',
    $info =  array(
      'type' => 'Blog',
      'client' => 'HKU',
      'finishdate' => '14-02-2018',
      'exercise' => 'Houd bij wat je gedaan hebt en wat je geleerd hebt in een blog'
    ),

    $quote = 'Van geen kennis van Unity naar een FPS & puzzel game',
    $articles =  array(
      // every page has inherit style, but is slightly customable for best storytelling experience
      // layout has 3 options: left, right or left to choose how the img will position
      '1' =>  array(
        'layout' => 'left',
        'img' => 'blog_1.jpg',
        'imgcaption' => '',
        'story' => '
        <i>Do. 14 Februari</i><br><br>
        Eerste kennis gemaakt met Unity. Duidelijk hoe de interface ongeveer werkt, hoe je variabele aan kan maken en hoe je een object met camera kan bewegen. Werken met collisions en tags van objecten waar je tegenaan stoot is ook wel duidelijk, maar daar moet ik meer mee spelen/oefenen. Het is opvallend hoe gebruiksvriendelijk Unity is en hoe snel je er mee kan programmeren in mijn ogen.        
        '
      ),
      '' => array(
        'layout' => 'full',
        'img' => 'blog_2.jpg',
        'imgcaption' => '',
        'story' => '
        <i>Vr. 15 Februari</i><br><br>

Nagedacht over het concept en uitgekomen op een leuk idee dat haalbaar moet zijn (dit zijn voor mij de 2 belangrijkste zaken tot zover bij het bedenken van een concept voor dit vak). Ik heb nog geen ervaring met Unity dus het moet uitvoerbaar zijn. Het idee: High Noon! High Noon is het moment dat 2 of meer cowboy’s tegenover elkaar staan en op het moment dat het precies 12:00 is, wordt er “DRAW!” geroepen en mogen ze schieten op elkaar. Degene die het langzaamst is, is dood en heeft uiteraard verloren. 
<br><br>
In mijn concept ben je zelf 1 van de min. 3 en max. 6 dualisten (afhangend van je level) en sta je tegenover cowboys met ieder een eigen kleur hoed. Op het moment dat er ‘DRAW!’ wordt geroepen komt er bovenin beeld een tekst met een kleur beschreven. Zoals het bekende spel is de kleur van de tekst afwijkend van de beschrijving en kun je daardoor in de war gebracht worden. Het doel is om zo snel mogelijk de cowboy met de door de tekst beschreven kleur neer te schieten. Als je mist of te laat bent, ben je af. Als je raakt binnen de tijd, heb je gewonnen en ga je naar een volgende ronde. De eerste ronde is met 2 tegenstanders en de laatste ronde is met 5 tegenstanders. Je kan ook kiezen uit bepaalde niveaus, wat bepaald hoeveel tijd je hebt om te schieten en hoe lang de tekst in beeld blijft. Als extra’s kan er een highscore bord toegevoegd worden met de snelste tijden die iemand heeft gehaald om een cowboy te raken in 1 ronde of in alle rondes bij elkaar. 
<br><br>
Titel: High Noon<br>
Setting/Thema: Western dorp met cowboys<br>
Spel verloop:
Stilstaan en observeren waar welke tegenstander staat
Wachten tot er ‘DRAW!’ geroepen wordt
Lees de tekst met de beschreven kleur (en laat je niet leiden door de tekstkleur)
Schiet de cowboy met de hoed gelijk aan de beschreven kleur binnen de korte tijd
Ga naar de volgende ronde
<br><br><br>
Ik heb alvast wat vooronderzoek gedaan naar gratis assets die ik kan gebruiken om de game op te maken (ze passen nog niet mooi bij elkaar, maar daar kom ik later uit):
<br><br>
Environment:<br>
<a target="_blank" href="https://assetstore.unity.com/packages/3d/environments/fantasy/western-pack-3116">Asset</a><br>
<a target="_blank" href="https://assetstore.unity.com/packages/3d/environments/landscapes/lowpoly-environment-pack-99479">Asset</a><br>
<a target="_blank" href="https://assetstore.unity.com/packages/3d/environments/lowpoly-wasteland-props-138348">Asset</a><br>
<a target="_blank" href="https://assetstore.unity.com/packages/3d/environments/landscapes/polydesert-107196">Asset</a><br>
<a target="_blank" href="https://sketchfab.com/3d-models/polygon-western-preview-d4de1ec79b0d43d98f703c1a81eff633">Asset</a><br>
<br><br>
Character:<br>
<a target="_blank" href="https://assetstore.unity.com/packages/3d/props/guns/wild-west-revolver-0-61712">Asset</a><br>
<a target="_blank" href="https://assetstore.unity.com/packages/3d/characters/humanoids/low-poly-cowboy-49698">Asset</a><br>
<a target="_blank" href="https://sketchfab.com/3d-models/western-hat-aaad0e9a635942fbbe5ce857005be8b3">Asset</a><br>
<a target="_blank" href="https://sketchfab.com/3d-models/revolver-5482bd14852a4033938b5b4d05de6da2">Asset</a><br>
<a target="_blank" href="https://sketchfab.com/3d-models/polygon-western-preview-d4de1ec79b0d43d98f703c1a81eff633">Asset</a><br>
<br><br>
Nog veel meer te vinden op:<br>
<a target="_blank" href="https://sketchfab.com/search?q=western&sort_by=-pertinence&type=models">Assets overview</a>
<br><br>
<br>
Verder heb ik onderzoek gedaan naar de nodige tutorials en 1 zeer relevante gevonden voor een FPS shooter, gemaakt door Brackeys: <a target="_blank" href="http://devassets.com/assets/multiplayer-fps-assets/">tutorial</a>



        '
      )
    )
  );
?>
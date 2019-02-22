<?php
  // content
  $content =  array(
    $name = 'Jij&Overijssel',
    $info =  array(
      'type' => 'Stageopdracht, Boerdam',
      'client' => 'Provincie Overijssel',
      'finishdate' => '10-01-2018',
      'exercise' => 'Vernieuwing stijl en verbeteren gebruiksvriendelijkheid huidige website'
    ),

    $quote = 'Nieuwe gebruikers zien niet wat de site is en haken daardoor snel af',
    $articles =  array(
      // every page has inherit style, but is slightly customable for best storytelling experience
      // layout has 3 options: left, right or full to choose how the img will position
      'intro' =>  array(
        'layout' => 'left',
        'img' => 'jij-old.png',
        'imgcaption' => 'Het probleem met de huidige homepage voor Jij&Overijssel is, dat
          nieuwe bezoekers geen idee hebben wat Jij&Overijssel inhoudt
          en die informatie moeilijk te vinden is. Verder is de stijl verouderd
          en mocht het algemene concept van de homepage grotendeels
          herzien worden.
        ',
        'story' => '
        Jij&Overijssel is een project van Boerdam in samenwerking met de provincie Overijssel om inwoners een kans te geven hun ideeën te delen en om deze om te zetten tot initiatieven. Boerdam heeft er een platform voor ontworpen en ontwikkeld waar inwoners zelf ideeën kunnen omzetten tot een initiatief om de provincie Overijssel onder andere mooier en beter te maken. De initiatieven die op het platform aangemaakt zijn, kunnen door de andere bezoekers gedeeld en ondersteund worden. Je kunt het zien als een online podium voor jouw ideeën.
        '
      ),
      'home' =>  array(
        'layout' => 'right',
        'img' => 'jij-cta-screen.jpg',
        'imgcaption' => '

        ',
        'story' => '
          Bij Boerdam werken we met Scrum (een Agile aanpakmethode voor
          teams). We begonnen daarom met een brainstormsessie met hele
          team om ideeën op te doen en daarna te kijken wat er allemaal
          nodig is voor het ontwerp. Aangezien het probleem duidelij k was,
          er ideeën opgedaan zijn en er al een huisstijl bestond, ben ik
          gelijk begonnen met het eindontwerp. Hierbij heb ik de kleuren
          en lettertypen van de huisstij l meegenomen, maar ze anders
          toegepast. Daarnaast heb ik de hele opbouw van de site veranderd
          tot een logisch opgebouwde home page, zodat voor iedereen
          duidelijk is wat Jij&Overijssel is en wat je er aan hebt.
        '
      ),
      'CTA' =>  array(
        'layout' => 'left',
        'img' => 'jij-cta.png',
        'imgcaption' => '
        Het ontwerp met het doel ‘mooier’ uitgelicht.
        ',
        'story' => '
        Na het intern presenteren van het ontwerp heb ik als feedback
        gekregen dat de opbouw goed was, maar dat de stijl nog
        inconsistent was en nog een goede slag nodig had. Wel had ik iets
        nieuws bedacht wat erg goed beviel. <br><br>
        1 van de belangrijkste doelen van de homepage is om mensen
        nieuwe initiatieven aan te laten maken op het platform. Ik vind
        call-to-action ‘initiatief aanmaken’ erg vaag. Wat is een initiatief of
        wat zou het kunnen zijn en waarom zou ik een initiatief aamaken?
        Met deze vragen ben ik een blok gaan ontwerpen voor de
        homepage die dit zal beantwoorden. Jouw initiatief kan namelijk
        de provincie Overijssel mooier, beter, lekkerder etc. maken. Met
        1 van deze doelen kun jij iets bedenken om als initiatief om te
        zetten. Hiervoor heb ik een poster gebruikt van een actie op
        Jij&Overijssel waar je een initiatief ziet met een doorkijk naar
        een betere wereld. In mijn ontworpen blok staat dat jij Overijssel
        mooier kunt maken, met daarnaast een beeld van een doorkijk
        naar een mooier wereld. Na een aantal seconden veranderd het
        woord ‘mooier’ en de bijpassende doorkijk naar een ander doel.
        '
      ),
      'CTA' =>  array(
        'layout' => 'full',
        'img' => 'jij-ingelogd-screen.jpg',
        'imgcaption' => '
          Met een aantal updates aan de hand van de feedback die ik intern
          meekreeg heb ik uiteindelijk een ontwerp gemaakt waar iedereen
          erg tevreden mee is. De nieuwe homepage is nog in ontwikkeling,
          waar ik ook aan gewerkt heb. Er wordt hiervoor gebruik gemaakt
          van Angular 5.
        ',
        'story' => '
          Voor de gebruikers die bekend zijn met het platform (en wel
          ingelogd zijn) heb ik een apart ontwerp gemaakt. Deze gebruikers
          kunnen zich richten op een persoonlijke ervaring en hebben
          overzichtelijk hoe hun initiatieven en de initiatieven die ze volgen
          ervoor staan. Zo is de header en het informatieve blok (zoals in
          het andere ontwerp) vervangen door een blok met uitgelichte
          initiatieven gebaseerd op wat de gebruiker interessant vind en met
          een blok met alle updates. Daaronder heb je het overzicht met
          alle initiatieven die op dat moment de meeste energie hebben.
        '
      ),
    )
  );
?>
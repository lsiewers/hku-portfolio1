<?php
  // content
  $content = array (
    $name = 'Lifecycle',
    $info = array (
      'type' => 'Stageopdracht',
      'client' => 'Boerdam, ROVA, Circulus Berkel, waterschap Drents Overijsselse Delta, provincie Overijssel en Rijkswaterstaat - Ministerie van Infrastructuur en Milieu',
      'finishdate' => '10-05-2018',
      'exercise' => 'Vergroot het bewustzijn van zwerfafval langs de oevers van de IJssel'
    ),

    $quote = 'Wat gebeurt er met al het zwerfafval wat in het water terecht komt?',
    $articles = array (
      // every page has inherit style, but is slightly customable for best storytelling experience
      // layout has 3 options: left, right or full to choose how the img will position
      'intro' => array(
        'layout' => 'right',
        'img' => 'lifecycle-concept-screen.jpg',
        'imgcaption' => 'Conceptontwerp: een visuele cyclus met allemaal stappen die je mee maakt als zwerfvuil in het water',
        'story' => '
        Schone IJsseloevers is een initiatief van ROVA, Circulus Berkel, waterschap Drents Overijsselse Delta, provincie Overijssel en Rijkswaterstaat - Ministerie van Infrastructuur en Milieu. Met dit initiatief willen de samenwerkende organisaties/bedrijven zwerfafval tegen gaan in en rond de IJssel. Tijdens mijn stage bij Boerdam kregen wij de opdracht om na te gaan denken om dit te bereiken doormiddel van een digitaal concept of misschien wel iets anders, wat helemaal aan ons was. Om het concept daadwerkelijk zwerfafval tegen te laten gaan, gingen we ons richten op de bewustwording van de inwoners rond de IJssel. Ook wilden we inwoners zelf laten nadenken over een oplossing om zwerfafval tegen te gaan, door ze ideeën te laten op sturen. De winnaar van het beste idee kreeg een beloning van €5000,- om het idee uit te werken.
        '
      ),
      'idee' => array(
        'layout' => 'left',
        'img' => 'steps.jpg',
        'imgcaption' => 'Wat is de cyclus eigenlijk? Na onderzoek bleken het er meerdere te zijn',
        'story' => '
        Als eerste ben ik gaan kijken welke stappen er in de lifecycle bestaan. Tijdens het uitzoeken van deze stappen ben ik erachter gekomen dat afval van de IJssel met de stroming naar de oceaan gaat. Afval dat in de oceaan ligt komt weer bij elkaar vanwege de cirkelende stroming van de oceaan. Dit is de bekende Plastic Soup.
        '
      ),
      'controller' => array(
        'layout' => 'full',
        'img' => 'final-concept.jpg',
        'imgcaption' => 'Het eindontwerp met de eerste stap en op de achtergrond een screenshot van de locatie waar je je op dat moment bevindt',
        'story' => '
          Het verhaal dat afval terug op je bord komt, is de hoofdlijn van de lifecycle. De andere mogelijke lifecycles komen terug als feitjes door het verhaal. Deze keuze is gemaakt om te voorkomen dat de gebruiker moet kiezen en 4x opnieuw een hele lifecycle moet bekijken. Een sterk middel om bewustwording bij inwoners te creëren, is een lokaal beeld. Dit lokale beeld komt terug in de eerste stap van de lifecycle, waar wordt gekeken naar je huidige locatie en waar dan een screenshot in Google Streetview wordt gemaakt als achtergrond. De lifecycle begint voor iedereen op deze manier gepersonaliseerd en lokaal.
        '
      )
    )
  );
?>
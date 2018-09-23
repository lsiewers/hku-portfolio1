<?php
  // content
  $content = array (
    $name = 'Toelatingsopdracht',
    $info = array (
      'type' => 'Schoolopdracht',
      'client' => 'HKU',
      'finishdate' => '10-05-2018',
      'exercise' => 'Bedenk een haptische interface voor winkelende ouderen'
    ),

    $quote = 'Dementie onder ouderen neemt toe, maar supermarkten passen zich er niet op aan',
    $articles = array (
      // every page has inherit style, but is slightly customable for best storytelling experience
      // layout has 3 options: left, right or full to choose how the img will position
      'intro' => array(
        'layout' => 'left',
        'img' => 'visual_app.jpg',
        'imgcaption' => 'Concept stap 1: Maak een boodschappenlijstje in de app',
        'story' => '
          Tijdens mijn globale onderzoek naar problemen of obstakels voor ouderen tijdens winkelen, ben ik erachter gekomen dat er aardig wat supermarkten zijn die zich niet aanpassen aan demente ouderen. Dit terwijl ik ook ondervond dat dementie juist toeneemt onder de ouderen. Hierop gericht ben ik na gaan denken over een haptische interface, welke supermarkten en demente ouderen kan helpen de goed weg te vinden.
        '
      ),
      'idee' => array(
        'layout' => 'full',
        'img' => 'steps_mobile.jpg',
        'imgcaption' => 'Alle stappen in de app op een rij',
        'story' => '
          Het idee was om een controller te maken die demente ouderen helpen de weg te vinden binnen supermarkten. Om zover te komen en om het zo makkelijk mogelijk te maken, kunnen ze met hun mobiel via de app een boodschappenlijstje maken, de controller vinden en naar de supermarkt genavigeerd worden.
        '
      ),
      'controller' => array(
        'layout' => 'left',
        'img' => 'ontwerp_controller.jpg',
        'imgcaption' => 'Alle stappen in de app op een rij',
        'story' => '
          Een haptische interface gaat om het fysieke gevoel van de gebruiker. Aangezien de controller een navigator is, heb ik de bekende navigaties\' (enkel route uitgebeeld, zoals TomTom of Google Maps) voor en nadelen afgewogen. Een groot nadeel is, is dat het visueel afleid en verwarrend kan zijn voor ouderen.
          Vandaar dat ik iets heb bedacht waarbij de gebruiker de controller in een hand neemt en de duim rust op de inkeping. Deze wijst de gebruiker de weg aan (door de duim te sturen als wijzer) en mocht de gebruiker aankomen bij het product zal de controller gaan trillen.
        '
      ),
      'functioneel' => array(
        'layout' => 'right',
        'img' => 'bovenaanzicht.jpg',
        'imgcaption' => 'Functioneel bovenaanzicht van de controller',
        'story' => '
          Uiteraard zal de gebruiker vergeten zijn of niet weten wat hij/zij moest pakken van het schap waar diegene nu staat. Vandaar dat er een beeldscherm geplaatst is die kan herinneren wat je uit dit schap moet hebben. De controller is verbonden via Bluetooth aan de app, zodat de app kan vertellen waar de controller ligt en om de data te ontvangen van de route die de gebruiker door de supermarkt zal gaan lopen. 
        '
      ),
      'portable' => array(
        'layout' => 'left',
        'img' => 'zijaanzicht.jpg',
        'imgcaption' => 'Functioneel zijaanzicht van de controller',
        'story' => '
          De controller moet makkelijk vast te houden kunnen zijn en op het handvat van een winkelwagen vast te klikken moeten zijn.
        '
      ),
      'minus/plus' => array(
        'layout' => 'full',
        'img' => 'conclusion.jpg',
        'imgcaption' => 'Conclusie van de pluspunten en minpunten van het algemene concept',
        'story' => '
          Al met al is het een concept bedacht in relatief korte tijd en met minimaal onderzoek, dus het is geen perfect product. Om echt te weten hoe je demente mensen kunt helpen met boodschappen doen, zal je echt met ze omgaan door onderzoek. Daarom denk ik dat dit concept niet zal werken. Het is niet handig (aangezien je een moeilijke smartphone met losse app moet gebruiken én de controller zelf erbij) en waarschijnlijk
          veel te ingewikkeld voor gebruik.
          <br><br> Een nadeel van de huidige navigaties is dat je, terwijl je jezelf verplaatst, niet ziet waar je naartoe gaat, maar naar je navigatie beeldscherm kijkt. Dit kan natuurlijk gevaarlijk en onhandig zijn, met name als je in een auto rijdt bijvoorbeeld (daar zijn nu dan spraakgestuurde interfaces voor). Maar misschien is de manier van mijn concept wel toepasbaar voor mensen die bijvoorbeeld blind zijn en niet de hele dag
          naar een stem willen luisteren die hun de weg wijst.
          <br><br> Het is voor het eerst dat ik een fysiek, interactief product heb bedacht en uitgewerkt heb. Naast dat ik het leuk vond om te bedenken, heb ik ook geforceerd out-of-the-box proberen te denken en daarmee iets bedacht waarmee je navigatie op een andere manier zou kunnen gebruiken.
        '
      )
    )
  );
?>

<?php include '../portfolio-detail.php'; ?>
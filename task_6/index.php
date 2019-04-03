<?php

include 'config.php';
include 'Instrument.php';

include 'Musician.php';

include 'Band.php';

include 'config.php';

//---------------------BAND---------------------------
$band = new Band();
$band->setName("bandband");
$band->setGenre("pop");

$bandname = $band->getName();
$bandgenre = $band->getGenre();

//---------------------INSTRUMENTS---------------------------
$guitar = new Instrument();
$guitar->setName('guitar');
$guitar->setCategory('stringed');

$piano = new Instrument();
$piano->setName('piano');
$piano->setCategory('keyboard');


$drum = new Instrument();
$drum->setName('drum');
$drum->setCategory('drumming');

//---------------------MUSICIANS---------------------------
$first_mus = new Musician();
$first_mus->addInstrument($guitar);
$first_mus->assingToBand($band);

$second_mus = new Musician();
$second_mus->addInstrument($piano);
$second_mus->assingToBand($band);

$third_mus = new Musician();
$third_mus->addInstrument($drum);
$third_mus->assingToBand($band);

$band->addMusician($first_mus);
$band->addMusician($second_mus);
$band->addMusician($third_mus);


$array_music = $band->getMusician();
var_dump($array_music);




// <div>
//     <h1><?php echo $bandname; ?></h1>
//     <h4>Genre: <?php echo $bandgenre; ?></h4>
//     <?php
//     $n = 1;
//     foreach ($array_music as $musician){
//         echo $n . "<br>";
//         echo "This musician plays on " . $musician->getInstrument() . "<br>";
//         echo "He is " . $musician->getMusicianType() . "<br>";
//         $n ++;
//     }
//     ?>
// </div>

include 'templates/index.php';

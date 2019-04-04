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



include 'templates/index.php';

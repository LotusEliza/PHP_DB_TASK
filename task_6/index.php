<?php

include 'config.php';
include 'Instrument.php';

include 'Musician.php';

include 'Band.php';

include 'config.php';

$guitar = new Instrument();
$guitar->setName('guitar');
$guitar->setCategory('stringed');

$piano = new Instrument();
$piano->setName('piano');
$piano->setCategory('keyboard');

$drum = new Instrument();
$drum->setName('drum');
$drum->setCategory('drumming');

$band = new Band();

$first_mus = new Musician();
$first_mus->addInstrument($guitar);
$first_mus->assingToBand($band);

$second_mus = new Musician();
$second_mus->addInstrument($piano);
$second_mus->assingToBand($band);

$band->addMusician($first_mus);
$band->addMusician($second_mus);


include 'templates/index.php';

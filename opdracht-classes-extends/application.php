<?php

  function __autoload( $className ){

    include 'classes/' . $className . '.php';

  }


  $cat     =   new Animal('Wijfie', 'female', 100);
  $dog     =   new Animal('Moris', 'male', 75);
  $dolphin =   new Animal('Flipper', 'male', 200);

  /*$nameCat =    $cat->getName();
  $nameDog =    $dog->getName();
  $nameDolphint =    $dolphin->getName();

  $genderCat  =   $cat->getGender();
  $genderDog  =   $dog->getGender();
  $genderDolphin  =   $dolphin->getGender();

  $healthCat  =   $cat->getHealth();
  $healthDog  =   $dog->getHealth();
  $healthDolphin  =   $dolphin->getHealth();*/
  //geeft errors als ik deze variabelen in html zet

  $Simba    =   new Lion('Simba', 'male', 150, 'Congo lion');
  $Scar     =   new Lion('Scar', 'male', 140, 'Kenia lion');

  $Zeke     =   new Zebra('Zeke', 'male', 80, 'Quagga');
  $Zana     =   new Zebra('Zana', 'female', 85, 'Selous');


 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Classes extends</title>
   </head>
   <body>

     <p><?= $cat->getName() ?> is een <?= $cat->getGender() ?> en heeft <?= $cat->getHealth() ?> health. (Special move: <?= $cat->doSpecialMove() ?>)</p>
     <p><?= $dog->getName() ?> is een <?= $dog->getGender() ?> en heeft <?= $dog->getHealth() ?> health. (Special move: <?= $cat->doSpecialMove() ?>)</p>
     <p><?= $dolphin->getName()?> is een <?= $dolphin->getGender() ?> en heeft <?= $dolphin->getHealth() ?> health. (Special move: <?= $cat->doSpecialMove() ?>)</p>


     <p>De speciale move van <?= $Simba->getName() ?> is: <?= $Simba->doSpecialMove() ?> (soort: <?= $Simba->getSpecies() ?>) </p>
     <p>De speciale move van <?= $Scar->getName() ?> is: <?= $Scar->doSpecialMove() ?> (soort: <?= $Scar->getSpecies() ?>) </p>

     <p>De speciale move van <?= $Zeke->getName() ?> is: <?= $Zeke->doSpecialMove() ?> (soort: <?= $Zeke->getSpecies() ?>) </p>
     <p>De speciale move van <?= $Zana->getName() ?> is: <?= $Zana->doSpecialMove() ?> (soort: <?= $Zana->getSpecies() ?>) </p>


   </body>
 </html>

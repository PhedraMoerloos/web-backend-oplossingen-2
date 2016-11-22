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

   </body>
 </html>

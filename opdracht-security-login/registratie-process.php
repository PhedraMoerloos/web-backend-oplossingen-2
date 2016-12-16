<?php

  session_start();

  $passwordIsGenerated    = false;
  $wachtwoordOptiesArray  = array();
  $gegenereerdWachtwoord  = "";



  //als er op genereer paswoord knop gedrukt is
  if ( isset($_POST["generatePassword"]) ) {

    $gegenereerdWachtwoord  = generatePassword(8, true, true, false);

    $_SESSION["wachtwoord"]   = $gegenereerdWachtwoord;


    if ( isset($_POST["email"]) ) {

        $_SESSION["email"]    =   $_POST["email"];

    }


    header( 'location: opdracht-security-login.php' );

  }


  //als men op registreer knop drukt
  if ( isset($_POST["register"]) ) {

      session_destroy();

  }





  function generatePassword($length, $includeHoofdletters, $includeCijfers, $includeSpecialeTekens)
  {


    //basis ergens van starten, in simpelste geval --> enkel met kleine letters een wachtwoord
    $kleineLettersOpties   =  "a b c d e f g h i j k l m n o p q r s t u v w x y z";
    $wachtwoordOptiesArray =   explode( " ", $kleineLettersOpties );

    if ( $includeHoofdletters ) {

      $hoofdlettersOpties   =   strtoupper( $kleineLettersOpties );
      $hoofdlettersArray    =   explode( " ", $hoofdlettersOpties );

      foreach ($hoofdlettersArray as  $value) {

        $wachtwoordOptiesArray[] = $value;

      }

    }


    if ( $includeCijfers ) {

      $cijferOpties   =   "0 1 2 3 4 5 6 7 8 9";
      $cijferArray    =   explode( " ", $cijferOpties );

      foreach ($cijferArray as  $value) {

        $wachtwoordOptiesArray[] = $value;

      }

    }


    if ( $includeSpecialeTekens ) {

      $specialeTekensOpties   =   "! ' # $ % & ( ) * - + / . , : ; ? [ ] < > @ { }";
      $specialeTekensArray    =   explode( " ", $specialeTekensOpties );

      foreach ($specialeTekensArray as  $value) {

        $wachtwoordOptiesArray[] = $value;

      }

    }

    shuffle($wachtwoordOptiesArray);

    $randomPassword = "";

    for ($i=0; $i < $length; $i++) {

      $randomItem     =   $wachtwoordOptiesArray[ array_rand($wachtwoordOptiesArray) ];
      $randomPassword .=  $randomItem;

    }

      $passwordIsGenerated  =   true;

      return $randomPassword;

  }







 ?>

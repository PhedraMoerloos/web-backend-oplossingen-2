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

      //variabelen uit session wissen (wachtwoord, email)
      session_destroy();

      //nieuwe session starten
      session_start();

      if ( isset($_POST["email"]) ) {

          $email = $_POST["email"];
          $wachtwoord = $_POST["wachtwoord"];

          //testen of email geldig is
          if ((filter_var($email, FILTER_VALIDATE_EMAIL))) {

              //email is valid, we gaan verder
              $_SESSION['notification'] = "";

              //checken of email in database voorkomt
              try {

                $db     =  new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", "BackendP2016");

                $queryCheckMail   = "SELECT * FROM users
                                    WHERE email = :emailmeegegeven";

                $statementCheckMail = $db->prepare( $queryCheckMail );
                $statementCheckMail->bindValue( ":emailmeegegeven", $email );

                $userWithMailFound = $statementCheckMail->execute();

                if ( $userWithMailFound ) {

                  //na query uitvoeren, inhoud van resultaat query bekijken (leeg/niet leeg)
                  $arrayUsersFound  = array();
                  while ( $queryUserFound =  $statementCheckMail->fetch(PDO::FETCH_ASSOC)) {

                      $arrayUsersFound[] = $queryUserFound;

                  }

                  if ( empty($arrayUsersFound) ) {

                    //resultaat van de query was leeg --> nog niemand heeft dit email adres
                    //toevoegen aan database
                    try {


                      //variabelen (email en wachtwoord uit form bovenaan)
                      $randomSalt         =  uniqid(mt_rand(), true);
                      $wachtwoordPlusSalt =  $wachtwoord . $randomSalt;
                      $wachtwoordSalted   =  hash( 'sha512', $wachtwoordPlusSalt );
                      $lastlogin          =  "NOW()";



                      $queryInsertUser    = "INSERT INTO users (email, password, salt, lastlogin)
                                            VALUES ( :email, :password, :salt, :lastlogin )";

                      $statementInsertUser = $db->prepare( $queryInsertUser );

                      $statementInsertUser->bindValue(":email", $email);
                      $statementInsertUser->bindValue(":password", $wachtwoordSalted);
                      $statementInsertUser->bindValue(":salt", $randomSalt);
                      $statementInsertUser->bindValue(":lastlogin", $lastlogin);

                      $userIsAdded  =   $statementInsertUser->execute();

                      if ( $userIsAdded ) {


                          $valueCookie  =  $email . ',' . hash( 'sha512', $email . $randomSalt );
                          setcookie( 'login', $valueCookie, time() + 360 );

                          header( 'location: dashboard.php' );



                      }


                    } catch (Exception $e) {

                      $_SESSION['notification'] = "De user kon niet toegevoegd worden. Probeer opnieuw.";
                      header( 'location: opdracht-security-login.php' );

                    }











                  }

                  else {

                    $_SESSION['notification'] = "Dit emailadres komt reeds voor in onze database.";
                    header( 'location: opdracht-security-login.php' );

                  }



                } //einde succesvol uitvoeren query select

                else {
                  //query select uitvoeren is niet gelukt
                }





              } catch (Exception $e) {

                  //verbinging niet gelukt, foutboodschap + redirect registreerpagina
                  $_SESSION['notification'] = "Kon geen verbinding maken met de database. Probeer opnieuw.";
                  header( 'location: opdracht-security-login.php' );

              }






          }

          else {

            //email Invalid -> notificatie + redirect naar registreer pagina
            $_SESSION['notification'] = "Het email adres is ongeldig, vul je gegevens opnieuw in.";
            header( 'location: opdracht-security-login.php' );

          }//einde validatie email


      }//einde email isset



  }//einde registreer knop





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

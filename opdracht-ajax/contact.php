<?php

  session_start();

  //formulier is verzonden
  if ( isset( $_POST['submit'] ) ) {

    $admin      =     $_POST['email'];
    $message    =     $_POST['message'];

    //effe checken eerst wel of er al iets in zit, anders error
    if ( isset( $_POST['sendCopy']) ) {
      $vinkje               =     $_POST['sendCopy'];
      $_SESSION['sendCopy'] = $vinkje;
    }

    $time_sent  =     "now()";


    $_SESSION['email'] = $admin;
    $_SESSION['text'] = $message;


    try {

      $db     =  new PDO("mysql:host=localhost;dbname=mail", "root", "BackendP2016");

      $query  = 'INSERT INTO contact_messages (email, message, time_sent)
                    VALUES ( :email, :message, :time_sent )';

      $statement = $db->prepare( $query );
      $statement->bindValue( ":email", $admin );
      $statement->bindValue( ":message", $message );
      $statement->bindValue( ":time_sent", $time_sent );

      $contactInserted = $statement->execute();

      if ( $contactInserted ) {

        //checken of vinkje aangekruist was
        if (isset($vinkje) && $vinkje == "checked = 'checked'") {

          $titel      =   "Contacteer ons bericht.";
          $header 		= 	'From: '. $admin;

      		//$mailSent  =   mail( $admin, $titel, $message, $header );

          $mailSent   =   true;

          //als mail verzenden gelukt is
          if ( $mailSent ) {

            session_destroy();

            session_start();
            $_SESSION['errorMessage'] = "Mail succesvol verzonden!";
            $_SESSION['sendCopy'] = "";

            header( "location: opdracht-ajax.php" );



          }

          else {

            $_SESSION['errorMessage'] = "Mail verzenden is niet gelukt";
            header( "location: opdracht-ajax.php" );

          }

        }



      }




    } catch (Exception $e) {

      $_SESSION['errorMessage'] = "Connectie met database mislukt, " . $e->getMessage();
      header( "location: opdracht-ajax.php" );

    }

  }




  else {

    $_SESSION['errorMessage'] = "Er is iets mis met het formulier probeer opnieuw.";
    header( "location: opdracht-ajax.php" );

  }




 ?>

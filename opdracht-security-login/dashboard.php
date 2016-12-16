<?php

  session_start();

  $userIsValidated = false;
  $message = "";
  $userEmailGegevensArray = array();

  if ( isset( $_COOKIE['login'] ) ) {

      $userEmailGegevensArray = explode( ',', $_COOKIE['login'] );
      $email          =   $userEmailGegevensArray[0];
      $gehashedEmail  =   $userEmailGegevensArray[1];

      //email adres gebruiken om bijhorende salt te gaan zoeken
      try {

        $db     =  new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", "BackendP2016");

        $queryGetSalt    = "SELECT salt FROM users
                            WHERE email = :emailmeegegeven";

        $statementGetSalt = $db->prepare( $queryGetSalt );
        $statementGetSalt->bindValue( ':emailmeegegeven', $email );

        $SaltHasBeenFound = $statementGetSalt->execute();

        if ( $SaltHasBeenFound ) {

          //salt waarde uit database halen
          $arraySaltFound  = array();
          while ( $querySaltFound =  $statementGetSalt->fetch(PDO::FETCH_ASSOC)) {

              $arraySaltFound[] = $querySaltFound;

          }

          foreach ($arraySaltFound[0] as $key => $value) {

            $salt = $value;

          }

          $databaseHash = hash( 'sha512', $email . $salt );

          //salt waarde uit database met email hashen vergelijken met gehashedEmail uit cookie
          if ( $gehashedEmail == $databaseHash ) {

            $userIsValidated = true;

          }

          else {

            
            header( 'location: login-form.php' );

          }

        }



      } catch (PDOException $e) {

        $message = "Verbinding met de database lukt niet, " . $e->getMessage();

      }






  }

  else {

    $_SESSION['notification'] = "U moet eerst inloggen";
    header( 'location: login-form.php' );

  }


 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Dashboard</title>
   </head>
   <body>


     <?php if ($salt): ?>
       <?= $salt ?>
     <?php endif; ?>


     <?php if ($message): ?>
       <?= $message ?>
     <?php endif; ?>

     <?php if ( $userIsValidated ): ?>
     <h2>Dashboard</h2>

     <a href="dashboard.php?cookie=delete">Uitloggen</a>
     <?php endif; ?>

   </body>
 </html>

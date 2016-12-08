<?php

  session_start();

  $isValid    = false;

  try {


    if ( isset($_POST["submit"]) ) {

        //formulier is ingezonden

        //checken of er iets is ingevuld qua kortingscode
        if ( $_POST["code"] == "" ) {

            throw new Exception("SUBMIT-ERROR");

        }

        //als kortingscode wel is ingevuld
        else {

          if ( strlen( $_POST["code"] ) == 8 ) {

            $isValid    =   true;

          }

          else {

            throw new Exception("VALIDATION-CODE-LENGTH");


          }

        }


    }


  } catch (Exception $e) {

      $messageCode      =    $e->getMessage();
      $message['type']  =    "";
  		$message['text']  =    "";

      $createMessage    =    false;

      switch ($messageCode) {
        case 'SUBMIT-ERROR':
          $message['type']  =   "error";
          $message['text']  =   "Er werd met het formulier geknoeid";
          break;

        case 'VALIDATION-CODE-LENGTH' :
          $message['type']  =   "error";
          $message['text']  =   "De kortingscode heeft niet de juiste lengte";
          $createMessage    =   true;
          break;

        default:
          # code...
          break;
      }

      logToFile( $message );

      //als wel iets is ingevuld maar niet 8 cijfers
      if ( $createMessage ) {

        createMessage( $message );

      }

      $messageShow  =   showMessage();

  }


  function logToFile( $arrayMessage ) {

      $dateTime   =   '[' . date( 'H:i:s', time() ) . " " . date("j/m/y") .']';

      $ipAddress  =   $_SERVER['REMOTE_ADDR'];

      $errorMessage=   $dateTime . " - " . $ipAddress . " - type:[" . $arrayMessage['type'] . "] " . $arrayMessage['text'] . "\n\r";

      file_put_contents( 'log.txt', $errorMessage, FILE_APPEND );

  }


  function createMessage( $message ){

    $_SESSION[ 'message' ][ 'type' ]      =   $message['type'];
    $_SESSION[ 'message' ][ 'message' ]   =   $message['text'];

  }

  function showMessage(){

    /*$session kan leeg zijn als unset geweest is of nog niks in
    *--> eerst via isset checken voor je hem in variabele wilt steken,
    anders error*/
    if ( isset($_SESSION[ 'message' ]) ) {

      $messageShow    =   $_SESSION[ 'message' ][ 'message' ];
      //mag volledig unset worden
      unset($_SESSION[ 'message' ]);

    }


    if ( isset( $messageShow ) ) {

      return $messageShow;

    }

    else {

      return false;

    }

  }







 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Error handling</title>
  </head>

  <body>

    <h2>Geef uw kortingscode op</h2>

    <?php if ( isset( $messageShow ) ): ?>

        <p><?php echo $messageShow ?></p>

    <?php endif ?>




    <?php if ( $isValid ): ?>

        <p>Korting toegekend!</p>


    <?php else : ?>

      <form action="opdracht-error-handling.php" method="post">

          <label for="code">Kortingscode</label>
          <input type="text" name="code" id="code">

          <input type="submit" name="submit" value="Verzenden">

      </form>


    <?php endif ?>




  </body>
</html>

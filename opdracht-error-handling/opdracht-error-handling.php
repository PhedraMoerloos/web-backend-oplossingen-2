<<?php

  session_start();

  $isValid    = false;

  try {


    if ( isset($_POST["submit"]) ) {

        //formulier is ingezonden

        //checken of er iets is ingevuld qua kortingscode
        if ( $_POST["code"] == "" ) {

            throw new Exception("SUBMIT-ERROR");

        }


        if ( strlen( $_POST["code"] ) == 8 ) {

          $isValid    =   true;

        }

        else {

          throw new Exception("VALIDATION-CODE-LENGTH");


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

      if ( $createMessage ) {

        createMessage( $message );

      }

      logToFile( $message );

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

    $messageShow    =   $_SESSION[ 'message' ][ 'message' ];

    if !($messageShow) {

      return false;

    }

    else {

      return $messageShow;

    }

  }







 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Error handling</title>
  </head>

  <style>

    .hide{

      display: none;

    }

  </style>

  <body>

    <h2>Geef uw kortingscode op</h2>

    <p><?php echo $messageShow ?></p>

    <form class="<?php echo ( $isValid )? "hide" : ""?>"action="opdracht-error-handling.php" method="post">

        <label for="code">Kortingscode</label>
        <input type="text" name="code" id="code">

        <input type="submit" name="submit" value="Verzenden">

    </form>

    <p><?php echo ( $isValid )? "Korting toegekend!" : ""?></p>

  </body>
</html>

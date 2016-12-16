<?php

  session_start();

  $notification =  ( isset( $_SESSION['notification'] ) ) ?  $_SESSION['notification'] : "";

  $email      =    ( isset( $_SESSION['email'] ) ) ?  $_SESSION['email'] : "";

  $wachtwoord =    ( isset( $_SESSION['wachtwoord'] ) ) ?  $_SESSION['wachtwoord'] : "";



 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Security login</title>
   </head>
   <body>

      <?php if ( $notification ): ?>
        <?= $notification ?>
      <?php endif; ?>

     <h2>Registreren:</h2>

     <form action="registratie-process.php" method="post">

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?= $email ?>">

        <label for="paswoord">Paswoord:</label>
        <input type="text" name="paswoord" value="<?= $wachtwoord ?>">
        <input type="submit" name="generatePassword" value="Genereer wachtwoord">

        <input type="submit" name="register" value="Registreer">

     </form>

   </body>
 </html>

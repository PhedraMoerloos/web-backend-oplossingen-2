<?php

  session_start();

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

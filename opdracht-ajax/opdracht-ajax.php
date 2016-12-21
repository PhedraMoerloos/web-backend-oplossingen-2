<?php

  session_start();

  $errorMessage = ( isset( $_SESSION['errorMessage'] ) ) ? $_SESSION['errorMessage'] : "";

  $email = ( isset( $_SESSION['email'] ) ) ? $_SESSION['email'] : "";

  $text = ( isset( $_SESSION['text'] ) ) ? $_SESSION['text'] : "";

  $sendCopy = ( isset( $_SESSION['sendCopy'] ) ) ? $_SESSION['sendCopy'] : "";


 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Opdracht ajax</title>
   </head>
   <body>

     <?php if ( $errorMessage ): ?>
       <?= $errorMessage ?>
     <?php endif; ?>


     <h2>Contacteer ons:</h2>

     <form action="contact.php" method="post">

       <label for="email">Emailadres:</label><br>
       <input type="text" id="email" name="email" value="<?= $email ?>"><br>

       <label for="message">Boodschap:</label><br>
       <textarea name="message" id="message" rows="8" cols="80"><?= $text ?></textarea><br>

       <input type="checkbox" name="sendCopy" value="checked = 'checked'" <?= $sendCopy ?>>Stuur een kopie naar mezelf<br>

       <input type="submit" name="submit" value="Verzenden">

     </form>


   </body>
 </html>

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

     <form id="contactform" action="contact.php" method="post">

       <label for="email">Emailadres:</label><br>
       <input type="text" id="email" name="email" value="<?= $email ?>"><br>

       <label for="message">Boodschap:</label><br>
       <textarea name="message" id="message" rows="8" cols="80"><?= $text ?></textarea><br>

       <input type="checkbox" name="sendCopy" value="checked = 'checked'" <?= $sendCopy ?>>Stuur een kopie naar mezelf<br>

       <input type="submit" name="submit" value="Verzenden">

     </form>


     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

     <script>

 			$( document ).ready(function(){

 				$('#contactform').submit(function(){

 					var postVar = $('#contactform').serialize();

          //ajax call
 					$.ajax({

 						type: "POST",
 						url: "contact-api.php",
 						data: postVar,
 						success: function(roughDataPhp) {

                    //JSON.parse om json te decoderen naar javascript
 										var dataJs = JSON.parse(roughDataPhp);

 										}

 									}//einde succes functie

 						})//einde ajax call

          //opt einde return false --> handelen form af via ajax
 					return false;

 				})//einde submit functie

 			})
 		</script>

   </body>
 </html>

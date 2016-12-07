<?php

  $message      =  "";

  try {


    if ( isset($_POST['submit'] )) {

      $db   =   new PDO( "mysql:host=localhost;dbname=bieren", "root", "BackendP2016" );

      $brnaam   = $_POST['brnaam'];
      $adres    = $_POST['adres'];
      $postcode = $_POST['postcode'];
      $gemeente = $_POST['gemeente'];
      $omzet    = $_POST['omzet'];


      try {

        $query  = 'INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet)
  										VALUES ( :brnaam, :adres, :postcode, :gemeente, :omzet )';

        $statement   = $db->prepare($query);

        $statement->bindValue(":brnaam", $brnaam);
        $statement->bindValue(":adres", $adres);
        $statement->bindValue(":postcode", $postcode);
        $statement->bindValue(":gemeente", $gemeente);
        $statement->bindValue(":omzet", $omzet);

        //eerst gwn if $statement->execute() == true --> .. maar dan
        //voeg 2 x toe --> proberen in variabele te steken, voegt 1x toe
        $test =   $statement->execute();

        //als bewijs is dat het is toegevoegd aan tabel brouwers --> message geven + id tonen
        if ( $test ) {

          $insertId = $db->lastInsertId();
          $message  = "Brouwerij succesvol toegevoegd. Het unieke nummer van deze brouwerij is " . $insertId;

        }



      } catch (PDOException $e) {

        $message = "Er ging iets mis met het toevoegen. Probeer opnieuw.";

      }


    }



  } catch (PDOException $e) {

      $message  = "Connectie is mislukt, " . $e->getMessage();

  }




 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>crud insert</title>
   </head>
   <body>

     <?php if ($message): ?>

       <?= $message ?>

     <?php endif ?>

     <h2>Voeg een brouwer toe:</h2>

     <form action="opdracht-crud-insert.php" method="post">

       <label for="brnaam">Brouwernaam:</label>
       <input type="text" name="brnaam" id="brnaam">

       <label for="adres">Adres:</label>
       <input type="text" name="adres" id="adres">

       <label for="postcode">Postcode:</label>
       <input type="text" name="postcode" id="postcode">

       <label for="gemeente">Gemeente:</label>
       <input type="text" name="gemeente" id="gemeente">

       <label for="omzet">Omzet:</label>
       <input type="text" name="omzet" id="omzet">

       <input type="submit" name="submit" value="Verzenden">

     </form>


   </body>
 </html>

<?php

  $message            =   "";

  $arrayBrouwerFound  =   "";

  $brouwerFound       =   "";


  try {

    $db     =  new PDO("mysql:host=localhost;dbname=bieren", "root", "BackendP2016");

    //als onderaan staat --> tabel niet up to date met verwijderde items
    if ( isset( $_POST['delete'] ) ) {

        $nrMeegegeven = $_POST['delete'];


        $queryDelete  = "DELETE FROM brouwers
                        WHERE brouwernr = :nrmeegegeven";

        $statementDelete = $db->prepare( $queryDelete );
        $statementDelete->bindValue(":nrmeegegeven", $nrMeegegeven);

        $brouwerDeleted = $statementDelete->execute();

        if ( $brouwerDeleted ) {

          $message = "hey, je hebt gevraagd om brouwer " . $nrMeegegeven . " te deleten, is gebeurd!";

        }

        else {

          $message = "De datarij kon niet verwijderd worden. Probeer opnieuw.";

        }


    }


    if ( isset( $_POST['edit'] ) ) {

        $nrMeegegeven = $_POST['edit'];


        $queryFind  = "SELECT * FROM brouwers
                      WHERE brouwernr = :nrmeegegeven";

        $statementFind = $db->prepare( $queryFind );
        $statementFind->bindValue(":nrmeegegeven", $nrMeegegeven);

        $brouwerFound = $statementFind->execute();

        if ( $brouwerFound ) {

          $arrayBrouwerFound  = array();
          while ( $queryBrouwerFound =  $statementFind->fetch(PDO::FETCH_ASSOC)) {

              $arrayBrouwerFound[] = $queryBrouwerFound;

          }

        }

        else {

          $message = "Deze brouwerij werd niet gevonden.";

        }


    }


    if ( isset($_POST['wijzigen'])) {

      $id       = $_POST['id'];
      $brnaam   = $_POST['brnaam'];
      $adres    = $_POST['adres'];
      $postcode = $_POST['postcode'];
      $gemeente = $_POST['gemeente'];
      $omzet    = $_POST['omzet'];


      try {

        $queryUpdate  = 'UPDATE brouwers
                        SET brnaam = :brnaam, adres = :adres, postcode = :postcode, gemeente = :gemeente, omzet = :omzet
  										  WHERE brouwernr = :id';

        $statementUpdate   = $db->prepare($queryUpdate);

        $statementUpdate->bindValue(":id", $id);
        $statementUpdate->bindValue(":brnaam", $brnaam);
        $statementUpdate->bindValue(":adres", $adres);
        $statementUpdate->bindValue(":postcode", $postcode);
        $statementUpdate->bindValue(":gemeente", $gemeente);
        $statementUpdate->bindValue(":omzet", $omzet);


        $BrouwerUpdated =   $statementUpdate->execute();


        if ( $BrouwerUpdated ) {

          $message      = "Brouwerij succesvol aangepast.";
          $brouwerFound = false;

        }



      } catch (PDOException $e) {

        $message = "Er ging iets mis met het aanpassen. Probeer opnieuw of neem contact op met de systeembeheerder wanneer deze fout blijft aanhouden.";

      }


    }


    //opmaken tabel
    $query  =   "SELECT * FROM brouwers";

    $statement  = $db->prepare( $query );
    $statement->execute();


    $arrayBrouwers    =    array();

    while ( $queryResult =  $statement->fetch(PDO::FETCH_ASSOC)) {

        $arrayBrouwers[] = $queryResult;

    }


    $arrayKolomnamen   =   array();
    $arrayKolomnamen[] =   "#";

    foreach ( $arrayBrouwers[0] as $kolomnaam => $value ) {

        $arrayKolomnamen[] = $kolomnaam;

    }

    $arrayKolomnamen[] =   " ";
    $arrayKolomnamen[] =   " ";







  } catch (PDOException $e) {

      $message  =   "Connectie mislukt, " . $e->getMessage();

  }



 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>crud update</title>
   </head>
   <body>

     <?php if ($message): ?>

        <?= $message ?>

     <?php endif ?>



     <?php if ($brouwerFound): ?>

       <h2>Brouwerij <?= $arrayBrouwerFound[0]['brnaam'] ?> ( #<?= $arrayBrouwerFound[0]['brouwernr'] ?> ) wijzigen</h2>

       <form action="opdracht-crud-update.php" method="post">

         <input type="hidden" name="id" value="<?= $arrayBrouwerFound[0]['brouwernr'] ?>">

         <label for="brnaam">Brouwernaam:</label>
         <input type="text" name="brnaam" id="brnaam" value="<?= $arrayBrouwerFound[0]['brnaam'] ?>">

         <label for="adres">Adres:</label>
         <input type="text" name="adres" id="adres" value="<?= $arrayBrouwerFound[0]['adres'] ?>">

         <label for="postcode">Postcode:</label>
         <input type="text" name="postcode" id="postcode" value="<?= $arrayBrouwerFound[0]['postcode'] ?>">

         <label for="gemeente">Gemeente:</label>
         <input type="text" name="gemeente" id="gemeente" value="<?= $arrayBrouwerFound[0]['gemeente'] ?>">

         <label for="omzet">Omzet:</label>
         <input type="text" name="omzet" id="omzet" value="<?= $arrayBrouwerFound[0]['omzet'] ?>">

         <input type="submit" name="wijzigen" value="Wijzigen">

       </form>

     <?php endif ?>






     <table>

       <thead>

        <tr>
          <?php foreach ($arrayKolomnamen as $kolomnaam): ?>
              <th><?= $kolomnaam ?></th>
          <?php endforeach; ?>
        </tr>

       </thead>

      <tbody>

        <?php foreach ($arrayBrouwers as $indexNr => $queryResult): ?>
          <tr>
            <td><?= $indexNr + 1 ?></td>

            <?php foreach ($queryResult as $kolomnaam => $value): ?>
                <td><?= $value ?></td>
            <?php endforeach; ?>

            <td>
              <form action="opdracht-crud-update.php" method="post">

                  <input type="image" name="delete" src="icon-delete.png" alt="delete" value="<?= $queryResult['brouwernr'] ?>" />

              </form>
            </td>

            <td>
              <form action="opdracht-crud-update.php" method="post">

                  <input type="image" name="edit" src="icon-edit.png" alt="edit" value="<?= $queryResult['brouwernr'] ?>" />

              </form>
            </td>

          </tr>
        <?php endforeach; ?>

      </tbody>

     </table>

   </body>
 </html>

<?php

  $message  =  "";


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







  } catch (PDOException $e) {

      $message  =   "Connectie mislukt, " . $e->getMessage();

  }



 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>crud delete</title>
   </head>
   <body>

     <?php if ($message): ?>

        <?= $message ?>

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

              <form action="opdracht-crud-delete.php" method="post">

                  <input type="image" name="delete" src="icon-delete.png" alt="delete" value="<?= $queryResult['brouwernr'] ?>" />

              </form>

            </td>

          </tr>
        <?php endforeach; ?>

      </tbody>

     </table>

   </body>
 </html>

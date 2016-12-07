<?php

$message          =   "";


try {


    $db           =   new PDO("mysql:host=localhost;dbname=bieren", "root", "BackendP2016");


    /*$query        =   "SELECT *
                      FROM bieren
                      INNER JOIN brouwers
                      ON bieren.brouwernr = brouwers.brouwernr
                      WHERE bieren.naam LIKE :startName AND brouwers.brnaam LIKE :brouwerName";

    $statement     =   $db->prepare($query);

    $statement->bindValue( ':startName', 'du%' );
    $statement->bindValue( ':brouwerName', '%a' );*/

    $query        =   "SELECT *
                      FROM bieren
                      INNER JOIN brouwers
                      ON bieren.brouwernr = brouwers.brouwernr
                      WHERE bieren.naam LIKE 'du%' AND brouwers.brnaam LIKE '%a%'";

    $statement     =   $db->prepare($query);



    $statement->execute();

    /*uit query krijgen we 4 resultaten, 4 rijen met values. Per rij -->
    * entry maken. [0] --> 1ste resultaat van query,[1] = tweede,...

    *associatieve array want dan kunnen we binnen zo een index [0] bv -->
    kolomnaam => value doen */
    $assocArray    =    array();
    while ( $queryResult = $statement->fetch(PDO::FETCH_ASSOC) ) {

      $assocArray[] = $queryResult;

    }

    //eerste kolomnaam komt niet uit de query --> nummering
    $kolomnaamArray = array();
    $kolomnaamArray[] = "#";
    //kunnen de eerste entry pakken als voorbeeld, kolomnamen zijn toch
    //overal hetzelfde, evengoed $assocArray[1] kunnen pakken
    foreach ($assocArray[0] as $kolomnaam => $waardenKolom) {

      $kolomnaamArray[] = $kolomnaam;

    }



    //$message       =    "Connectie maken gelukt";


} catch (PDOException $e) {

    $message        =   "Connectie maken mislukt, " . $e->getMessage();

}


 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>crud query</title>
   </head>
   <body>

     <?php if ($message): ?>

       <?= $message ?>

     <?php endif ?>




     <table>

       <thead>

         <tr>
           <?php foreach ($kolomnaamArray as $kolomnaam): ?>
             <th><?php echo $kolomnaam?></th>
            <?php endforeach ?>
         </tr>

       </thead>

       <tbody>
          <?php foreach ($assocArray as $indexNr => $queryResult): ?>
          <tr>
            <td><?= $indexNr + 1 ?></td>

            <?php foreach ($queryResult as $kolomnaam => $value): ?>

              <td><?= $value ?></td>

            <?php endforeach ?>

          </tr>

          <?php endforeach ?>
       </tbody>

     </table>


   </body>
 </html>

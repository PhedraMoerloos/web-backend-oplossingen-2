<?php

$message          =   "";


try {


    $db           =   new PDO("mysql:host=localhost;dbname=bieren", "root", "root");


    $startName    =   "du";
    $brouwerName  =   "a";

    $query        =   "SELECT *
                      FROM bieren
                      INNER JOIN brouwers
                      ON bieren.brouwernr = brouwers.brouwernr
                      WHERE bieren.naam LIKE startName% AND bieren.braam LIKE %brouwerName%";

    $statement     =   $db->prepare($query);

    $statement->bindValue("startName%", $startName);
    $statement->bindValue("%brouwerName%", $brouwerName);

    $statement->execute();

    //alles uit tabel bieren halen volgens de query, nu in associated array steken
    //kolomnaam => value, value telkens
    $assocArray    =    array();
    while ( $rij = $statement->fetch(PDO::FETCH_ASSOC) ) {

      $assocArray[] = $rij;

    }

    //telkens de eerste index van de associated array = kolomnaam
    $kolomnaamArray = array();
    foreach ($assocArray[0] as $kolomnaam => $bierSoort) {

      $kolomnaamArray[] = $kolomnaam;

    }



    $message       =    "Connectie maken gelukt";


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
          <?php foreach ($assocArray as $kolomnaam => $bier): ?>
          <tr>
            <td><?= $bier ?></td>
          </tr>

          <?php endforeach ?>
       </tbody>

     </table>


   </body>
 </html>

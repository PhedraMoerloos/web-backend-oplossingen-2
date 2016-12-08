<?php

  $message  = "";

    try {

        $db         =   new PDO("mysql:host=localhost;dbname=bieren", "root", "BackendP2016");

        $query      =   "SELECT * FROM bieren
                        INNER JOIN brouwers
                        ON bieren.brouwernr	= brouwers.brouwernr
                        INNER JOIN soorten
                        ON bieren.soortnr = soorten.soortnr";

        $statement  =   $db->prepare($query);
        $statement->execute();

        $arrayBierenTotal = array();
        while ( $queryResult = $statement->fetch(PDO::FETCH_ASSOC) ) {

          $arrayBierenTotal[] = $queryResult;

        }



    } catch (PDOException $e) {

        $message        =   "Connectie maken mislukt, " . $e->getMessage();

    }


 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>query order by</title>
   </head>
   <body>

     <?php if ($message): ?>
       <?= $message ?>
     <?php endif; ?>

     <?php var_dump($arrayBierenTotal) ?>





   </body>
 </html>

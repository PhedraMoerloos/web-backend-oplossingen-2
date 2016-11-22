<?php

function __autoload( $class ){

  include 'classes/' . $class . '.php';

}

__autoload('Percent');

$new         =    150;
$unit        =    100;

$percent     =    new Percent($new, $unit);

$absolute    =    $percent->absolute;
$relative    =    $percent->relative;
$hundred     =    $percent->hundred;
$nominal     =    $percent->nominal;




 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Classes begin</title>
   </head>
   <body>

     <p>Hoeveel procent is <?= $new ?> van <?= $unit ?>?</p>

     <table>
       <tr>
         <td>Absoluut</td>
         <td><?= $absolute ?></td>
       </tr>

       <tr>
         <td>Relatief</td>
         <td><?= $relative ?></td>
       </tr>

       <tr>
         <td>Geheel getal</td>
         <td><?= $hundred ?></td>
       </tr>

       <tr>
         <td>Nominaal</td>
         <td><?= $nominal ?></td>
       </tr>
     </table>


   </body>
 </html>

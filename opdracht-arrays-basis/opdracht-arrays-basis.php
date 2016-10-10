<?php

    //Deel 1:

    $dieren         =       array( "slang", "olifant", "mier", "muis", "kangeroo", "paard", "zwaluw", "eekhoorn", "mug", "kat");

    $dieren_2[]     =       "slang";
    $dieren_2[]     =       "olifant";
    $dieren_2[]     =       "mier";
    $dieren_2[]     =       "muis";
    $dieren_2[]     =       "kangeroo";
    $dieren_2[]     =       "paard";
    $dieren_2[]     =       "zwaluw";
    $dieren_2[]     =       "eekhoorn";
    $dieren_2[]     =       "mug";
    $dieren_2[]     =       "kat";

   
    $voertuigen     =       array( "landvoertuigen" => array( "auto", "brommer" ), "luchtvoertuigen" => array( "vliegtuig" ), "watervoertuigen" => array( "cruise schip", "speedboot" ) );




    //Deel 2: 
    
    
    
        
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Array's basis:</h1>
		
		<h3>Deel 1:</h3>
		
		<pre><?php print_r( $dieren ) ?></pre>
		
		<p><?php var_dump( $dieren_2 ) ?></p>
		
		<pre><?php print_r( $voertuigen ) ?></pre>
		
		
		
		<h3>Deel 2:</h3>
		


	</section>

</body>
</html>
<?php

    //Deel 1:

    $dieren         =       array( "slang", "olifant", "mier", "muis", "kangeroo", "paard", "zwaluw", "eekhoorn", "mug", "kat");
    $aantalDieren   =       count( $dieren );
    $teZoekenDier   =       "rat";
    $boodschap      =       "";

    if( in_array( $teZoekenDier, $dieren ) )   
    {
        $boodschap = "Het dier: " . $teZoekenDier . " zit in de array.";
    }

    else 
    {
        $boodschap = "Het dier: " . $teZoekenDier . " zit niet in de array.";
    }
    

    //Deel 2: 
    //nu sorteer je hem, dus wijzig je de originele array dieren, geeft gewoon 1 (true) terug als gelukt is.
    $gesorteerdeArray   =       sort( $dieren );
    $zoogdieren         =       array( "konijn", "haas", "cavia" );
    $dierenLijst        =       array_merge( $dieren, $zoogdieren );
   

        
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

		<h1>Array's functions:</h1>
		
		
		<h3>Deel 1:</h3>
		
		<pre><?php print_r( $aantalDieren ) ?></pre>
		
		<pre><?php print_r( $boodschap ) ?></pre>
		
		
		
		<h3>Deel 2:</h3>
		
		<pre><?php print_r( $dieren ) ?></pre>
		
		<pre><?php print_r( $dierenLijst ) ?></pre>
		


	</section>

</body>
</html>
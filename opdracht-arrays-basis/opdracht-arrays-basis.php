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

   
    $voertuigen     =       array( "landvoertuigen" => array( "auto", "brommer" ), 
                                  "luchtvoertuigen" => array( "vliegtuig" ),
                                  "watervoertuigen" => array( "cruise schip", "speedboot" ) );




    //Deel 2: 
    
    //2.1
    $getallenlijst      =       array( 1, 2, 3, 4, 5 );
    
    //2.2
    //$vermenigvuldiging  =       $getallenlijst[0] * $getallenlijst[1] * $getallenlijst[2] * $getallenlijst[3] * $getallenlijst[4];
    $vermenigvuldiging    =       array_product( $getallenlijst );
    
    //2.3
    $omAfTeDrukken      =       "";

    if( $getallenlijst[0] % 2 != 0 )
    {
        $omAfTeDrukken .= $getallenlijst[0];
    }

    if( $getallenlijst[1] % 2 != 0 )
    {
        $omAfTeDrukken .= $getallenlijst[1];
    }

    if( $getallenlijst[2] % 2 != 0 )
    {
        $omAfTeDrukken .= $getallenlijst[2];
    }

    if( $getallenlijst[3] % 2 != 0 )
    {
        $omAfTeDrukken .= $getallenlijst[3];
    }

    if( $getallenlijst[4] % 2 != 0 )
    {
        $omAfTeDrukken .= $getallenlijst[4];
    }


    //2.4
    $reverseArray       =       array_reverse( $getallenlijst );
    $arrayOptelsom0     =       $getallenlijst[0] + $reverseArray[0];
    $arrayOptelsom1     =       $getallenlijst[1] + $reverseArray[1];
    $arrayOptelsom2     =       $getallenlijst[2] + $reverseArray[2];
    $arrayOptelsom3     =       $getallenlijst[3] + $reverseArray[3];
    $arrayOptelsom4     =       $getallenlijst[4] + $reverseArray[4];
    

        
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
		
		<p>De vermenigvuldiging van alle getallen in de array geeft:<pre><?php print_r( $vermenigvuldiging ) ?></pre></p>
		
		<p>Deze getallen waren oneven: <pre><?php print_r( $omAfTeDrukken ) ?></pre></p>
		
		<p>De nieuwe array ziet er zo uit: <pre><?php print_r( $reverseArray ) ?></pre></p>
		
		<p>Som van de array waarden van index 0: <pre><?php print_r( $arrayOptelsom0 ) ?></pre></p>
		<p>Som van de array waarden van index 1: <pre><?php print_r( $arrayOptelsom1 ) ?></pre></p>
		<p>Som van de array waarden van index 2: <pre><?php print_r( $arrayOptelsom2 ) ?></pre></p>
		<p>Som van de array waarden van index 3: <pre><?php print_r( $arrayOptelsom3 ) ?></pre></p>
		<p>Som van de array waarden van index 4: <pre><?php print_r( $arrayOptelsom4 ) ?></pre></p>


	</section>

</body>
</html>
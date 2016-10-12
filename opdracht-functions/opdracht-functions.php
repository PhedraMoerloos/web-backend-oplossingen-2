<?php
    
    function berekenSom( $getal1, $getal2 )
    {
        
        $som    =   0;
        
        $som    =   $getal1 + $getal2;
        
        return $som;
        
    }


    
    function vermenigvuldig( $getal1, $getal2 )
    {
        
        $product    =   0;
        
        $product    =   $getal1 * $getal2;
        
        return $product;
        
    }


    function isEven( $getal )
    {
        
        $resultaat    =   false;
        $boodschap  =   "resultaat is false.";
        
        if( $getal % 2 == 0 )
        {
            
            $resultaat  =   true;
            $boodschap  =   "resultaat is true.";
            
        }
        
        return $boodschap;
        
    }


    function lenUpper( $string )
    {
        
        $lengthString   =   strlen( $string );
        $upperString    =   strtoupper( $string );
        
        $arrayResult    =   array( $lengthString, $upperString );
        
        return $arrayResult;
        
    }

    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Looping statements foreach:</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Functions:</h1>
		
		
		<h3>Deel 1:</h3>
		
		<pre><?php print_r( berekenSom( 5, 12 ) ) ?></pre>
		<pre><?php print_r( vermenigvuldig( 5, 12 ) ) ?></pre>
		<pre><?php print_r( isEven( 12 ) ) ?></pre>
		<pre><?php print_r( lenUpper( "Hoe lang is deze string?" ) ) ?></pre>
		
		
		

		


	</section>

</body>
</html>
<?php
    
    $text               =       file_get_contents( "text-file.txt" );
    $textChars          =       str_split( $text, 1 );
    $sortTextChars      =       rsort( $textChars );
    $ReversedTextChars  =       array_reverse( $textChars );
    $LengthTextChars    =       count( $ReversedTextChars );
    $ArrayNoDubbel      =       array();

    foreach( $ReversedTextChars as $Character )
    {
        
        //als er al een $ArrayNoDubbel['b'] bv is aangemaakt/een standaardwaarde heeft (niet null), 
        if( isset( $ArrayNoDubbel[$Character] ) )
        {
        
            //gaan we deze $ArrayNoDubbel['b'] verhogen van waarde 1 naar 2
            ++$ArrayNoDubbel[ $Character ];
            
        }
        
        
        //als deze nog geen waarde heeft/nog niet is aangemaakt
        else 
        {
            
            //gaan we hem aanmaken (associative) en een standaard beginwaarde geven --> bv. 'b' => 1
            $ArrayNoDubbel[$Character] =  1;
            
        }
        
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

		<h1>Looping statements foreach:</h1>
		
		
		<h3>Deel 1:</h3>
		
		<pre><?php print_r( $ArrayNoDubbel ) ?></pre>

		


	</section>

</body>
</html>
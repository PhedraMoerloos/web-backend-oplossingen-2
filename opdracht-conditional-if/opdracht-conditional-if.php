<?php


// Deel 1:

    $getal      =       1;
    $dag        =       "";
    
    if( $getal === 1 ) 
    {
       
        $dag = "maandag";
        
    }

    if( $getal === 2 ) 
    {
       
        $dag = "dinsdag";
        
    }

    if( $getal === 3 ) 
    {
       
        $dag = "woendag";
        
    }

    if( $getal === 4 ) 
    {
       
        $dag = "donderdag";
        
    }

    if( $getal === 5 ) 
    {
       
        $dag = "vrijdag";
        
    }

    if( $getal === 6 ) 
    {
       
        $dag = "zaterdag";
        
    }

    if( $getal === 7 ) 
    {
       
        $dag = "zondag";
        
    }


// Deel 2:


    $dagHoofdletters        =       strtoupper( $dag );

    //alle A's vervangen dus gewoon met replace
    $letter                 =       "A";
    $dagHoofdlettersAniet   =       str_replace( $letter, strtolower($letter), $dagHoofdletters );

    //met strrpos positie van laatste A in de dagen vinden
    $indexLaatsteA          =       strrpos( $dagHoofdletters, $letter );
    
    

/*
*   $dagHoofdlettersNietLaatsteA    =   $dagHoofdletters ...
*   hier dan enkel die laatste a (positie hebben we) --> to lowercase: strtolower()
*
*/


    /* Meer hard coded Deel 2.2:
    *$lettervervang          =       "a";
    *$dagHoofdlettersAniet   =       str_replace( $letter, $lettervervang, $dagHoofdletters );
    */

        
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

		<h1>Voorbeeld van PHP-commentaar</h1>
		
		<p>Het is vandaag <?php echo $dag ?>.</p>
		
		<p>Komaan, enthousiaster, het is vandaag <?php echo $dagHoofdletters ?>!!</p>
		
        <p>Als we alles in hoofdletters willen, behalve de a's, ziet dat er zo uit: <?php echo $dagHoofdlettersAniet ?>.</p>
		
		

	</section>

</body>
</html>
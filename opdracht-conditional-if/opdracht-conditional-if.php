<?php


// Deel 1:

    $getal      =       7;
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

	</section>

</body>
</html>
<?php
    
    $rentevoet              =       0.08;
    
    function HoeveelHoudtHijOver ( $jaar )
    {
     
        global $rentevoet;  
        static $bedragOver  =   100000;
        
        //hij wilt het weten voor 10 jaar, dus als we aan het laatste jaar zitten, nog 1 keer berekenen en final boodschap geven, daarna moeten we uit de loop springen
        if( $jaar <= 1 )
        {
        
            $bedragKwijtDitJaar     =       $bedragOver *  $rentevoet;
            $bedragOver             =       floor( ($bedragOver - $bedragKwijtDitJaar) );
            echo "De 10 jaar zijn om, hij eindigt met: " . $bedragOver ." euro. <br>";
            return;
            
        }
        
        else 
        {
            
            $bedragKwijtDitJaar     =       $bedragOver *  $rentevoet;
            $bedragOver             =       floor( ($bedragOver - $bedragKwijtDitJaar) );
            echo "Nog " . ($jaar - 1) . " jaar te gaan, en hij heeft voorlopig nog " . $bedragOver . " euro over. <br>";
            HoeveelHoudtHijOver ( --$jaar );
            
        }
        
        
    }

 
 

    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht functies recursive:</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Opdracht functies recursive:</h1>
		
		
		<h3>Deel 1:</h3>
		
		<p>Hij start met 100 000 euro.</p>
		<p><?php HoeveelHoudtHijOver ( 10 ) ?></p>
		
		
		

		


	</section>

</body>
</html>
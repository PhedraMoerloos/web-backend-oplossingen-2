<?php


// Deel 1:

    $jaartal                =       2007;
    $isSchrikkeljaar        =       false;
    $trueOfFalse            =       "";
    $reden                  =       "";
   


    //als deelbaar door 400 --> sowieso schrikkeljaar dus moet niks meer gebeuren, als het NIET deelbaar is door 400, komen we in de speciale regel bij de else

    if( $jaartal % 400 == 0 )
    {
        $isSchrikkeljaar = true;
        $reden = "het jaartal was deelbaar door 400";
    }

    
    //speciale regel: als deelbaar door 4 en door 100 --> geen schrikkeljaar (false, maar staat standaard op false --> deelbaar door 4 en niet door 100 --> true)
    else
    {
       
        $reden = "Getal was niet deelbaar door 400";
        
        
        if( $jaartal % 4 == 0 && $jaartal % 100 != 0 )
        {
           
                $isSchrikkeljaar = true;
                $reden = "het jaartal was deelbaar door 4, maar niet door 100"; 
            
        }
        
    }



    if ( $isSchrikkeljaar == true ) 
    {
          $trueOfFalse = "Ja"; 
    }

    
    else
    {
        $trueOfFalse = "Nee";
    }


// Deel 2:
    
    



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

		<h1>Opdracht if else:</h1>
		
		
		<h3>Deel 1:</h3>
		    <p>Het is een schrikkeljaar? <?php echo $trueOfFalse ?>, en de reden is: <?= $reden ?>.</p>
		    
		    
        
		
	</section>



</body>
</html>
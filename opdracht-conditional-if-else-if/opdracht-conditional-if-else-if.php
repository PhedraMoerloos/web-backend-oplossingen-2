<?php


    $getal                  =       32;
    $boodschap              =       "";
   


    if( $getal > 0 && $getal <= 10 )
    {
     
        $boodschap = "Het getal ligt tussen 0 en 10.";
        
    }

    
    else if( $getal > 10 && $getal <= 20 )
    {
     
        $boodschap = "Het getal ligt tussen 10 en 20.";
        
    }


    else if( $getal > 20 && $getal <= 30 )
    {
     
        $boodschap = "Het getal ligt tussen 20 en 30.";
        
    }


    else if( $getal > 30 && $getal <= 40 )
    {
     
        $boodschap = "Het getal ligt tussen 30 en 40.";
        
    }


    else if( $getal > 40 && $getal <= 50 )
    {
     
        $boodschap = "Het getal ligt tussen 40 en 50.";
        
    }


    else if( $getal > 50 && $getal <= 60 )
    {
     
        $boodschap = "Het getal ligt tussen 50 en 60.";
        
    }



    else if( $getal > 60 && $getal <= 70 )
    {
     
        $boodschap = "Het getal ligt tussen 60 en 70.";
        
    }


    else if( $getal > 70 && $getal <= 80 )
    {
     
        $boodschap = "Het getal ligt tussen 70 en 80.";
        
    }

    
    else if( $getal > 80 && $getal <= 90 )
    {
     
        $boodschap = "Het getal ligt tussen 80 en 90.";
        
    }


    else if( $getal > 90 && $getal <= 100 )
    {
     
        $boodschap = "Het getal ligt tussen 90 en 100.";
        
    }


    else 
    {
        
        $boodschap = "Het getal is kleiner dan 0 of groter dan 100.";
        
    }


    
    $boodschap = strrev ( $boodschap );
    

  

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
		    <p><?php echo $boodschap ?></p>
		    
		    
        
		
	</section>



</body>
</html>
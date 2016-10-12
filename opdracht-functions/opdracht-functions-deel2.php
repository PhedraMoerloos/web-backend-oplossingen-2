<?php
    
    $helden =   array("Bla", "Blo", "Bli", 2, true, 3);
    $uitvoerenMethode  =   drukArrayAfVolledig( $helden );


    function drukArrayAfVolledig( $array )
    {
        
        $arrayPlusTekst =   array();
        
        //key => value bij een associatieve array: "string" => "string" bv maar als het een gewone array is: bv 0 => waarde
        foreach( $array as $key => $value ) 
        {
            
            $arrayPlusTekst[]   =   "helden[" . $key ."] heeft als waarde: " . $value . ".";
            
        }
        
        return $arrayPlusTekst;
        
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

		<h1>Opdracht functies:</h1>
		
		
		<h3>Deel 2:</h3>
		
		
		<p>Heel de array afdrukken:</p>

        <section>
        <?php foreach( $uitvoerenMethode as $value ): ?>
        
            <p><?php echo $value ?></p>
        
        
        <?php endforeach ?>
        </section>
		
		
		

		


	</section>

</body>
</html>
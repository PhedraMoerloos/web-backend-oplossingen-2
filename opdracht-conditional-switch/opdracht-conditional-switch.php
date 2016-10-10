<?php


// Deel 1:

    $getal      =       0;
    $dag        =       "";
    
    switch( $getal ) 
    {
       
        case 1:
        $dag = "maandag";
        break;
        
        case 2:
        $dag = "dinsdag";
        break;
        
        case 3:
        $dag = "woendag";
        break;
        
        case 4:
        $dag = "donderdag";
        break;
        
        case 5:
        $dag = "vrijdag";
        break;
        
        case 6:
        $dag = "zaterdag";
        break;
        
        case 7:
        $dag = "zondag";
        break;
        
        default:
        $dag = "maandag";
        
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

		<h1>Conditional statements switch:</h1>
		
		<p>Het is vandaag <?php echo $dag ?>.</p>
		
		<pre><?php print_r( $dag ) ?></pre>
		
		<p><?php var_dump( $dag ) ?></p>
		
		
		
		

	</section>

</body>
</html>
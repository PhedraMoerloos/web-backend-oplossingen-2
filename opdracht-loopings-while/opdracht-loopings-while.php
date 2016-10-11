<?php

    $i  =   0;

    /*while( $i <= 100 )
    {
     
        $drukAf = $i;
        
        ++$i;
        
    }*/

   

        
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

		<h1>Looping statements While:</h1>
		
		
		<h3>Deel 1:</h3>

		<section>
		
            <?php while( $i <= 100 ): ?>
               
                <p><?php echo $i ?></p>
                <?php ++$i ?>
                
            <?php endwhile ?>
		
		</section>


	</section>

</body>
</html>
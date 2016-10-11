<?php
    
    $boodschappenlijstje    =   array( "appels", "brood", "salsa", "avocado's", "appelmoes" );
    
    $i  =   0;
    
    $lengteArrayIndex       =   count( $boodschappenlijstje ) - 1;

    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Looping statements while:</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Looping statements while:</h1>
		
		
		<h3>Deel 2:</h3>

		<ul>
		
            <?php while( $i <= $lengteArrayIndex ): ?>
               
                <li><?php echo $boodschappenlijstje[$i] ?></li>
                <?php ++$i ?>
                
            <?php endwhile ?>
		
		</ul>


	</section>

</body>
</html>
<?php

    //Deel 3:

    $getallen                   =       array( 8, 7, 8, 7, 3, 2, 1, 2, 4);
    
    $getallenZonderDuplicaten   =       array_unique( $getallen );
    
    $gesorteerdeArray           =       rsort( $getallenZonderDuplicaten );

   

        
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

		<h1>Array's functions:</h1>
		
		
		<h3>Deel 3:</h3>
		
		<pre><?php print_r( $getallenZonderDuplicaten ) ?></pre>


	</section>

</body>
</html>
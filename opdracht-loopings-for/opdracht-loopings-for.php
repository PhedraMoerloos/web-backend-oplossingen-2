<?php
    
    $rijen      =   10;
    $kolommen   =   10;

    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Looping statements for:</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Looping statements for:</h1>
		
		
		<h3>Deel 1:</h3>

		<table>
		    
           
            <?php for( $i=0; $i < $rijen; ++$i ): ?>
               
                <tr>
                    <td><?php echo "rij" ?></td>
                </tr>
                
            <?php endfor ?>
            
		
		</table>


	</section>

</body>
</html>
<?php

    $voornaam       =       "Phedra";
    $achternaam     =       "Moerloos";
    $volledigeNaam  =       $voornaam . $achternaam;
    $aantalKarakters =      strlen( $volledigeNaam );

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

		<h1>Contatenate opdracht:</h1>
		
		<p>In het woord <?php echo $volledigeNaam ?> zitten <?= $aantalKarakters ?> karakters.</p>
		

	</section>

</body>
</html>
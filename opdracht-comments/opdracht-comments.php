<?php

    $naam       =   "Phedra";
    $achternaam =   "Moerloos"

    /*
    *Dit is een commentaarblock met mijn naam en email:
    *Mijn voornaam is Phedra.
    *Achternaam is Moerloos.
    *En mijn email adres is phedra.moerloos@student.kdg.be
    */
        
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

		<h1>Voorbeeld van PHP-commentaar</h1>
		
		<p>Mijn naam is <?php echo $naam ?>.</p>
		
		<p>Maar mijn achternaam is <?= $achternaam ?>.</p>

	</section>

</body>
</html>
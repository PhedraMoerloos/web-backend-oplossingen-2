<?php


// Deel 1:

    $fruit                   =       "kokosnoot";
    $toFindFirstCharacter    =       "o";
    $numberOfCharacters      =       strlen( $fruit );

    $indexFirstCharacter     =       strpos( $fruit, $toFindFirstCharacter );
    $positionFirstCharacter  =       $indexFirstCharacter + 1;


// Deel 2:
    
    $fruit2                  =       "ananas";
    $toFindLastCharacter     =       "a";
    $indexLastCharacter      =       strrpos( $fruit2, $toFindLastCharacter );
    $positionLastCharacter   =       $indexLastCharacter + 1;


// Deel 3:
    $lettertje               =       "e";
    $cijfertje               =       3;
    $langsteWoord            =       "zandzeepsodemineralenwatersteenstralen";
    $nieuwLangsteWoord       =       str_replace( $lettertje, $cijfertje, $langsteWoord );

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

		<h1>String extra functions opdracht:</h1>
		
		
		<h3>Deel 1:</h3>
		    <p>In het woord <?php echo $fruit ?> zitten <?= $numberOfCharacters ?> karakters.</p>
		    <p>De eerste letter "<?php echo $toFindFirstCharacter ?>" bevindt zich op de <?php echo $positionFirstCharacter ?>de plaats in het woord <?=$fruit ?>.</p>
		    
		    
        <h3>Deel 2:</h3>
            <p>De laatste letter "<?php echo $toFindLastCharacter ?>" bevindt zich op de <?php echo $positionLastCharacter ?>de plaats in het woord <?=$fruit2 ?>.</p>
        
        
        <h3>Deel 3:</h3>
            <p>Hier is het oude langste woord: <?php echo $langsteWoord?>.</p>
            <p>Hier is het nieuwe langste woord: <?php echo $nieuwLangsteWoord?>!</p>
		
	</section>



</body>
</html>
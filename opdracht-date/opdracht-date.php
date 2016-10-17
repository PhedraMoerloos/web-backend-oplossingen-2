<?php
    
   
    $timestamp      =       mktime(22,35,25,1,21,1904);

    $date           =       date('j F Y, h:i:s a', $timestamp);

 
 

    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht date:</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Opdracht date:</h1>
		
		
		<h3>Deel 1:</h3>
		
		<p>De timestamp voor de datum 22u 35m 25sec 21 januari 1904 is: <?= $timestamp ?></p>
		
		<p><?= $date ?></p>
		
		
		
		
		

		


	</section>

</body>
</html>
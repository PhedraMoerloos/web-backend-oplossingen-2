<?php
    
    session_start();


    if( isset($_GET['sessionstatus']) )
    {

        if( $_GET['sessionstatus'] == 'stop' )
        {

            session_destroy();
            header('location: opdracht-sessions.php');

        }
        
    }



    $focus      =   ( isset($_GET['focus']) ) ? $_GET['focus'] : "";




    //variabelen al setten op iets zodat ze op de volgende pagina goed weergegeven kunnen worden, anders error, ook voor deze pagina, als het al een waarde heeft --> die tonen, anders gwn "" (niks)
    //email:
    $email  =  ( isset( $_SESSION['email'] ) ) ?  $_SESSION['email'] : "";


    //nickname
    $nickname   =  ( isset( $_SESSION['nickname'] ) ) ? $_SESSION['nickname'] : ""; 


    
    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht sessions:</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Opdracht sessions:</h1>
		
		
		<h2>Deel 1: registratiegegevens</h2>
		
		<form action="opdracht-sessions-pagina02-adres.php" method="post">
		    
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?= $email ?>" <?= ( $focus == 'email' ) ? 'autofocus' : '' ?>>
            
            <label for="nickname">Nickname:</label>
            <input type="text" id="nickname" name="nickname" value="<?= $nickname ?>" <?= ( $focus == 'nickname' ) ? 'autofocus' : '' ?>><br>
            
            <input type="submit" name="next" value="Volgende">
            
		</form>
        
        
        <a href="opdracht-sessions-pagina03-adres.php?sessionstatus=stop">Stop de sessie</a>
		
		
		<p><?php var_dump($_SESSION) ?></p>
		
		
		
		

		


	</section>

</body>
</html>
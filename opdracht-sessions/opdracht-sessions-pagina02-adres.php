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
    
    



    //als het gegevensformulier verzonden is
    if( isset($_POST['email'])  )
    {
        
        $_SESSION['email']      =       $_POST['email'];
        $_SESSION['nickname']   =       $_POST['nickname'];
        
    }


    if( isset($_SESSION['email']) )
    {
        
        $email                  =       $_SESSION['email'];
        $nickname               =       $_SESSION['nickname'];
        
    }




    //als we rechtstreeks naar deze pagina komen moet er vor $straat bv al een waarde zijn, en we kunnen niet gwn direct $_SESSION['straat'] nemen want als die nog niet geset is (gebeurt pas op de volgende pagina normaal, de inhoud van de post wordt erin gestoken) krijgen we een error.
    //straat:
    $straat     =   ( isset( $_SESSION['straat'] ) ) ? $_SESSION['straat'] : "";


    //nummer:
    $nummer     =   ( isset( $_SESSION['nummer'] ) ) ? $_SESSION['nummer'] : "";


    //gemeente:
    $gemeente   =   ( isset( $_SESSION['gemeente'] ) ) ? $_SESSION['gemeente'] : "";


    //postcode:
    $postcode   =   ( isset( $_SESSION['postcode'] ) ) ? $_SESSION['postcode'] : "";



    

    
    
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
		
		<p>Email: <?= $email ?></p>
		<p>Nickname: <?= $nickname ?></p>
		
		
		
		
		<h2>Deel 2: adresgegevens</h2>
		
		<form action="opdracht-sessions-pagina03-adres.php" method="post">
		    
            <label for="straat">Straat:</label>
            <input type="text" id="straat" name="straat" value="<?= $straat ?>" <?= ( $focus == 'straat' ) ? 'autofocus' : '' ?>>
            
            <label for="nummer">Nummer:</label>
            <input type="number" id="nummer" name="nummer" value="<?= $nummer ?>" <?= ( $focus == 'nummer' ) ? 'autofocus' : '' ?>>
            
            <label for="gemeente">Gemeente:</label>
            <input type="text" id="gemeente" name="gemeente" value="<?= $gemeente ?>" <?= ( $focus == 'gemeente' ) ? 'autofocus' : '' ?>>
            
            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode" value="<?= $postcode ?>" <?= ( $focus == 'postcode' ) ? 'autofocus' : '' ?>><br>
            
            <input type="submit" name="next" value="Volgende">
            
		</form>
		
		
		<a href="opdracht-sessions-pagina02-adres.php?sessionstatus=stop">Stop de sessie</a>
		
		<p><?php var_dump($_SESSION) ?></p>
		

		
		
		

		


	</section>

</body>
</html>
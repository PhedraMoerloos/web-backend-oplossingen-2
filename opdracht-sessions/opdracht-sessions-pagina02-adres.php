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


    if( isset($_GET['focus']) )
    {
        
        $focus      =       $_GET['focus'];
        
    }

    else
    {
     
        $focus      =       "";
        
    }
    
    





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




    //variabelen al setten --> geen error op volgende pagina
    //straat:
    if( isset( $_SESSION['straat'] ) )
    {
        
        $straat  =   $_SESSION['straat'];
        
    }

    else
    {
    
        $straat  =   "";
        
    }



    //nummer:
    if( isset( $_SESSION['nummer'] ) )
    {
        
        $nummer  =   $_SESSION['nummer'];
        
    }

    else
    {
    
        $nummer  =   "";
        
    }



    //gemeente:
    if( isset( $_SESSION['gemeente'] ) )
    {
        
        $gemeente  =   $_SESSION['gemeente'];
        
    }

    else
    {
    
        $gemeente  =   "";
        
    }



    //postcode:
    if( isset( $_SESSION['postcode'] ) )
    {
        
        $postcode  =   $_SESSION['postcode'];
        
    }

    else
    {
    
        $postcode  =   "";
        
    }



    

    
    
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
		
		
		
		
		

		


	</section>

</body>
</html>
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


    //als het adresformulier verzonden is
    if( isset($_POST['straat'])  )
    {
        
        $_SESSION['straat']      =       $_POST['straat'];
        $_SESSION['nummer']      =       $_POST['nummer'];
        $_SESSION['postcode']    =       $_POST['postcode'];
        $_SESSION['gemeente']    =       $_POST['gemeente'];
        
        $straat                  =       $_SESSION['straat'];
        $nummer                  =       $_SESSION['nummer'];
        $gemeente                =       $_SESSION['gemeente'];
        $postcode                =       $_SESSION['postcode'];
        
        
    }


    $email                  =       $_SESSION['email'];
    $nickname               =       $_SESSION['nickname'];

    
    
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
		
		
		
		<h2>Overzichtpagina:</h2>
		
		<p>Email: <?= $email ?></p><a href="opdracht-sessions.php?focus=email">wijzig</a>
		<p>Nickname: <?= $nickname ?></p><a href="opdracht-sessions.php?focus=nickname">wijzig</a>
		<p>Straat: <?= $straat ?></p><a href="opdracht-sessions-pagina02-adres.php?focus=straat">wijzig</a>
		<p>Nummer: <?= $nummer ?></p><a href="opdracht-sessions-pagina02-adres.php?focus=nummer">wijzig</a>
		<p>Gemeente: <?= $gemeente ?></p><a href="opdracht-sessions-pagina02-adres.php?focus=gemeente">wijzig</a>
		<p>Postcode: <?= $postcode ?></p><a href="opdracht-sessions-pagina02-adres.php?focus=postcode">wijzig</a>
		
		
		<a href="opdracht-sessions-pagina03-adres.php?sessionstatus=stop">Stop de sessie</a>
		
		
		<p><?php var_dump($_SESSION) ?></p>
		
		

		


	</section>

</body>
</html>
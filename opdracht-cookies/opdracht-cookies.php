<?php
    
 
    $inlogegegevens         =       file_get_contents ( "inloggevens.txt" );
    $înloggegevensarray     =       explode ( "," , $inlogegegevens);
    $gebruikersnaamjuist    =       $înloggegevensarray[0];
    $paswoordjuist          =       $înloggegevensarray[1];
    $message                =       "";
    $showlogoutbutton      =       false;


    if( isset( $_GET['uitloggen'] ) )
    {
        
        if( $_GET['uitloggen'] == 'true' )
        {
            
            setcookie('authenticated','', time() - 3600 );
            header('location: opdracht-cookies.php');
            
        }
        
    }



    //formulier is verzonden
    if( isset($_POST['gebruikersnaam']) )
    {

        if( $_POST['gebruikersnaam'] == $gebruikersnaamjuist && $_POST['paswoord'] == $paswoordjuist )
        {

            $message    =   "Inloggegevens zijn juist.";
            //6 minuten * 60 seconden per minuut --> 360
            setcookie('correctingelogd',TRUE, time() + 360 );
            
            

        }
        
        else
        {
            
            $message    =   "Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.";
            
        }
        
    }


    //dus succesvol ingelogd
    if( isset($_COOKIE['correctingelogd']) )
    {
        
        $showlogoutbutton      =       true;
        
    }




   
    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht cookies:</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Inloggen:</h1>
		
		
		<form action="opdracht-cookies.php" method="post">
		    
            <label for="gebruikersnaam">Gebruikersnaam:</label>
            <input type="text" id="gebruikersnaam" name="gebruikersnaam">
            
            <label for="paswoord">Paswoord:</label>
            <input type="text" id="paswoord" name="paswoord"><br>
            
            <input type="submit" name="send" value="Verzenden">
            
		</form>
       
       <a href="opdracht-cookies.php?uitloggen=true"><?= ( $showlogoutbutton ) ? "Uitloggen" : "" ?></a>
        
        
        
        <pre><?php print_r( $inlogegegevens ) ?></pre>
        <pre><?php print_r( $înloggegevensarray ) ?></pre>
        <p>Gebruikersnaam juist: <pre><?php print_r( $gebruikersnaamjuist ) ?></pre></p>
        <p>Paswoord juist: <pre><?php print_r( $paswoordjuist ) ?></pre></p>
		
		<p><?= $message ?></p>
		
		

		


	</section>

</body>
</html>
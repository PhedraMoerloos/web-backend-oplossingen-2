<?php
    
 
    $inlogegegevens         =       file_get_contents ( "inloggevens.txt" );
    $înloggegevensarray     =       explode ( "," , $inlogegegevens);
    $gebruikersnaamjuist    =       $înloggegevensarray[0];
    $paswoordjuist          =       $înloggegevensarray[1];
    $message                =       "";
    $showlogout	            =	    false;




    //als er op de logout button is geklikt --> cookie verwijderen en pagina refreshen --> showlogout staat dan terug op false
    if( isset( $_GET['logstatus'] ) )
    {
        
        
        if( $_GET['logstatus'] == 'uitloggen' )
        {
            
            setcookie('correctingelogd','', time() - 3600 );
            header('location: opdracht-cookies.php');
            
        }
        
    }





    //formulier moet enkel gecheckt worden als de cookie nog niet geset is (gebeurt bij na het checken als juiste gegevens zijn)
    if ( !isset( $_COOKIE['correctingelogd'] ) ) 
    {
    //formulier is verzonden, checken of juiste gegevens zijn ingevuld
        if( isset($_POST['gebruikersnaam']) )
        {
            
            //cookie setten en de pagina refreshen om het juiste deel te tonen (Dashboard of inlogpagina)
            if( $_POST['gebruikersnaam'] == $gebruikersnaamjuist && $_POST['paswoord'] == $paswoordjuist )
            {
                 
                $message    =   "Inloggegevens zijn juist!";
                //6 minuten * 60 seconden per minuut --> 360
                setcookie('correctingelogd', TRUE, time() + 360 );
                header('location: opdracht-cookies.php');

            }

            else
            {

                $message    =   "Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.";

            }

        }
    }




    


    //als wel al succesvol ingelogd --> moeten dashboard zien dus showlogout op true
    if ( isset( $_COOKIE['correctingelogd'] ) ) 
	{
		$showlogout	=	true;
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

        <?php if ( $showlogout == false ): ?>

            <h1>Inloggen:</h1>

            <form action="opdracht-cookies.php" method="post">

                <label for="gebruikersnaam">Gebruikersnaam:</label>
                <input type="text" id="gebruikersnaam" name="gebruikersnaam">

                <label for="paswoord">Paswoord:</label>
                <input type="text" id="paswoord" name="paswoord"><br>

                <input type="submit" name="send" value="Verzenden">

            </form>
		
       
        <?php else: ?>     

           <h1>Dashboard:</h1>

           <p>U bent ingelogd</p>

           <a href="opdracht-cookies.php?logstatus=uitloggen">Uitloggen</a>
           
        <?php endif ?>     
       
       
   
      
        
        
        
        <pre><?php print_r( $inlogegegevens ) ?></pre>
        <pre><?php print_r( $înloggegevensarray ) ?></pre>
        <p>Gebruikersnaam juist: <pre><?php print_r( $gebruikersnaamjuist ) ?></pre></p>
        <p>Paswoord juist: <pre><?php print_r( $paswoordjuist ) ?></pre></p>
		
		<p><?= $message ?></p>
		
		<p><?= $showlogout ?></p>
		
		<p><?php var_dump($_COOKIE) ?></p>
		
		

		


	</section>

</body>
</html>
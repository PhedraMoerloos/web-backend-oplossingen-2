<?php
    

    $username               =       "vlaren1bijlage1";
    $password               =       "fratierolie";
    $message                =       "";


        


    //checken of POST variabele username is gesset/ het formulier gesubmit is
    if( isset( $_POST["username"] ) )
    {
        
        
        if( $username == $_POST['username'] && $password  == $_POST['password'] ) 
        {
            
            $message        =       "Welkom";
            
        }
        
        
        else 
        {
            
            $message        =       "Er ging iets mis bij het inloggen, probeer opnieuw";
            
        }
        

    }


        

        
    
 
 

    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht-post</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">

	
</head>

<body class="web-backend-inleiding">

	<section class="body">
        
        <h1>Inloggen:</h1>

		<form action="opdracht-post.php" method="post">
		    
		    <label for="username">Username: </label>
		    <input type="text" name="username" id="username">
		    
		    <label for="password">Paswoord: </label>
		    <input type="password" name="password" id="password">
		    
            <input type="submit" name="submit" value="Verzenden">
		    
		</form>
		
		<p><?= $message ?></p>
		
		


	</section>

</body>
</html>
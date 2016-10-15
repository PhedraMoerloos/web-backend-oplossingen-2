<?php
    
    $message        =       "";
    $iframe         =       "";
    


    if( isset( $_GET['link'] ) )
    {
    
        $link       =       $_GET['link'];
        
        switch( $link )
        {
            
            case "cursus":
            $iframe        =       '<iframe src="pdfs/web-backend-cursus.pdf" width="1000px" height="750px"></iframe>';
            break;
        
            case "voorbeelden":
            //do something
            $message        =       "De button 'Voorbeelden' is aangeklikt.";
            break;
        
            case "opdrachten":
            //do something
            $message        =       "De button 'Opdrachten' is aangeklikt.";
            break;
        
            default:
            //do something
        }
    
    }
    
 
 

    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>herhalingsopdracht 01</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
	
	<style>
    
        .iframeholder
        {
            
            width: 1000px;
            height: 750px;
            border: 1px solid grey;
            
        }
    
    </style>

	
</head>

<body class="web-backend-inleiding">

	<section class="body">
        
        <h1>Indexpagina</h1>
        
        <ul>
            <!-- a hrefs met de $_GET variabele telkens, 
            als je erop klikt -> zet je de $_GET['link'] variabele -> waarde "cursus" bv. -->
            <li><a href="opdracht-herhalingsopdracht-01.php?link=cursus">Cursus</a></li>
            <li><a href="opdracht-herhalingsopdracht-01.php?link=voorbeelden">Voorbeelden</a></li>
            <li><a href="opdracht-herhalingsopdracht-01.php?link=opdrachten">Opdrachten</a></li>
        </ul>
        
        <form action="opdracht-herhalingsopdracht-01.php" method="get">
            
            <label for="zoekbalk">Zoek naar:</label>
            <input type="text" id="zoekbalk" name="zoekterm" placeholder="Geef een zoekterm in">
            <input type="submit" name="submit">
            
        </form>
        
        
        <h1>Inhoud</h1>
        
        <div class="iframeholder"><?php echo $iframe ?></div>
        
        <p><?php var_dump($_GET) ?></p>
        
        <p><?= $message ?></p>
		
		


	</section>

</body>
</html>
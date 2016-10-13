<?php
    
 
    $artikels        =       array( 
                                    "titel"     => array(    "Dad and daughter spend $16 on park admission; find 2.03 carat diamond",
                                                            "Thai King Bhumibol Adulyadej dies at 88",
                                                            "Trump's ghost will haunt the GOP -- and possibly kill it"),
        
                                    "datum"     => array(    "12/10/2016",
                                                            "13/10/2016",
                                                            "12/10/2016"),
        
                                    "inhoud"    => array(   "There are those who go to the Crater of Diamonds State Park, armed with shovels and buckets and kneepads and maps to spend the day meticulously digging for diamonds.",
                                                            "The king passed away in a 'peaceful manner', the Royal Palace said. Civil servants and officers working in government-related agencies are ordered to wear black clothes for one year in mourning from Friday. India's Prime Minister Narendra Modi described him as 'one of the tallest leaders of our times.",
                                                            "It's all over for Donald Trump. He'll lose on November 8 and probably lose big, going over the cliff edge with his supporters like Thelma and Louise."),
        
                                    "afbeelding"=> array(   "father-and-daughter-find-large-diamond.jpg",
                                                            "thailand-king-bhumibol-adulyadej.jpg",
                                                            "stanley-hedshot-story-body.jpg"),
        
                                    "afbeeldingBeschrijving"  => array( "Vader en dochter, hand met diamand naast een munt.",
                                                                        "2 vrouwen rouwen om de overleden koning terwijl ze een foto van hem vasthouden.",
                                                                        "stanley hedshot foto van gezicht.")
                                 );

    

 
 

    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht get:</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
	
	<style>
    
        .bodyArtikel 
        {
            
            background-color: rgb(180, 180, 180);
            width: 400px;
            padding: 20px;
            
        }
        
        .title 
        {
            
            border-bottom: 1px solid #464646;
            font-weight: bold;
            
        }
        
        
        .afbeelding 
        {
            
            width: 250px;
            
        }
    
    </style>
	
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Opdracht get:</h1>
		
		<h3>De krant van vandaag</h3>
		
        
        
		    <div class="bodyArtikel">
               
               <p class="title">Voorbeeldtitle</p>
               
               <p>Datum</p>
               
               <img class="afbeelding" src="images/father-and-daughter-find-large-diamond.jpg" alt="Vader en dochter, hand met diamand naast een munt.">
               <p>There are those who go to the Crater of Diamonds State Park, armed with shovels and buckets and kneepads and maps to spend the day meticulously digging for diamonds.</p>
               
               <a href="http://edition.cnn.com/2016/10/11/travel/arkansas-park-diamond-find-trnd/index.html" >Lees meer</a>

		    </div>
		
		
		<pre><?php print_r( $artikels ) ?></pre>
		
		
		
		

		


	</section>

</body>
</html>
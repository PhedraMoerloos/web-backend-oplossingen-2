<?php
    

    
    
    //de multifunctionele array moet bestaan uit 3 arrays met telkens de info per artikel zodat we bij de foreach elk artikels'info overlopen
    $artikels        =       array(
        
                                    array(  "titel"     => "Dad and daughter spend $16 on park admission; find 2.03 carat diamond",
                                            "datum"     => "12/10/2016",
                                            "inhoud"    => "There are those who go to the Crater of Diamonds State Park, armed with shovels and buckets and kneepads and maps to spend the day meticulously digging for diamonds.",
                                            "afbeelding"=> "father-and-daughter-find-large-diamond.jpg",
                                            "afbeeldingBeschrijving"  => "Vader en dochter, hand met diamand naast een munt."
                                        ),
        
        
        
                                    array(  "titel"     =>  "Thai King Bhumibol Adulyadej dies at 88",
                                            "datum"     =>  "13/10/2016",
                                            "inhoud"    => "The king passed away in a 'peaceful manner', the Royal Palace said. Civil servants and officers working in government-related agencies are ordered to wear black clothes for one year in mourning from Friday. India's Prime Minister Narendra Modi described him as 'one of the tallest leaders of our times.",
                                            "afbeelding"=> "thailand-king-bhumibol-adulyadej.jpg",
                                            "afbeeldingBeschrijving"  => "2 vrouwen rouwen om de overleden koning terwijl ze een foto van hem vasthouden."
                                        ),
                        
        
        
                                    array(  "titel"     => "Trump's ghost will haunt the GOP -- and possibly kill it",
                                            "datum"     =>  "12/10/2016",
                                            "inhoud"    => "It's all over for Donald Trump. He'll lose on November 8 and probably lose big, going over the cliff edge with his supporters like Thelma and Louise.",
                                            "afbeelding"=> "stanley-hedshot-story-body.jpg",
                                            "afbeeldingBeschrijving"  => "stanley hedshot foto van gezicht."
                                         )
        
        
                                    ); //einde algemene array


    
        $showindividualArticle  =       false;
        


        //checken of GET variabele id is gesset
        if( isset( $_GET['id'] ) )
        {
            
            $id =   $_GET['id'];
            $showindividualArticle  =       true;
                
        }


        

        
    
 
 

    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ($showindividualArticle) ? $artikels[$id]['titel'] : "Opdracht get"?></title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
	
	<style>
    
        .bodyArtikel 
        {
            
            background-color: rgb(227, 227, 227);
            width: 400px;
            padding: 20px;
            margin-bottom: 15px;
            
        }
        
        .title 
        {
            
            border-bottom: 1px solid #727272;
            font-weight: bold;
            
        }
        
        
        .afbeelding 
        {
            
            width: 250px;
            
        }
        
        
        .hide
        {
            
            display: none;
            
        }
    
    </style>
	
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1><?php echo ($showindividualArticle) ? $artikels[$id]['titel'] : "Opdracht get"?></h1>
		
		<h3><?php echo ($showindividualArticle) ? "Individueel artikel" : "De krant van vandaag"?></h3>
		
        
        <section>
        <?php foreach( $artikels as $key => $value ): ?>
        
            <!--php print_r( $value ): is de array per artikel dus als we een value uit die array willen -> $naamArray(hier $value)['key'] -> value
            -->
        
            <div class="bodyArtikel<?php echo ($key != $id) ? " hide" : ""?>">
               
               <p class="title"><?php echo $value['titel'] ?></p>
               
               <p><?php echo $value['datum'] ?></p>
               
               <img class="afbeelding" src="images/<?php echo $value['afbeelding'] ?>" alt="<?php echo $value['afbeeldingBeschrijving'] ?>">
               
               <p><?php echo ($showindividualArticle) ? $value['inhoud'] : substr( $value['inhoud'], 0, 50 ) . "..." ?></p>
               
               <a href="opdracht-get.php?id=<?php echo $key ?>" class="<?php echo ($showindividualArticle) ? "hide" : ""?>">Lees meer</a>

            </div>
		  
       <?php endforeach ?>
        </section>
		
		
		
		
		
		
		

		


	</section>

</body>
</html>
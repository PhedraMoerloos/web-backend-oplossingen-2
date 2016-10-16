<?php
    
    $iframe         =       "";
    $dir            =       "";
    $link           =       "";
    $arrayMapInhoud =       array();
    $showCursus     =       false;
    $arraySearched  =       array();
    $arrayResultsSearch =   array();
    $showSearchedItems  =   false;
    $message        =       "";
    


    if( isset( $_GET['link'] ) )
    {
    
        $link       =       $_GET['link'];
        
        switch( $link )
        {
            
            case "cursus":
            $iframe         =       '<iframe src="pdfs/web-backend-cursus.pdf" width="1000px" height="750px"></iframe>';
            $showCursus     =       true;
            break;
        
            case "voorbeelden":
            //do something
            $arrayMapInhoud =       showList( "voorbeelden" );
            $showCursus     =       false;
            break;
        
            case "opdrachten":
            //do something
            $arrayMapInhoud =       showList( "opdrachten" );
            $showCursus     =       false;
            break;
        
            default:
            //do something
        }
        
        
        
    
    }
    


    function showList( $dir )
    {
        
        $arraydir           =       scandir( $dir );
        
        return $arraydir;
        
        
    }



    function searchFiles( $searchFor )
    {
    
        $arrayVoorbeelden   =       scandir( "voorbeelden" );
        $arrayOpdrachten    =       scandir( "opdrachten" );
        
        $arrayEverything    =       array_merge( $arrayVoorbeelden, $arrayOpdrachten);
        
        
        foreach( $arrayEverything as $value )
        {
            
            
            //als de de zoekterm terug vinden in de value van de array, voegen we hem toe aan een nieuwe array met alle gevonden values             die de zoekterm bevatten.
            if( (strpos( $value, $searchFor ) !== false) )
            {
                
                $arraySearched[] = $value;
                
            }
            
            
        }
        
        
        if( empty($arraySearched) )
        {
            
            $message = "Er werden geen zoekresultaten gevonden voor deze zoekterm.";
            $arraySearched[] = $message;
            
        }
        
        

        return $arraySearched;
            

        
        
        
        
    }




    if( isset( $_GET['zoekterm'] ) )    
    {   
        
        $search             =   $_GET['zoekterm'];
        $arrayResultsSearch =   searchFiles( $search ); 
        $showSearchedItems  =   true;
        
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
        
        
        .hide 
        {
            
            display: none;   
        
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
        
        <div class="iframeholder<?php echo ( $showCursus ) ? "" : " hide" ?>"><?php echo $iframe ?></div>
        
        
        
        
        <ul>
        <?php foreach( $arrayMapInhoud as $value ): ?>
         
            <li><?= $value ?></li>
            
        <?php endforeach ?>
        </ul>
        
        
        
        
        <h3<?php echo ( $showSearchedItems ) ? "" : " class='hide'" ?>><?php echo ( $showSearchedItems ) ? "Zoekresultaten voor: '" . $search . "'" : "" ?></h3>
        
        
        <ul>
        <?php foreach( $arrayResultsSearch as $value ): ?>
         
            <li><?= $value ?></li>
            
        <?php endforeach ?>
        </ul>
        
        
        

        

        
        

		
		


	</section>

</body>
</html>
<?php
    
    $rijen      =   10;
    $kolommen   =   10;
    $uitkomst;

    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Looping statements for:</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
	<style>
    
        .oneven 
        {
         
            background-color: green;
            
        }
        
    </style>
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Looping statements for:</h1>
		
		
		<h3>Deel 2:</h3>

		<table>
		    
           
            <?php for( $i=0; $i < $rijen; ++$i ): ?>
               
                <tr>
                   
                    <?php for( $j=1; $j <= $kolommen; ++$j ): ?>
                       
                        
                        <!--
                            hierin die $i laten terugkomen, voor elke td (kolom)    0 x ...    0 x ...   0 x ...   0 x ...   0 x ...
                            
                            gaan niet maal 0 doen ( 0 x 0 ) maar x 1,  x 2,  x 3,... dus j moet vanaf 1 beginnen -> wel maar 10 kolommen 
                            ook dus <= $kolommen (10) 
                        -->
                        
                        <?php $uitkomst = $i * $j ?>
                        
                        <td class="<?php echo( ($uitkomst % 2 != 0) ? "oneven" : "" ) ?>"><?php echo $uitkomst ?></td>
                        <!--                   (condition) ? code->true : code->false     -->
                        
                        
                    <?php endfor ?>
                    
                </tr>
                
            <?php endfor ?>
            
		
		</table>
		
		


	</section>

</body>
</html>
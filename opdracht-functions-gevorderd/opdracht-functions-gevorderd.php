<?php
    
    $needle1        =       "2";
    $needle2        =       "8";
    $needle3        =       "a";

    $md5HashKey     =       'd1fa402db91a7a93c4f414b8278ce073';

    function getGlobal( $needle )
    {
        
        global $md5HashKey;
        
        $hashKey                =       $md5HashKey;
        $lenHashKey             =       strlen( $hashKey );
        $numberOfOccurences     =       substr_count( $hashKey, $needle );
        $percentage             =       ($numberOfOccurences / $lenHashKey) * 100;
        
        return $percentage;
        
    }


    function getGlobal2( $needle )
    {
        
        $hashKey                =       $GLOBALS["md5HashKey"];
        $lenHashKey             =       strlen( $hashKey );
        $numberOfOccurences     =       substr_count( $hashKey, $needle );
        $percentage             =       ($numberOfOccurences / $lenHashKey) * 100;
        
        return $percentage;
        
        
    }


    function getGlobal3( $haystack, $needle )
    {
        
        $lenHashKey             =       strlen( $haystack );
        $numberOfOccurences     =       substr_count( $haystack, $needle );
        $percentage             =       ($numberOfOccurences / $lenHashKey) * 100;
        
        return $percentage;
        
    }

    
    $getPercentage1     =    getGlobal( $needle1 );
    $getPercentage2     =    getGlobal2( $needle2 );
    $getPercentage3     =    getGlobal3( $md5HashKey, $needle3 );
 

    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Looping statements foreach:</title>
    <link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Opdracht functies:</h1>
		
		
		<h3>Deel 2:</h3>
		
         
        <p>Functie 1: De needle '<?php echo $needle1 ?>' komt <?php echo $getPercentage1 ?>% voor in de hash key '<?php echo $md5HashKey ?>'.</p>
        <p>Functie 2: De needle '<?php echo $needle2 ?>' komt <?php echo $getPercentage2 ?>% voor in de hash key '<?php echo $md5HashKey ?>'.</p>
        <p>Functie 3: De needle '<?php echo $needle3 ?>' komt <?php echo $getPercentage3 ?>% voor in de hash key '<?php echo $md5HashKey ?>'.</p>
       
        
		


	</section>

</body>
</html>
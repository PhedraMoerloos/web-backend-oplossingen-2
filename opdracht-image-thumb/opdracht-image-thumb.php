<?php

 $message = "";
 $imageExt = "";
 $source = "";
 $imageName = "";
 //beginpunten voor crop, als ze niet moeten aangepast worden is het gewoon 0
 $xCoordinateSource = 0;
 $yCoordinateSource = 0;

    if ( isset( $_POST['submit'] ) ) {


      $extensie = $_FILES['file']['type'];
      //check bestandstype
      if ( ($_FILES['file']['type'] == "image/jpeg") ||
           ($_FILES['file']['type'] == "image/jpg") ||
           ($_FILES['file']['type'] == "image/png")) {

        //check grootte bestand --> max 5 MB
        if ( $_FILES['file']['size'] < 5000000 ) {

            //bepalen waar we ergens zitten in onze mappenstructuur
            define( 'ROOT', dirname( __FILE__ ) );
            $location = ROOT;
            try {

              //origineel bestand uploaden naar map img (echte naam bestand, locatie)
              move_uploaded_file( $_FILES['file']['tmp_name'], ($location . "/img/" . $_FILES['file']['name']) );

              //image
              $imageFile      = $location . "/img/" . $_FILES['file']['name'];
              $imageFileInfo  = pathinfo($imageFile);
              $imageName      = $imageFileInfo['filename'];
              $imageExt       = $imageFileInfo['extension'];

              list( $width, $height ) = getimagesize( $imageFile );



              //landscape foto
              if ( $width > $height ) {

                $type               =    "Landscape";
                $middle             =     $width/2;
                $afmetingVierkant   =     $height;
                $xCoordinateSource  =     $middle - ($afmetingVierkant/2);

              }

              else if ( $height > $width ) {

                $type               =    "portrait";
                $middle             =     $height/2;
                $afmetingVierkant   =     $width;
                $yCoordinateSource  =     $height - ($afmetingVierkant/2);

              }

              else {

                $type = "vierkant";

              }

              //image object aanmaken
              switch ($imageExt)
            	{

            		case ('jpeg'):
                case ('jpg'):
            			$source 	= 	imagecreatefromjpeg($imageFile);
            			break;

            		case ('png'):
            			$source 	=	imagecreatefrompng($imageFile);
            			break;

            	}

              $canvasWidth   = 100;
              $canvasHeight  = 100;

              $canvas = imagecreatetruecolor($canvasWidth, $canvasHeight);

              //crop maken
              imagecopyresized($canvas, $source, 0,0,$xCoordinateSource,$yCoordinateSource, $canvasWidth, $canvasHeight, $width, $height);


              switch ($imageExt)
            	{

            		case ('jpeg'):
                case ('jpg'):
            			$imageResized 	= 	imagejpeg($canvas, ("thumb-" . $imageName . "." . $imageExt), 100);
            			break;

            		case ('png'):
            			$imageResized 	=	  imagepng($canvas, ("thumb-" . $imageName . "." . $imageExt), 100);
            			break;

            	}


              move_uploaded_file( $imageResized, ($location . "/img/" . ("thumb-" . $imageName. $imageExt)) );



            } catch (Exception $e) {

              $message = "Kunnen file niet uploaden naar img map.";

            }



        }

        else {

          $message  = "Het bestand heeft niet de juiste grootte. Er is een max van 5MB toegelaten.";

        }

      }

      else {

        $message  = "Het bestand heeft niet de juiste extensie, enkel jpg en png zijn toegelaten.";

      }

    }

 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Image thumb</title>
   </head>
   <body>

     <?php if ($message): ?>
       <?= $message ?>
     <?php endif; ?>

     <?php if ($xCoordinateSource): ?>
       <?php var_dump($xCoordinateSource) ?>
     <?php endif; ?>



     <h2>Thumbnail genereren:</h2>

     <form action="opdracht-image-thumb.php" method="post" enctype="multipart/form-data">

       <label for="file">Foto kiezen:</label>
       <input type="file" name="file" id="file">

       <input type="submit" name="submit" value="Verzenden">

     </form>

     <?php if ($imageName): ?>
       <img src="thumb-<?= $imageName ?>.jpg">
     <?php endif; ?>



   </body>
 </html>

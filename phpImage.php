<!DOCTYPE html> 
<html> 
     
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>CD COVER UPGRADING</title> 
        <meta name="description" content="An interactive getting started guide for Brackets."> 
         
       <style type="text/css"> 
         
           .dee{ 
                
               margin: 20px; 
           } 
            
           .code{ 
                
               border: 2px solid red; 
               width: 1000px; 
               height: 500px; 
               overflow: auto; 
               margin: 50px; 
           } 
            
           #generator{ 
                
               border: 2px solid white; 
               border-radius: 5px; 
               position: relative; 
               left: 30px; 
               background-color: #00D636; 
               padding: 10px; 
               font-size: 20px; 
               color: white; 
               cursor: pointer; 
           } 
            
           #generator:hover{ 
                
               background-color: white; 
               border: 2px solid #00D636; 
               color: #00D636; 
           } 
           
           .joker{
               
               width: 600px;
               height: auto;
               border: 2px solid green;
               position: relative;
               
           }
         
        </style> 
         
    </head> 
    <body> 
         
      <?php 
         
         //$generated= rand(1,6);
     /*   $imageNum = 0; 
           for($i = 0; $i < 6; $i++){ 
                 $generated= rand(1,6);
               $geneerArr = array($generated);
               $rectangle = create_rectangle($imageNum, $generated);   
               //$rectangle[$i]; 
               
               $imageNum += 1; 
             //echo "c est moi".$generated[0];
        
       
               //$generated += 1;
               
               /*if($generated > 6){
                   
                   $generated -= 1;
               }
           }*/   
        
        $generated = rand(1,6);
        $generated1 = rand(1,6);
        $generated2 = rand(1,6);
        $generated3 = rand(1,6);
        $generated4 = rand(1,6);
        $generated5 = rand(1,6);
        
      
            
         /*  $generated[$i] = rand(1,6);
            
          if($generated[0] != $generated[$i] AND $generated[1] != $generated[$i] AND $generated[2] !=$generated[$i] AND $generated[3] !=$generated[$i] AND $generated[4] !=$generated[$i] AND $generated[5] !=$generated[$i]){
       ?>
        <p class="joker"><?php echo "Probeer nog een keer"; ?></p>
        <?php
   }else if($generated[0] == $generated[1] OR $generated[0] == $generated[2] OR $generated[0] == $generated[3] ){
              
              ?>
            <p class="joker"><?php echo "je hebt twoo paires."; ?></p>
        <?php
              
          }*/
     
        create_rectangle( $generated);
        create_rectangle1( $generated1);
        create_rectangle2( $generated2);
        create_rectangle3( $generated3);
        create_rectangle4( $generated4);
        create_rectangle5( $generated5);
        /*$generated3 ;
        $generated4 ;
        $generated5 ;
        $generated6 ;*/
        
        
      
   if($generated != $generated1 AND $generated != $generated2 AND $generated !=$generated3 AND $generated !=$generated4 AND $generated !=$generated5 AND $generated1 != $generated AND $generated1 != $generated2 AND $generated1 !=$generated3 AND $generated1 !=$generated4 AND $generated1 !=$generated5 AND $generated2 != $generated AND $generated2 != $generated1 AND $generated2 !=$generated3 AND $generated2 !=$generated4 AND $generated2 !=$generated5 AND $generated3 != $generated AND $generated3 != $generated1 AND $generated3 !=$generated2 AND $generated3 !=$generated4 AND $generated3 !=$generated5 AND $generated4 != $generated AND $generated4 != $generated1 AND $generated4 !=$generated2 AND $generated4 !=$generated3 AND $generated4 !=$generated5 AND $generated5 != $generated AND $generated5 != $generated1 AND $generated5 !=$generated2 AND $generated5 !=$generated3 AND $generated5 !=$generated4){
       ?>
        <p class="joker"><?php echo "Probeer nog een keer"; ?></p>
        <?php
   }else if($generated == $generated1 OR $generated == $generated2 OR $generated == $generated3 OR $generated == $generated4 OR $generated == $generated5 OR $generated1 == $generated OR $generated1 == $generated2 OR $generated1 == $generated3 OR $generated1 == $generated4 OR $generated1 == $generated5 OR $generated2 == $generated OR $generated2 == $generated1 OR $generated2 == $generated3 OR $generated2 == $generated4 OR $generated2 == $generated5 OR $generated3 == $generated OR $generated3 == $generated1 OR $generated3 == $generated2 OR $generated3 == $generated4 OR $generated3 == $generated5 OR $generated4 == $generated OR $generated4 == $generated1 OR $generated4 == $generated2 OR $generated4 == $generated3 OR $generated4 == $generated5 OR $generated5 == $generated OR $generated5 == $generated1 OR $generated5 == $generated2 OR $generated5 == $generated3 OR $generated5 == $generated4){
       
       ?>
        <<p class="joker"><?php echo "bingo je hebt twoo pairs"; ?></p>
        <?php
       
   }else if($generated == $generated1 AND $generated1 == $generated2 OR $generated == $generated2 AND $generated2 == $generated3 OR $generated == $generated3 AND $generated3 == $generated4 OR $generated == $generated4 AND $generated4 == $generated5 OR $generated == $generated5 AND $generated5 == $generated OR $generated1 == $generated1 AND $generated1 == $generated OR $generated1 == $generated2 AND $generated2 == $generated3 OR $generated1 == $generated3 AND $generated3 == $generated4 OR $generated1 == $generated4 AND $generated4 == $generated5 OR $generated1 == $generated5 AND $generated5 == $generated1 OR  $generated2 == $generated AND $generated == $generated1 OR $generated2 == $generated1 AND $generated1 == $generated2 OR $generated2 == $generated3 AND $generated3 == $generated4 OR $generated2 == $generated4 AND $generated4 == $generated5 OR $generated2 == $generated5 AND $generated5 == $generated2  OR  $generated3 == $generated AND $generated == $generated2 OR $generated3 == $generated1 AND $generated1 == $generated2 OR $generated3 == $generated2 AND $generated2 == $generated4 OR $generated3 == $generated4 AND $generated4 == $generated5 OR $generated3 == $generated5 AND $generated5 == $generated3){
       
       ?>
        <p class="joker"><?php echo "bingo je hebt drie of a kind."; ?></p>
        <?php
       
   }else if($generated == $generated3 AND $generated3 == $generated4 AND $generated4 == $generated5){
       
       ?>
        <p class="joker"><?php echo "bingo je hebt een carr&eacute"; ?></p>
        <?php
       
   }else if($generated == $generated1 AND $generated1 == $generated2 AND $generated2 == $generated3 AND $generated3 == $generated4 AND $generated4 == $generated5 ){
       
       ?>
        <p class="joker"><?php echo "bingo bingo je hebt een poker"; ?></p>
        <?php
       
   }
      /*  $imageNum = 0; 
           for($i = 0; $i < 5; $i++){ 
               $rectangle = create_rectangle($imageNum);   
               $rectangle[$i]; 
               
               $imageNum += 1; 
           }   */
        
        
function  create_rectangle($generated){ 
       
         
     // print "<img src=image.png? class='dee'".date("U").">"; 
     $images = print "<img src=image.png? class='dee'".date("U").">"; 
         $im = @imagecreate(150, 150) or die("Cannot Initialize new GD image stream"); 
         $red = imagecolorallocate($im, 255, 0, 0);  
          $black = imagecolorallocate($im, 0, 0, 0);  
         $white = imagecolorallocate($im, 255, 255, 255);  
           
         
             imagerectangle ($im,  0,  0, 150, 150, $black); 
              
              $rectFill = imagefilledrectangle ($im,   10,  10, 140, 140, $white); 
    
           /* if($generated == $generated2){
                
                 ?>
                    <p class="joker"><?php echo "je suis bingo bingo";  ?></p>
              <?php
                
            }*/
             
       for($i = 0; $i < $generated; $i++){ 
            
           
           if($generated == 1){ 
                
              imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
                
           }else if($generated == 2){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
            
           }else if($generated == 3){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generated == 4){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generated == 5){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generated == 6){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           } 
            
          
        
     
    } 
        
         echo $generated; 
    
         imagepng($im,"image.png"); 
        imagedestroy($im); 
   
            
 } 
        
        
       function  create_rectangle1($generate3){ 
       
     // print "<img src=image.png? class='dee'".date("U").">"; 
     $images = print "<img src=image1.png? class='dee'".date("U").">"; 
         $im = @imagecreate(150, 150) or die("Cannot Initialize new GD image stream"); 
         $red = imagecolorallocate($im, 255, 0, 0);  
          $black = imagecolorallocate($im, 0, 0, 0);  
         $white = imagecolorallocate($im, 255, 255, 255);  
           
         
             imagerectangle ($im,  0,  0, 150, 150, $black); 
              
              $rectFill = imagefilledrectangle ($im,   10,  10, 140, 140, $white); 
              
           
     
       for($i = 0; $i < $generate3; $i++){ 
            
           
           if($generate3 == 1){ 
                
              imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
                
           }else if($generate3 == 2){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
            
           }else if($generate3 == 3){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate3 == 4){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate3 == 5){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate3 == 6){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           } 
            
          
        
     
    } 
        
         echo $generate3; 
    
         imagepng($im,"image1.png"); 
        imagedestroy($im); 
   
            
 } 
      
        
        function  create_rectangle2($generate4){ 
       
     // print "<img src=image.png? class='dee'".date("U").">"; 
     $images = print "<img src=image2.png? class='dee'".date("U").">"; 
         $im = @imagecreate(150, 150) or die("Cannot Initialize new GD image stream"); 
         $red = imagecolorallocate($im, 255, 0, 0);  
          $black = imagecolorallocate($im, 0, 0, 0);  
         $white = imagecolorallocate($im, 255, 255, 255);  
           
         
             imagerectangle ($im,  0,  0, 150, 150, $black); 
              
              $rectFill = imagefilledrectangle ($im,   10,  10, 140, 140, $white); 
              
           
     
       for($i = 0; $i < $generate4; $i++){ 
            
           
           if($generate4 == 1){ 
                
              imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
                
           }else if($generate4 == 2){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
            
           }else if($generate4 == 3){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate4 == 4){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate4 == 5){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate4 == 6){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           } 
            
          
        
     
    } 
        
         echo $generate4; 
    
         imagepng($im,"image2.png"); 
        imagedestroy($im); 
   
            
 } 
      
        
        
        function  create_rectangle3($generate5){ 
    
     // print "<img src=image.png? class='dee'".date("U").">"; 
     $images = print "<img src=image3.png? class='dee'".date("U").">"; 
         $im = @imagecreate(150, 150) or die("Cannot Initialize new GD image stream"); 
         $red = imagecolorallocate($im, 255, 0, 0);  
          $black = imagecolorallocate($im, 0, 0, 0);  
         $white = imagecolorallocate($im, 255, 255, 255);  
           
         
             imagerectangle ($im,  0,  0, 150, 150, $black); 
              
              $rectFill = imagefilledrectangle ($im,   10,  10, 140, 140, $white); 
              
           
     
       for($i = 0; $i < $generate5; $i++){ 
            
           
           if($generate5 == 1){ 
                
              imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
                
           }else if($generate5 == 2){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
            
           }else if($generate5 == 3){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate5 == 4){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate5 == 5){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate5 == 6){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           } 
            
          
        
     
    } 
        
         echo $generate5; 
    
         imagepng($im,"image3.png"); 
        imagedestroy($im); 
   
            
 } 
        
        function  create_rectangle4($generate6){ 
       
     // print "<img src=image.png? class='dee'".date("U").">"; 
     $images = print "<img src=image4.png? class='dee'".date("U").">"; 
         $im = @imagecreate(150, 150) or die("Cannot Initialize new GD image stream"); 
         $red = imagecolorallocate($im, 255, 0, 0);  
          $black = imagecolorallocate($im, 0, 0, 0);  
         $white = imagecolorallocate($im, 255, 255, 255);  
           
         
             imagerectangle ($im,  0,  0, 150, 150, $black); 
              
              $rectFill = imagefilledrectangle ($im,   10,  10, 140, 140, $white); 
              
           
     
       for($i = 0; $i < $generate6; $i++){ 
            
           
           if($generate6 == 1){ 
                
              imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
                
           }else if($generate6 == 2){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
            
           }else if($generate6 == 3){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate6 == 4){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate6 == 5){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate6 == 6){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           } 
            
          
        
     
    } 
        
         echo $generate6; 
    
         imagepng($im,"image4.png"); 
        imagedestroy($im); 
   
            
 } 
        
        
        function  create_rectangle5($generate7){ 
       
     // print "<img src=image.png? class='dee'".date("U").">"; 
     $images = print "<img src=image5.png? class='dee'".date("U").">"; 
         $im = @imagecreate(150, 150) or die("Cannot Initialize new GD image stream"); 
         $red = imagecolorallocate($im, 255, 0, 0);  
          $black = imagecolorallocate($im, 0, 0, 0);  
         $white = imagecolorallocate($im, 255, 255, 255);  
           
         
             imagerectangle ($im,  0,  0, 150, 150, $black); 
              
              $rectFill = imagefilledrectangle ($im,   10,  10, 140, 140, $white); 
              
           
     
       for($i = 0; $i < $generate7; $i++){ 
            
           
           if($generate7 == 1){ 
                
              imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
                
           }else if($generate7 == 2){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
            
           }else if($generate7 == 3){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate7 == 4){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate7 == 5){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate7 == 6){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           } 
            
          
        
     
    } 
        
         echo $generate7; 
    
         imagepng($im,"image5.png"); 
        imagedestroy($im); 
   
            
 } 
         
        
        function  create_rectangle6(){ 
       
       $generate8 = rand(1,6); 
     // print "<img src=image.png? class='dee'".date("U").">"; 
     $images = print "<img src=image6.png? class='dee'".date("U").">"; 
         $im = @imagecreate(150, 150) or die("Cannot Initialize new GD image stream"); 
         $red = imagecolorallocate($im, 255, 0, 0);  
          $black = imagecolorallocate($im, 0, 0, 0);  
         $white = imagecolorallocate($im, 255, 255, 255);  
           
         
             imagerectangle ($im,  0,  0, 150, 150, $black); 
              
              $rectFill = imagefilledrectangle ($im,   10,  10, 140, 140, $white); 
              
           
     
       for($i = 0; $i < $generate8; $i++){ 
            
           
           if($generate8 == 1){ 
                
              imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
                
           }else if($generate8 == 2){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
            
           }else if($generate8 == 3){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate8 == 4){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate8 == 5){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 75, 35, 35, 0, 360, $red, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           }else if($generate8 == 6){ 
                
               imagefilledarc($im, 30, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 30, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 75, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 30, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
               imagefilledarc($im, 120, 120, 35, 35, 0, 360, $black, IMG_ARC_PIE); 
                
           } 
            
          
        
     
    } 
        
         echo $generate8; 
    
         imagepng($im,"image6.png"); 
        imagedestroy($im); 
   
            
 } 
     
         
        
 ?>  
        <form action="" method="post"> 
            
            <input type="submit" value="Generate" name="genereer" id="generator"> 
        </form> 
        
        
        
         <div class="code"><?php  echo show_source("phpImage.php"); ?></div> 
         
    </body> 
</html>
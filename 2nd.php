<?php 
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
      }
    
      for ($x = 0; $x <= 100; $x+=10) {
        echo "The number is: $x <br>";
      }
    
      $i = 0;
      $num = 50;
      
      while( $i < 10) {
         $num--;
         $i++;
      }
      
      echo ("Loop stopped at i = $i and num = $num <br>" );

         $i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
         echo ("Loop stopped at i = $i <br>" );
        
         $array = array( 1, 2, 3, 4, 5);
         
         foreach( $array as $value ) {
            echo "Value is $value <br />";
         }

         echo "<br>";


?>
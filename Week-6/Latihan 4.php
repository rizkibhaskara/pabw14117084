<?php

function prima($n){
  
  for($i=1;$i<=$n;$i++){  
          
          $counter = 0; 
          for($j=1;$j<=$i;$j++){               
                if($i % $j==0){                     
                      $counter++;
                }
          }               
        if($counter==2){             
               echo $i."<br/>";
        }
 }
} 
echo "Yang Termasuk Bilangan Prima dari 1 Sampai 37 Yaitu : "."<br>";
prima(37);
?>
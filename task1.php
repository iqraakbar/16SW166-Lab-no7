<?php
for ($i = 1; $i <= 50; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " StarStruck <br>" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Star <br>";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Struck <br>";
   }
     else
   {
     echo $i."<br>";
   }
 }
?>
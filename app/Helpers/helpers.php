<?php 

function dateWithoutSeconds($date){


   return \Carbon\Carbon::parse($date)->format('Y-m-d H:i');

} 

function formatCurrency($amount){

  

   if($amount == 0 || $amount == 0.00){


      return ('Rs '."0.00");

   }

   $arr = explode(".",$amount);

   if( count(array_filter($arr)) == 2){      
      return ('Rs '.$amount);
   }else{
      return ('Rs '.$amount.".00");
   }

   
   
 }

?>
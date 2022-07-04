<?php 

function dateWithoutSeconds($date){


   return \Carbon\Carbon::parse($date)->format('Y-m-d H:i');

} 

function formatCurrency($amount){
   return 'Rs '.$amount;
 }

?>
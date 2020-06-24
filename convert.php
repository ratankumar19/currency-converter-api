<?php
$string = file_get_contents("http://data.fixer.io/api/latest?access_key=7643978e72c5faf797fd0e597efa2fec");
  $json = json_decode($string, true);
  
  
  $i=0;
  foreach ($json['rates'] as $key => $value) {
    $currency[$i]=$key;
    $rate[$i]=$value;
    $i=$i+1;
        
  }
  

?>
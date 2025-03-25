<?php
 // Write a php function findMaxValue that takes an array of numbers and returns the maximum value

  function findMaxValue(){
    //using foreach loop
    $arr = [12,13,14,17,28,89,90,56,45,34,23,15];
    $max_value = $arr[0];
    foreach($arr as $value ){
      if($value > $max_value){
        $max_value = $value;
      }
    }
    echo "The maximum value of this array is =".$max_value;
  }
   
   findMaxValue();

   
?>
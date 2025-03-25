<?php
 //write a php function mergeArray that takes two arrays and returns a single array containing all elements from both arrays.

 function mergeArray(){
  $arr1 = ['red','blue','green','yellow'];
 $arr2 = ['white','orange','pink'];
  $newArray = array_merge($arr1,$arr2); 
  echo "<pre>";
  print_r($newArray);
  echo"</pre>";

 }
 mergeArray();

?>
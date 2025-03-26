<?php
 //write a php function countOccurrences that takes two array and return an associative array where the key are the unique values from the input array and the values are their counts.

 function countOccurrences(){
 
 $arr2 = ["Urvashi","Anjali","Mahi","Princi","Diksha","Sanjana","Urvashi","Anjali","Mahi","Princi"];
 $newArray = array_count_values($arr2);

 echo "<pre>";
 print_r($newArray);
 echo"</pre>";
 }

 countOccurrences();


 //write a php function removeduplicate that takes an array and returns a new array with duplicate values removed.

 function removeDuplicate(){
  $arr2 = ["Urvashi","Anjali","Mahi","Princi","Diksha","Sanjana","Urvashi","Anjali","Mahi","Princi"];
  $newArray = array_unique($arr2);
  echo "<pre>";
 print_r($newArray);
 echo"</pre>";

 }
 removeDuplicate();

 //write a php function reversearray that takes an array and returns a new array with the elements in reverse order.

 function reverseArray(){
  $arr2 = ["Urvashi","Anjali","Mahi","Princi","Diksha","Sanjana"];

  $newArray = array_reverse($arr2);
  echo "<pre>";
 print_r($newArray);
 echo"</pre>";
 }
 reverseArray();
?>

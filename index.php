<?php
//Author : Stefano Corra - Software Developer 
//https://www.linkedin.com/in/stefanocorra/

include 'class_animal.php';
?>
<?
//calling method save_Goat
$goat = new Goat;
$baby_goat = $goat->save_Goat();

//calling method save_Sheep
$sheep = new Sheep;
$baby_sheep = $sheep->save_Sheep();

//creating an array of values
$serial_goat = explode(",", $baby_goat);
$serial_sheep = explode(",", $baby_sheep);

//calc of values into variables
$i =0;
while($i<100){
  if($serial_goat[$i] === $serial_sheep[$i]){
     $soulmates .= $serial_goat[$i] . "\n";
  }
  $sum_goat += $serial_goat[$i];
  $sum_sheep += $serial_sheep[$i];
  $median_goat = $serial_goat[49];
  $median_sheep = $serial_sheep[49];
  $i++;
}

//store the equal values into the file soulmates.txt
$file = fopen("soulmates.txt","w");
fwrite($file,$soulmates);
fclose($file);

//output to screen
echo "<h2>Interesting facts about Goat :</h2><br>";
echo "Serial Numbers: <br>" . $baby_goat . "<br>";
echo "Serial Sum = " . $sum_goat."<br>";
echo "Serial Average = " . $sum_goat/100 ."<br>";
echo "Serial Median = " . $median_goat . "<br>";

echo "<h2>Interesting facts about Sheep :</h2><br>";
echo "Serial Numbers: <br>" . $baby_sheep . "<br>";
echo "Serial Sum = " . $sum_sheep."<br>";
echo "Serial Average = " . $sum_sheep/100 ."<br>";
echo "Serial Median = " . $median_sheep . "<br>";
/*
I came to this solution through usual organization of my codes,
 working with "Classes" and "Methods" as connections to the data optimization.
 always searching the best performance trying to avoid unnecessary paths. 
*/
?>

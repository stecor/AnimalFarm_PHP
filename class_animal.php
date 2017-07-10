<?php
//Author : Stefano Corra - Software Developer 
//https://www.linkedin.com/in/stefanocorra/

class Animal{

  var $serial;

  //method to find 100 unique prime random numbers
  function UniRandNum() {

    while($i<100){
      $number = rand(0, 10000);
      if (self::isPrime($number)){
        if ( $i === 99){
          $serial .=  $number;
        }else{
          $serial .=  $number . ",";
        }
        $i++;
      }
    }
    return $serial;
  }

  //method to find prime numbers
  function isPrime($num) {
      //1 is not prime
      if($num == 1){
          return false;
      }

      //2 is prime
      if($num == 2){
          return true;
      }

      //if the number is divisible by two, then it's not prime
      if($num % 2 == 0) {
          return false;
      }

      //if the odd numbers. If any of them is a factor, then it returns false.
      $ceil = ceil(sqrt($num));
      for($i = 3; $i <= $ceil; $i = $i + 2) {
          if($num % $i == 0)
              return false;
      }
      return true;
   }
}

//child class Goat
class Goat extends Animal{

  //method to create numbers and store values for goat.txt
  function save_Goat(){
   $baby_goat = parent::UniRandNum();
   $file = fopen("goat.txt","w");
   fwrite($file,$baby_goat);
   fclose($file);
   return $baby_goat;
  }
}

//Child class Sheep
class Sheep extends Animal{

  //method to create numbers and store values for sheep.txt
  function save_Sheep(){
   $baby_sheep = parent::UniRandNum();
   $file = fopen("sheep.txt","w");
   fwrite($file,$baby_sheep);
   fclose($file);
   return $baby_sheep;
  }
}

?>

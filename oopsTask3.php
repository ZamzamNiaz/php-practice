<?php

// convert tempreture from celcius to fornehiet

class Temprature{
    public function celcToFahran($celsius){
       return ($celsius * 9/5) + 32;
    }
   }
   
   $tempConverter = new Temprature();
   $celsius = 10;
   $fahrenhiet = $tempConverter->celcToFahran($celsius);
   echo "$celsius degrees Celsius is equal to $fahrenhiet degrees Fahrenheit.";
   


?>
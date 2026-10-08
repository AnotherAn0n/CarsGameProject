<?php
require_once("./functions.php");
$auta = [ 
     "fiat_126p" => [
          "model" => "Fiat 126p" ,
          "power" => 250,
          "multiplier"=>0,
     ], 
     "polonez_szerszen" => [
          "model" => "Polonez szerszen typ 1" ,  
          "power" => 680,
          "multiplier"=>0,
     ],
     "fiat_multipla" => [
          "model" => "Polonez szerszen typ 1" ,  
          "power" => 680,
          "multiplier"=>0,
     ],
];
foreach ($auta as $key => $car) {
     $auta[$key]["multiplier"] = calcMultiplier($car["power"]);
}
?>
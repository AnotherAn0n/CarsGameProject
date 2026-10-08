<?php

    function calcMultiplier($power){
        $multiplier = 0.8 + $power / 1000;
        return $multiplier;
    }
    function prepareCarElement($car, $i, $id) {
        $carElement = "<div class='car' data-picked='false' data-multiplier='"
        .$car["multiplier"]
        ."' id='car$i'><img src='./../img/"
        . $id
        .".jpg' alt="
        .$car["model"]
        ."></div>";
        return  $carElement;
    };
?>
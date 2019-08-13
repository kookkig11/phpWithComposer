<?php
    namespace App\Models;
    use App\Models\Car;
    
    class RaceCar extends Car {
        var $speed;

        function __construct($color, $brand, $speed){
            $this->speed = $speed;
            parent::__construct($color, $brand);
        }
    }
?>
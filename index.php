<?php
    require 'vendor/autoload.php';
    use App\Models\Car;

    $car = new Car("Black", "Ford");
    print_r($car);
?>
<?php
    require_once '../models/Car.php';
    require_once '../models/RaceCar.php';
?>
<div class="card">
<?php
    $car = new Car("Black", "Ford");
    print_r($car);

    $raceCar = new RaceCar("Blue", "Mitsubishi", 130);
    print_r($raceCar);
?>
</div>
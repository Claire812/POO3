<?php
require_once 'AbstractHighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Bike.php';
require_once 'Skateboard.php';
require_once 'Car.php';

$car = new Car ('blue', '2', 'electric');
$rue = new ResidentialWay('2', '30');
$rue->addVehicle($car);

var_dump($rue);



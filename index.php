<?php

header("Content-Type: text/html; charset=utf-8");
function __autoload($name) {
    include "include/{$name}.php";
}

$car1 = new Porsche('Boxster GTS');
echo "Модель Porsche: " . $car1->getModel();
echo "<br>Количество колес: " . $car1->getCountWheels();

echo "<br><br>";

$car1 = new Honda('CBR 600');
echo "Модель Honda: " . $car1->getModel();
echo "<br>Количество колес: " . $car1->getCountWheels();
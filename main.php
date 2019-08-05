<?php

abstract class Animal
{
    public abstract function getProduct();
}

class Chicken extends Animal
{
    public function getProduct()
    {
        return rand(0, 1);
    }
}

class Cow extends Animal
{
    public function getProduct()
    {
        return rand(8, 12);
    }
}

$countEggs = 0;
$countMilk = 0;

for ($i = 1; $i <= 20; $i++) {
    $chicken = new Chicken();
    $countEggs += $chicken->getProduct();
}

for ($i = 1; $i <= 10; $i++) {
    $cow = new Cow();
    $countMilk += $cow->getProduct();
}

echo "Собрано с 20 кур и 10 коров: $countEggs яиц и $countMilk литров молока";

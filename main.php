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

class Farm
{
    public function products()
    {
        $countEggs = $this->getEggs(20);
        $countMilk = $this->getMilk(10);

        $data = [
            'countEggs' => $countEggs,
            'countMilk' => $countMilk,
        ];
        return $data;
    }

    private function getEggs($countChicken)
    {
        $countEggs = 0;
        for ($i = 1; $i <= $countChicken; $i++) {
            $chicken = new Chicken();
            $countEggs += $chicken->getProduct();
        }
        return $countEggs;
    }

    private function getMilk($countCow)
    {
        $countMilk = 0;
        for ($i = 1; $i <= $countCow; $i++) {
            $cow = new Cow();
            $countMilk += $cow->getProduct();
        }
        return $countMilk;
    }
}

    $farm = new Farm();
    $data = $farm->products();


echo "Собрано с 20 кур и 10 коров: {$data['countEggs']} яиц и {$data['countMilk']} литров молока";
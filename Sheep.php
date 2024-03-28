<?php

class Sheep extends Animal
{
    public function __construct()
    {
        parent::__construct();
        $this->nameAnimal = __CLASS__;
        $this->product = mt_rand(2, 5); //кг
        $this->productType = 'wool';
    }

    public function setQtyProducts($qty): void
    {
        $this->product = $qty;
    }

    public function getDefaultQty(): int
    {
        return 1;
    }

    public function createNewAnimal(): Sheep
    {
        return new Sheep();
    }
}
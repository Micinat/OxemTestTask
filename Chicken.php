<?php

class Chicken extends Animal
{
    public function __construct()
    {
        parent::__construct();
        $this->nameAnimal = __CLASS__;
        $this->product = mt_rand(0, 1);
        $this->productType = 'eggs';
    }

    public function setQtyProducts($qty): void
    {
        $this->product = $qty;
    }

    public function getDefaultQtyAfterMarket(): int
    {
        return 5;
    }

    public function getDefaultQty(): int
    {
        return 20;
    }

    public function createNewAnimal(): Chicken
    {
        return new Chicken();
    }
}
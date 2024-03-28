<?php

class Cow extends Animal
{
    public function __construct()
    {
        parent::__construct();
        $this->nameAnimal = __CLASS__;
        $this->product = mt_rand(8, 12) / 10;
        $this->productType = 'milk';
    }

    public function getDefaultQty(): int
    {
        return 10;
    }

    public function getDefaultQtyAfterMarket(): int
    {
        return 1;
    }

    public function setQtyProducts($qty): void
    {
        $this->product = $qty;
    }

    public function createNewAnimal(): Cow
    {
        return new Cow();
    }
}
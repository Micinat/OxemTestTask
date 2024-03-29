<?php

abstract class Animal
{
    protected int $id;
    protected int $product;
    public string $nameAnimal;
    protected $productType;


    public function __construct()
    {
        $this->id = random_int(1, 1000);
    }

    public function getAnimalType(): string
    {
        return $this->nameAnimal;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getProductType()
    {
        return $this->productType;
    }

    abstract public function getDefaultQty(): int;


    public abstract function createNewAnimal(): object;
}

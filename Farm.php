<?php

class Farm
{
    protected array $animals = [];

    public function addAnimals(Animal $animal, int $qtyAnimals = null): void
    {
        $qtyAnimals = $qtyAnimals ?? $animal->getDefaultQty();

        for ($i = 1; $i <= $qtyAnimals; $i++) {
            $newAnimal = $animal->createNewAnimal();
            $this->animals[] = $newAnimal;
        }
    }

    public function addAnimalsAfterMarket(Animal $animal, int $qtyAnimals = null): void
    {
        $qtyAnimals = $qtyAnimals ?? $animal->getDefaultQtyAfterMarket();

        for ($i = 1; $i <= $qtyAnimals; $i++) {
            $newAnimal = $animal->createNewAnimal();
            $this->animals[] = $newAnimal;
        }
    }

    public function updateAnimals(): void
    {
        foreach ($this->animals as $animal) {
            if ($animal instanceof Cow) {
                $animal->setQtyProducts(random_int(8, 12));
            } elseif ($animal instanceof Chicken) {
                $animal->setQtyProducts(random_int(0, 1));
            }
        }
    }

    public function collectProducts(): array
    {
        $totalProducts = [];

        foreach ($this->animals as $animal) {
            $productType = $animal->getProductType();
            if (!isset($totalProducts[$productType])) {
                $totalProducts[$productType] = 0;
            }
            $totalProducts[$productType] += $animal->getProduct();
        }

        return $totalProducts;
    }

    public function countAnimals(): void
    {
        $animalCounts = [];

        foreach ($this->animals as $animal) {
            $animalType = $animal->getAnimalType();
            if (!isset($animalCounts[$animalType])) {
                $animalCounts[$animalType] = 0;
            }

            $animalCounts[$animalType]++;
        }


        foreach ($animalCounts as $animalType => $count) {
            echo "Количество $animalType на ферме - $count <br>";
        }
    }
}

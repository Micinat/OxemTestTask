<?php
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require $path;
});


$farm = new Farm();
$farm->addAnimals(new Cow());
$farm->addAnimals(new Chicken());
$farm->addAnimals(new Sheep(), 20);

$farm->collectProducts();
echo '<br>';
$farm->countAnimals();
echo '<br>';


$totalProduction = ['milk' => 0, 'eggs' => 0];
for ($i = 1; $i <= 7; $i++) {
    $farm->updateAnimals();
    $produce = $farm->collectProducts();

    $totalProduction['milk'] += $produce['milk'];
    $totalProduction['eggs'] += $produce['eggs'];
    echo "День $i: Произведено молока - {$produce['milk']} л, яиц - {$produce['eggs']} шт";
    echo '<br>';
}
echo "За неделю произведено молока - {$totalProduction['milk']} л, яиц - {$totalProduction['eggs']} шт";

$farm->addAnimalsAfterMarket(new Cow());
$farm->addAnimalsAfterMarket(new Chicken());
$farm->collectProducts();
echo '<br>';
echo 'Купили на рынке 1 корову и 5 куриц';
echo '<br>';
$farm->countAnimals();
echo '<br>';
$totalProduction = ['milk' => 0, 'eggs' => 0];
for ($i = 1; $i <= 7; $i++) {
    $farm->updateAnimals();
    $produce = $farm->collectProducts();

    $totalProduction['milk'] += $produce['milk'];
    $totalProduction['eggs'] += $produce['eggs'];
    echo "День $i: Произведено молока - {$produce['milk']} л, яиц - {$produce['eggs']} шт";
    echo '<br>';
}
echo "За неделю произведено молока - {$totalProduction['milk']} л, яиц - {$totalProduction['eggs']} шт";

<?php
require_once __DIR__. '/Category.php';
class Product extends Category {
    public $name;
    public $price;
}

$croccantini = new Product();
$croccantini->name = 'Royal Canin Mini Adult';
$croccantini->price = '€ 43,99';
$croccantini->category = 'Cane';
$croccantini->type = 'Food';

$mangime = new Product();
$mangime->name = 'Mangime per pesci Guppy in Fiocchi';
$mangime->price = '€ 2,95';
$mangime->category = 'Fish';
$mangime->type = 'Food';

$voliera = new Product();
$voliera->name = 'Voliera Wilma in Legno';
$voliera->price = '€ 184,99';
$voliera->category = 'Bird';
$voliera->type = 'Accessory';

$peluche = new Product();
$peluche->name = 'Topini di peluche Trixie';
$peluche->price = '€ 4,99';
$peluche->category = 'Cat';
$peluche->type = 'Game';

echo '<pre>' . var_dump($croccantini) . '</pre>';
echo '<pre>' . var_dump($mangime) . '</pre>';
echo '<pre>' . var_dump($voliera) . '</pre>';
echo '<pre>' . var_dump($peluche) . '</pre>';
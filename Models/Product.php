<?php

class Product {
    public $name;
    public $price;
}

$croccantini = new Product();
$croccantini->name = 'Royal Canin Mini Adult';
$croccantini->price = '€ 43,99';

$mangime = new Product();
$mangime->name = 'Mangime per pesci Guppy in Fiocchi';
$mangime->price = '€ 2,95';

$voliera = new Product();
$voliera->name = 'Voliera Wilma in Legno';
$voliera->price = '€ 184,99';

$peluche = new Product();
$peluche->name = 'Topini di peluche Trixie';
$peluche->price = '€ 4,99';

echo '<pre>' . var_dump($croccantini) . '</pre>';
echo '<pre>' . var_dump($mangime) . '</pre>';
echo '<pre>' . var_dump($voliera) . '</pre>';
echo '<pre>' . var_dump($peluche) . '</pre>';
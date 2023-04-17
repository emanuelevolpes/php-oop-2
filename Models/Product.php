<?php

class Product {
    private $name;
    private $price;
}

$croccantini = new Product();
$mangime = new Product();
$voliera = new Product();
$peluche = new Product();

echo '<pre>' . var_dump($croccantini) . '</pre>';
echo '<pre>' . var_dump($mangime) . '</pre>';
echo '<pre>' . var_dump($voliera) . '</pre>';
echo '<pre>' . var_dump($peluche) . '</pre>';
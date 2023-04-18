<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';

// function weight($weight)
// {
//     if ($weight < 10) {
//         throw new Exception('The weight must be more then 10kg');
//     }
//     return true;
// }

$category_dog = new Category('Dog', '<i class="fa-solid fa-dog"></i>');
$category_cat = new Category('Cat', '<i class="fa-solid fa-cat"></i>');
$category_bird = new Category('Bird', '<i class="fa-solid fa-dove"></i>');
$category_fish = new Category('Fish', '<i class="fa-solid fa-fish"></i>');

// var_dump($category_dog, $category_cat, $category_bird, $category_fish);

$product1 = new Product(10, 'Guinzaglio', 'Lorem ipsum guinzaglio', $category_dog, 15.99, '#');
$product2 = new Product(20, 'Osso di gomma', 'Lorem ipsum osso di gomma', $category_dog, 27.99, '#');
$product3 = new Food(30, 'Croccantini', 'Lorem ipsum croccantini', $category_cat, 22.99, '#');
$product3->set_ingredients('pollo, cartone, manzo');
$product3->set_weight(9);

// try {
// } catch (Exception $e) {
//     echo 'Exception Message: ' . $e->getMessage();
// }

// var_dump($product1, $product2, $product3);

$products = [
    $product1,
    $product2,
    $product3
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- fa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1 class="text-center m-4">Pet Shop</h1>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $product->get_name(); ?></h3>
                            <h5><?php echo $product->get_category()->get_category_info(); ?></h5>
                            <p class="card-text"><?php echo $product->get_description(); ?></p>
                            <?php if (method_exists($product, 'get_ingredients')) : ?>
                                <p>Ingredients: <?php
                                                /** @var Food $product */
                                                echo $product->get_ingredients()
                                                ?></p>
                            <?php endif; ?>
                            <?php if (method_exists($product, 'get_weight')) : ?>
                                <p>Weight: <?php
                                            /** @var Food $product */
                                            echo $product->get_weight()
                                            ?> kg</p>
                            <?php endif; ?>
                            <p>Price: <strong><?php echo $product->get_price(); ?></strong> €</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
<?php
include_once __DIR__ . '/Models/Product.php';

echo '<pre>' . var_dump($croccantini) . '</pre>';
echo '<pre>' . var_dump($mangime) . '</pre>';
echo '<pre>' . var_dump($voliera) . '</pre>';
echo '<pre>' . var_dump($peluche) . '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- /bootstrap -->
    <title>Boolshop</title>
</head>

<body>
    <h1>Boolshop</h1>
    <div class="container d-flex flex-wrap">
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $croccantini->name ?></h3>
                <p><?php echo $croccantini->price ?></p>
                <p><?php echo $croccantini->category ?></p>
                <p><?php echo $croccantini->type ?></p>
            </div>
        </article>
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $mangime->name ?></h3>
                <p><?php echo $mangime->price ?></p>
                <p><?php echo $mangime->category ?></p>
                <p><?php echo $mangime->type ?></p>
            </div>
        </article>
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $voliera->name ?></h3>
                <p><?php echo $voliera->price ?></p>
                <p><?php echo $voliera->category ?></p>
                <p><?php echo $voliera->type ?></p>
            </div>
        </article>
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $peluche->name ?></h3>
                <p><?php echo $peluche->price ?></p>
                <p><?php echo $peluche->category ?></p>
                <p><?php echo $peluche->type ?></p>
            </div>
        </article>
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $croccantini->name ?></h3>
                <p><?php echo $croccantini->price ?></p>
                <p><?php echo $croccantini->category ?></p>
                <p><?php echo $croccantini->type ?></p>
            </div>
        </article>
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $mangime->name ?></h3>
                <p><?php echo $mangime->price ?></p>
                <p><?php echo $mangime->category ?></p>
                <p><?php echo $mangime->type ?></p>
            </div>
        </article>
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $voliera->name ?></h3>
                <p><?php echo $voliera->price ?></p>
                <p><?php echo $voliera->category ?></p>
                <p><?php echo $voliera->type ?></p>
            </div>
        </article>
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $peluche->name ?></h3>
                <p><?php echo $peluche->price ?></p>
                <p><?php echo $peluche->category ?></p>
                <p><?php echo $peluche->type ?></p>
            </div>
        </article> 
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $croccantini->name ?></h3>
                <p><?php echo $croccantini->price ?></p>
                <p><?php echo $croccantini->category ?></p>
                <p><?php echo $croccantini->type ?></p>
            </div>
        </article>
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $mangime->name ?></h3>
                <p><?php echo $mangime->price ?></p>
                <p><?php echo $mangime->category ?></p>
                <p><?php echo $mangime->type ?></p>
            </div>
        </article>
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $voliera->name ?></h3>
                <p><?php echo $voliera->price ?></p>
                <p><?php echo $voliera->category ?></p>
                <p><?php echo $voliera->type ?></p>
            </div>
        </article>
        <article>
            <div class="card m-3" style="width: 18rem;">
                <h3><?php echo $peluche->name ?></h3>
                <p><?php echo $peluche->price ?></p>
                <p><?php echo $peluche->category ?></p>
                <p><?php echo $peluche->type ?></p>
            </div>
        </article>    
    </div>
</body>

</html>
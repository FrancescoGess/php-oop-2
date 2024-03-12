<?php
    include_once __DIR__ .'/models/Product.php';

    require_once __DIR__ . "/models/Product.php";
    require_once __DIR__ . "/models/Category.php";
    require_once __DIR__ . "/models/Toy.php";
    

    $dogs = new Category( 'dogs', 'fa-solid fa-dog');
    $cats = new Category( 'cats', 'fa-solid fa-cat');

    //creo istranza delle altre classi
    $product = new Product("Collare", 10.00, "https://img.joomcdn.net/e67b41454e6ddd7a993e4578396a8f0a387a61ab_original.jpeg", $dogs, true);
    $food = new Product("Croccantini", 35.00, "https://www.naturepetshop.it/wp-content/uploads/cibo-secco-per-cani-300x215.jpg", $cats, true);
    $game = new Product("Pallina", 5.99, "https://staticgeopop.akamaized.net/wp-content/uploads/sites/32/2022/04/palle-tennis-come-vengono-fatte.jpg", $dogs, true);

    var_dump($product)
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous' />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<header>
    <h1 class="text-center">
        animal shop
    </h1>
</header>

<main class="container">
    
</main>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js' integrity='sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==' crossorigin='anonymous'></script>

</body>
</html>
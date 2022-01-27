<?php

?>
<!doctype html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>
    <style>
        .card>img {
            height: 16rem;
        }
    </style>
    <title>Products</title>
</head>

<body>
    <nav>
        <?php
        include("nav.php");
        ?>
    </nav>
    <h1>Products</h1>
    <?php
    $products = [
        ["id" => 1, "pname" => "Football", "price" => 400, "quantity" => 2, "image" => "images/1.jpg"],
        ["id" => 2, "pname" => "Cricket Bat", "price" => 600, "quantity" => 1, "image" => "images/2.png"],
        ["id" => 3, "pname" => "Badminton Racket", "price" => 400, "quantity" => 4, "image" => "images/3.jpg"],
        ["id" => 1, "pname" => "Football", "price" => 400, "quantity" => 2, "image" => "images/1.jpg"],
        ["id" => 5, "pname" => "Cricket Bat", "price" => 600, "quantity" => 1, "image" => "images/2.png"],
        ["id" => 6, "pname" => "Badminton Racket", "price" => 400, "quantity" => 4, "image" => "images/3.jpg"],
        ["id" => 7, "pname" => "Football", "price" => 400, "quantity" => 2, "image" => "images/1.jpg"],
        ["id" => 8, "pname" => "Cricket Bat", "price" => 600, "quantity" => 1, "image" => "images/2.png"],
        ["id" => 9, "pname" => "Badminton Racket", "price" => 400, "quantity" => 4, "image" => "images/3.jpg"]
    ];
    ?>
    <div class="container">
        <div class="row">
            <?php
            foreach ($products as $val) {
            ?>
                <div class="col-sm-4">
                    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                        <img src="<?php echo $val["image"]; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $val["pname"]; ?></h5>
                            <p class="card-text">Price: &#x20B9;<?php echo $val["price"]; ?></p>
                            <p class="card-text">Quantity: <?php echo $val["quantity"]; ?></p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            <?php

            }
            ?>
        </div>
    </div>
    <?php
    include("foot.php");
    ?>
</body>

</html>
<!Doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include("nav.php"); ?>
    <h1>Product</h1>
    <section class="bg-light">
        <div class="container text-center">
            <div class="row">
                <?php
                $products = [
                    ["id" => 1, "pname" => "A", "price" => "Rs.400", "image" => "1.jpg"],
                    ["id" => 2, "pname" => "B", "price" => "Rs.400", "image" => "2.png"],
                    ["id" => 3, "pname" => "C", "price" => "Rs.400", "image" => "3.jpg"],
                ];
                foreach ($products as $p) {
                    echo "
            <div class='col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto'>
              <div class='card' style='width:18rem;'>
                  <img src='Images/" . $p['image'] . "' class='card-img img-fluid'/>
                  <div class='card-body'>
                      <h5 class='card-title'>" . $p['pname'] . "</h5>
                      <p class='card-text'>" . $p['price'] . "</p>
                      <a href='#' class='btn btn-primary'>ADD TO CART</a>
                  </div>
              </div>   
            </div>
            <div class='col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto'>
                <div class='card' style='width:18rem;'>
                    <img src='Images/" . $p['image'] . "' class='card-img img-fluid'/>
                    <div class='card-body'>
                        <h2 class='card-title'>" . $p['pname'] . "</h2>
                        <p class='card-text'>" . $p['price'] . "</p>
                    </div>
                </div>   
              </div>
              <div class='col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto'>
                <div class='card' style='width:18rem;'>
                    <img src='Images/{$p['image']}' class='card-img img-fluid'/>
                    <div class='card-body'>
                        <h2 class='card-title'>" . $p['pname'] . "</h2>
                        <p class='card-text'>" . $p['price'] . "</p>
                    </div>
                </div>   
              </div> ";
                    // echo "'Images/{$p['image']}'";
                }

                ?>
            </div>
        </div>
    </section>

    <?php include("foot.php"); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
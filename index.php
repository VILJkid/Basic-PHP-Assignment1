<!doctype html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>
    <title>Assignment 1</title>
</head>

<body>

    <nav>
        <?php
        include("nav.php");
        ?>
    </nav>
    <div class="container">
        <div class="row mt-5 md-5">
            <div class="col-sm-6">
                <h2>About the assignment</h2>
                <p>This assignment contains 4 sections. Each section is designed with the help of</p>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JS</li>
                    <li>Bootstrap</li>
                    <li>PHP</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <h2>Sections</h2>
                <p>This 4 sections are</p>
                <ul>
                    <li><a style="text-decoration: none; color:blueviolet;" href="products.php">Products</a></li>
                    <li><a style="text-decoration: none; color:blueviolet;" href="calculator.php">Calculator</a></li>
                    <li><a style="text-decoration: none; color:blueviolet;" href="login.php">Login</a></li>
                    <li><a style="text-decoration: none; color:blueviolet;" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/cat1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cat 1</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/cat2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cat 2</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/cat3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cat 3</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
    <?php
    include("foot.php");
    ?>

</body>

</html>
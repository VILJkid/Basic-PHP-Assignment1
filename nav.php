<!doctype html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>

    <title></title>
</head>

<body>
    <!-- <section>
        <h4>Home</h4>
    </section>
    <section>
        <h4>Products</h4>
    </section>
    <section>
        <h4>Calculator</h4>
    </section>
    <section>
        <h4>Login</h4>
    </section>
    <section>
        <h4>Contact Us</h4>
    </section> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP Assignment</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calculator.php">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    include("foot.php");
    ?>
</body>

</html>
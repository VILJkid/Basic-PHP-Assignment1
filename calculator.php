<!doctype html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>

    <title>Calculator</title>
</head>

<body>
    <nav>
        <?php
        include("nav.php");
        ?>
    </nav>
    <h1 class="text-center my-3">A Simple Calculator</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="left my-4">
                    <form>
                        <div class="form-group mb-3">
                            <label for="fnum" class="form-label">First Number</label>
                            <input type="number" class="form-control" placeholder="First Number" id="fnum" />
                        </div>
                        <div class="form-group mb-4">
                            <label for="snum" class="form-label">Second Number</label>
                            <input type="number" class="form-control" placeholder="Second Number" id="snum" />
                        </div>
                        <div class="form-group text-center mb-3">
                            <input type="button" value="Add" class="btn btn-success mx-1" onclick="add()">
                            <input type="button" value="Subtract" class="btn btn-primary mx-1" onclick="sub()">
                            <input type="button" value="Multiply" class="btn btn-warning mx-1" onclick="mul()">
                            <input type="button" value="Divide" class="btn btn-info mx-1" onclick="div()">
                            <input type="button" value="Exponent" class="btn btn-dark mx-1" onclick="exp()">
                        </div>
                        <div class="form-group">
                            <label for="res" class="form-label">Result</label>
                            <input type="number" class="form-control" placeholder="Result" id="res" readonly />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right my-4">
                    <h2>History</h2>
                    <div id="history"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="JS/calculator.js"></script>
    <?php
    include("foot.php");
    ?>
</body>

</html>
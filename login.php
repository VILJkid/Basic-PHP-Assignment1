<?php
error_reporting(0);
$cred = ["thisisemail@mail.com", "thisispassword"];

$emailErr = $passErr = "";
if (isset($_POST['submit'])) {

    $email = input_field($_POST['email']);
    $pass = input_field($_POST['pass']);

    //email validation
    if (empty($email)) {
        $emailErr = "Email is required.";
?>
        <style>
            #email {
                border: 2px solid red;
            }
        </style>
    <?php
    } else if ($email != $cred[0]) {
        $emailErr = "Incorrect email!.";
    ?>
        <style>
            #email {
                border: 2px solid red;
            }
        </style>
    <?php
    } else {
    ?>
        <style>
            #email {
                border: 2px solid green;
            }
        </style>
    <?php
    }

    //pass validation 
    if (empty($pass)) {
        $passErr = "Password is required.";
    ?>
        <style>
            #pass {
                border: 2px solid red;
            }
        </style>
    <?php
    } else if ($pass != $cred[1]) {
        $passErr = "Incorrect password!";
    ?>
        <style>
            #pass {
                border: 2px solid red;
            }
        </style>
    <?php
    } else {
    ?>
        <style>
            #pass {
                border: 2px solid green;
            }
        </style>
<?php
    }

    //everything correct
    if ($emailErr == "" && $passErr == "") {
        $correct = "<h2 align=center>Credentials validated successfully !</h2>";
    }
}

function input_field($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!doctype html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>

    <title>Login</title>
    <style>
        .error {
            color: red;
        }

        .correct {
            color: green;
        }

        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }

        textarea {
            resize: none;
        }
    </style>
</head>

<body>
    <nav>
        <?php
        include("nav.php");
        ?>
    </nav>

    <form method="post" class="center">
        <div class="container">
            <h2 class="mt-3">Login</h2>

            <span class="error"> * are required fields </span><br />
            <br />

            <div class="form-ele form-group">
                <label for="email" class="form-label">Email<span class="error"> *</span></label>
                <input type="text" name="email" id="email" class="form-control" size="30" value="<?php echo $email; ?>" placeholder="Email" />
                <span class="error"> <?php echo $emailErr; ?></span>
                <br /><br />
            </div>

            <div class="form-ele form-group">
                <label for="pass" class="form-label">Password<span class="error"> *</span></label>
                <input type="password" name="pass" id="pass" class="form-control" value="<?php echo $pass; ?>" size="30" placeholder="Password" />
                <span class="error"> <?php echo $passErr; ?></span>
                <br /><br />
            </div>

            <input type="submit" class="btn btn-dark" value="Submit" name="submit" />
        </div>
        <br /><br />
        <span class="correct"><?php echo $correct; ?></span>
        <br /><br />
    </form>


    <?php
    include("foot.php");
    ?>
</body>

</html>
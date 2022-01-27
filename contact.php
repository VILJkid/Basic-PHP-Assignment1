<?php
error_reporting(0);

$unameErr = $emailErr = $phnoErr = $feedErr = "";
if (isset($_POST['submit'])) {

    $uname = input_field($_POST['uname']);
    $email = input_field($_POST['email']);
    $phno = input_field($_POST['phno']);
    $feed = input_field($_POST['feed']);

    //uname validation 
    if (empty($uname)) {
        $unameErr = "Name is required.";
?>
        <style>
            #uname {
                border: 2px solid red;
            }
        </style>
    <?php
    } else if (!preg_match("/^[a-zA-Z ]+$/", $uname)) {
        $unameErr = "Only alphabates are allowed.";
    ?>
        <style>
            #uname {
                border: 2px solid red;
            }
        </style>
    <?php
    } else {
    ?>
        <style>
            #uname {
                border: 2px solid green;
            }
        </style>
    <?php
    }

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
    } else if (!preg_match("/^[^@\s]+@[^@\s\.]+\.[^@\.\s]+$/", $email)) {
        $emailErr = "Enter valid email.";
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

    //phone validation
    if (empty($phno)) {
        $phnoErr = "Phone number is required.";
    ?>
        <style>
            #phno {
                border: 2px solid red;
            }
        </style>
    <?php
    } else if (!preg_match("/^[6-9][0-9]{9}$/", $phno)) {
        $phnoErr = "Enter valid phone number.";
    ?>
        <style>
            #phno {
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

    //feed validation
    if (empty($feed)) {
        $feedErr = "Feedback is required.";
    ?>
        <style>
            #feed {
                border: 2px solid red;
            }
        </style>
    <?php
    } else if (strlen($feed) < 20) {
        $feedErr = "Feedback should be greater than 20 chars.";
    ?>
        <style>
            #feed {
                border: 2px solid red;
            }
        </style>
    <?php
    } else {
    ?>
        <style>
            #feed {
                border: 2px solid green;
            }
        </style>
<?php
    }

    //everything correct
    if ($unameErr == "" && $emailErr == "" && $phnoErr == "" && $feedErr == "") {
        $correct = "<h2 align=center >Feedback sent successfully !</h2>";
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

    <title>Contact Us</title>
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
            <h2 class="mt-3">Contact Us</h2>

            <span class="error"> * are required fields </span><br />
            <br />

            <div class="form-ele form-group">
                <label for="uname" class="form-label">Username<span class="error"> *</span></label>
                <input type="text" name="uname" id="uname" class="form-control" value="<?php echo $uname; ?>" size="30" placeholder="Username" />
                <span class="error"> <?php echo $unameErr; ?></span>
                <br /><br />
            </div>

            <div class="form-ele form-group">
                <label for="email" class="form-label">Email<span class="error"> *</span></label>
                <input type="text" name="email" id="email" class="form-control" size="30" value="<?php echo $email; ?>" placeholder="Email" />
                <span class="error"> <?php echo $emailErr; ?></span>
                <br /><br />
            </div>



            <div class="form-ele form-group">
                <label for="phno" class="form-label">Phone Number<span class="error"> *</span></label>
                <input type="text" name="phno" id="phno" class="form-control" value="<?php echo $phno; ?>" size="30" placeholder="Phone Number" />
                <span class="error"> <?php echo $phnoErr; ?></span>
                <br /><br />
            </div>

            <div class="form-ele form-group">
                <label for="feed" class="form-label">Feedback<span class="error"> *</span></label>
                <br />
                <textarea name="feed" id="feed" cols="30" class="form-control" rows="10" noresize placeholder="Feedback"><?php echo $feed; ?></textarea>
                <span class="error"> <?php echo $feedErr; ?></span>
                <br /><br />
            </div>

            <input type="submit" class="btn btn-dark" value="Submit" name="submit" />
        </div>
    </form>
    <br /><br />
    <span class="correct"><?php echo $correct; ?></span>
    <br /><br />
    <?php
    include("foot.php");
    ?>
</body>

</html>
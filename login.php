<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Roboto&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"
      integrity="sha512-5fsy+3xG8N/1PV5MIJz9ZsWpkltijBI48gBzQ/Z2eVATePGHOkMIn+xTDHIfTZFVb9GMpflF2wOWItqxAP2oLQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/loginstyle.css" type="text/css" />
</head>

<body>
    <div id="login">
        <div id="image-container">
            <img src="images/login.jpg" alt="" id="login-image">
        </div>
        <div id="login-input">
        <h1>Conestoga SNS</h1>
        <!-- Form for login, post to current file to check validation -->
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            Username: <input type="text" name="username" class="input-txt"><br>
            Password: <input type="password" name="password" class="input-txt"><br>
            <input type="submit" value="login" id="submit-button">
        </form>
        <!-- link to sign up page -->
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {     
        // Valid dummy login username and password
        $validn = 'brian';
        $validp = '1234';
        // User input username and password
        $inputn = $_REQUEST['username'];
        $inputp = $_REQUEST['password'];

        // Both username and password match
        if ($inputn == $validn && $inputp == $validp) {
            header("location: feed.php?username=brian");
        // Username does not match
        } else if ($inputn != $validn) {
            echo "<script type='text/javascript'>alert('Invalid Username');</script>";
        // Password does not match
        } else {
            echo "<script type='text/javascript'>alert('Incorrect Password');</script>";
        }
    }
     ?>
</body>
</html>
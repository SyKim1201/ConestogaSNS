<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    
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
    <link rel="stylesheet" href="css/signupstyle.css" type="text/css" />
</head>

<body>
    <div id="signup">
        <div id="image-container">
            <img src="images/login.jpg" alt="" id="login-image">
        </div>
        <div id="signup-input">
        <h1>Conestoga SNS</h1>
        <!-- Form for sign up, post to current file to check validation -->
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            New Username: <input type="text" name="username" class="input-txt"><br>
            New Password: <input type="password" name="password" class="input-txt"><br>
            Confirm Password: <input type="password" name="confirm" class="input-txt"><br>
            <input type="submit" value="Sign Up" id="submit-button">
        </form>

        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        // duplicate dummy username to check for  
        $dupen = 'brian';
        // User input fields
        $inputn = $_REQUEST['username'];
        $inputp = $_REQUEST['password'];
        $inputc = $_REQUEST['confirm'];
        // Username is duplicate
        if ($inputn == $dupen) {
            echo "<script type='text/javascript'>alert('Username Exists');</script>";
        // Password and confirmation password does not match
        } else if ($inputp != $inputc) {
            echo "<script type='text/javascript'>alert('Password Mismatch');</script>";
        } else {  
            header("location: newfeed.php?username=$inputn");
        }
    }
     ?>
</body>
</html>
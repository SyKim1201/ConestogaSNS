<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Feed</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"
      integrity="sha512-5fsy+3xG8N/1PV5MIJz9ZsWpkltijBI48gBzQ/Z2eVATePGHOkMIn+xTDHIfTZFVb9GMpflF2wOWItqxAP2oLQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="css/feedstyle.css" type="text/css" />
</head>

<!-- Make a post as new registered user -->
<body>
    <header>
        <img src="images/default-profile.jpg" alt="" id="profile">
        <nav id="header-info">
            <!-- Get value of username from REQUEST -->
            <?php 
                $username = $_REQUEST["username"]; 
                $handle = str_replace(" ", "_", $username);
                echo "<h3 id='username'>$username</h3>";
                echo "<h4 id='handle'>@$handle</h4>";
            ?>
            <p id="description">Enter Description...</p>
        </nav> 
        <button type="button" onclick="post()" id="post">Post</button>
    </header>

    <div id="side-nav">
        <section class="menu">
            <i class="material-icons">person</i>
            <h4>Profile</h4>
        </section>
        <section class="menu">
            <i class="material-icons">image</i>
            <h4>Pictures</h4>
        </section>
        <section class="menu">
            <i class="material-icons">people</i>
            <h4>Friends</h4>
        </section>
        <section class="menu">
            <i class="material-icons">settings</i>
            <h4>Settings</h4>
        </section>
    </div>
    
    <div id="feeds">
        <section class="feed">
            <div id="profile-info">
                <img src="images/default-profile.jpg" alt="" id="post-profile">
                <div id="profile-id">
                    <!-- Username, handle assigned value above -->
                    <h3 id='post-username'><?php echo $username ?></h3>
                    <h4 id='post-handle'>@<?php echo $handle ?></h4>
                </div>
            </div>
            <!-- Get value of paragraph to post from REQUEST -->
            <p id='post'><?php echo $_REQUEST["para"] ?></p>
            <div id="post-icons">
                <i class="material-icons">favorite</i>
                <i class="material-icons">repeat</i>
            </div>
        </section>
    </div>

</body>
</html>
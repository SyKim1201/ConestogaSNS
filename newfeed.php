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

<!-- Feed for new registered user -->
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
        <!-- Post button -->
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
        <p id="no-feed">No Feeds Yet!</p>
        <img src="images/nothing.jpg" alt="" id="no-img">
    </div>

    <div id="create-post"></div>
        <script>
            // Function for creating and inserting form for posting a feed
            function post() {
                if (document.querySelector("#post-form") == null) {
                    // Create form
                    var form = document.createElement("form");
                    form.setAttribute("method", "post");
                    form.setAttribute("action", "newpost.php?username=<?php echo $username ?>");
                    form.setAttribute("id", "post-form");
                    
                    // Create text input
                    var para = document.createElement("input");
                    para.setAttribute("type", "text");
                    para.setAttribute("name", "para");
                    para.setAttribute("id", "post-para");

                    // Create submit button
                    var btn = document.createElement("input");
                    btn.setAttribute("type", "submit");
                    btn.setAttribute("value", "post");
                    btn.setAttribute("id", "post-btn");
                    
                    form.appendChild(para);
                    form.appendChild(btn);

                    var div = document.querySelector("#create-post");
                    div.appendChild(form);
                }
            }
        </script>
    
</body>
</html>
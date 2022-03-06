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

<!-- Feed for dummy user -->
<body>
    <header>
        <img src="images/cat-profile.png" alt="" id="profile">
        <nav id="header-info">
            <!-- Get value of username from REQUEST -->
            <?php 
                $username = $_REQUEST["username"]; 
                $handle = str_replace(" ", "_", $username);
                echo "<h3 id='username'>Brian Kim</h3>";
                echo "<h4 id='handle'>@$handle</h4>";
            ?>
            <p id="description">Student at Conestoga College @ Waterloo, Canada</p>
        </nav> 
        <button type="button" id="post">Post</button>
    </header>
    
    <div id="side-nav">
        <section class="menu">
            <a href="" id="side-link">
                <i class="material-icons">person</i>
                <h4>Profile</h4>
            </a>
        </section>
        <section class="menu">
            <a href="" id="side-link">
                <i class="material-icons">image</i>
                <h4>Pictures</h4>
            </a>
        </section>
        <section class="menu">
            <a href="" id="side-link">
                <i class="material-icons">people</i>
                <h4>Friends</h4>
            </a>
        </section>
        <section class="menu">
            <a href="" id="side-link">
                <i class="material-icons">settings</i>
                <h4>Settings</h4>
            </a>
        </section>
    </div>

    <div id="feeds">
        <section class="feed">
            <div id="profile-info">
                <img src="images/cat-profile.png" alt="" id="post-profile">
                <div id="profile-id">
                    <h3 id='post-username'>Brian Kim</h3>
                    <h4 id='post-handle'>@brian</h4>
                </div>
            </div>
            <p id='post'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique perferendis cupiditate ex ea minima exercitationem, ipsa reiciendis autem corrupti consequuntur, ipsum rem deleniti consequatur sint deserunt aliquam, labore alias fuga.</p>
            <div id="post-icons">
                <i class="material-icons">favorite</i>
                <i class="material-icons">repeat</i>
            </div>
        </section>
        <section class="feed">
            <div id="profile-info">
                <img src="images/cat-profile.png" alt="" id="post-profile">
                <div id="profile-id">
                    <h3 id='post-username'>Brian Kim</h3>
                    <h4 id='post-handle'>@brian</h4>
                </div>
            </div>
            <p id='post'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique perferendis cupiditate ex ea minima exercitationem, ipsa reiciendis autem corrupti consequuntur, ipsum rem deleniti consequatur sint deserunt aliquam, labore alias fuga.</p>
            <div id="post-icons">
                <i class="material-icons">favorite</i>
                <i class="material-icons">repeat</i>
            </div>
        </section>
        <section class="feed">
            <div id="profile-info">
                <img src="images/cat-profile.png" alt="" id="post-profile">
                <div id="profile-id">
                    <h3 id='post-username'>Brian Kim</h3>
                    <h4 id='post-handle'>@brian</h4>
                </div>
            </div>
            <p id='post'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique perferendis cupiditate ex ea minima exercitationem, ipsa reiciendis autem corrupti consequuntur, ipsum rem deleniti consequatur sint deserunt aliquam, labore alias fuga.</p>
            <div id="post-icons">
                <i class="material-icons">favorite</i>
                <i class="material-icons">repeat</i>
            </div>
        </section>
        <section class="feed">
            <div id="profile-info">
                <img src="images/cat-profile.png" alt="" id="post-profile">
                <div id="profile-id">
                    <h3 id='post-username'>Brian Kim</h3>
                    <h4 id='post-handle'>@brian</h4>
                </div>
            </div>
            <p id='post'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique perferendis cupiditate ex ea minima exercitationem, ipsa reiciendis autem corrupti consequuntur, ipsum rem deleniti consequatur sint deserunt aliquam, labore alias fuga.</p>
            <div id="post-icons">
                <i class="material-icons">favorite</i>
                <i class="material-icons">repeat</i>
            </div>
        </section>
        <section class="feed">
            <div id="profile-info">
                <img src="images/cat-profile.png" alt="" id="post-profile">
                <div id="profile-id">
                    <h3 id='post-username'>Brian Kim</h3>
                    <h4 id='post-handle'>@brian</h4>
                </div>
            </div>
            <p id='post'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique perferendis cupiditate ex ea minima exercitationem, ipsa reiciendis autem corrupti consequuntur, ipsum rem deleniti consequatur sint deserunt aliquam, labore alias fuga.</p>
            <div id="post-icons">
                <i class="material-icons">favorite</i>
                <i class="material-icons">repeat</i>
            </div>
        </section>
    </div>

</body>
</html>
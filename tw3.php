<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $navigation_bar = "nav.php";
    } else {
        $nama = $_SESSION["username"];
        $navigation_bar = "nav-user.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>GameLab</title>
</head>
<body>
    <?php include $navigation_bar; ?>

    <div class="inside-box">
        <div class="game-desc-container">
            <div ></div>
            <img src="https://games.mxdwn.com/wp-content/uploads/2018/10/tile_witcher3_load_tiny.png" alt="The Witcher 3" class="g-img">
            <div class="description">
                <h2 class="g-title">The Witcher 3: Wild Hunt</h2>
                <br>
                <p class="g-desc">As war rages on throughout the Northern Realms, you take on the greatest contract of your life — tracking down the Child of Prophecy, a living weapon that can alter the shape of the world.</p>
            </div>
        </div>
    </div>

    <h2 class="inside-box">Image gallery</h2>
    <div class="borderline"></div>

    <div class="inside-box">
        <img src="https://images.pushsquare.com/92d4256d948f3/the-witcher-3-wild-hunt-ps4-playstation-4-enemy-creatures-guide.900x.jpg" alt="" class="image-glry">
        <img src="https://www.dsogaming.com/wp-content/uploads/2015/04/1504291_10152927157979331_7423184598800813682_o.jpg" alt="" class="image-glry">
        <img src="https://thewitcher3guide.info/wp-content/uploads/2020/03/28-06-2017-the-witcher-3-wild-hunt-white-orchard-contracts-devil-by-the-well-guide-clone-28-06-2017-12-12-23.jpg" alt="" class="image-glry">
        <img src="https://cdn.mos.cms.futurecdn.net/fyGtkoYbbRUPMDrsvuiapE-1200-80.jpg" alt="" class="image-glry">
    </div>

    <h2 class="inside-box">Comments</h2>
    <div class="borderline"></div>

    <div class="inside-box comment-container">
        <img src="avatar.png" alt="" class="feed-avatar">
            <form action="" method="post">
                <div class="comment-area">
                    <textarea name="comment" class="comment" cols="30" rows="10" placeholder="Share a comment.."></textarea>
                </div>
                <input type="submit" name="comment" value="Post Comment" class="button-comment">
            </form>
    </div>
    
</body>
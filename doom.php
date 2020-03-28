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
            <img src="https://venturebeat.com/wp-content/uploads/2020/01/doom-eternal-4.jpg?w=1200&strip=all" alt="Doom Eternal" class="g-img">
            <div class="description">
                <h2 class="g-title">Doom Eternal</h2>
                <br>
                <p class="g-desc">Hell’s armies have invaded Earth. Become the Slayer in an epic single-player campaign to conquer demons across dimensions and stop the final destruction of humanity.
                The only thing they fear... is you.
                Experience the ultimate combination of speed and power in DOOM Eternal - the next leap in push-forward, first-person combat.
                Discover the Slayer’s origins and his enduring mission to RAZE HELL.</p>
            </div>
        </div>
    </div>

    <h2 class="inside-box">Image gallery</h2>
    <div class="borderline"></div>

    <div class="inside-box">
        <img src="https://cdn1.thr.com/sites/default/files/2019/06/doom_eternal-publicity-h_2019.jpg" alt="" class="image-glry">
        <img src="https://www.gamesource.it/wp-content/uploads/2019/06/Doom-Eternal-Banner-1000x563.jpg" alt="" class="image-glry">
        <img src="https://i2.wp.com/bunnygaming.com/wp-content/uploads/2020/01/doom-eternal-1.jpg?fit=1920%2C1080&ssl=1" alt="" class="image-glry">
        <img src="https://i.ytimg.com/vi/QH5ykVWyswc/maxresdefault.jpg" alt="" class="image-glry">
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
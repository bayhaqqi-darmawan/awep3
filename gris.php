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
            <img src="https://steamcdn-a.akamaihd.net/steam/apps/683320/capsule_616x353.jpg?t=1574359986" alt="GRIS" class="g-img">
            <div class="description">
                <h2 class="g-title">GRIS</h2>
                <br>
                <p class="g-desc">Gris is a hopeful young girl lost in her own world, dealing with a painful experience in her life. Her journey through sorrow is manifested in her dress, which grants new abilities to better navigate her faded reality.</p>
            </div>
        </div>
    </div>

    <h2 class="inside-box">Image gallery</h2>
    <div class="borderline"></div>

    <div class="inside-box">
        <img src="https://d3a1b16i91oc1g.cloudfront.net/full/6216d369e3927759befc334aa7881a09.jpeg" alt="" class="image-glry">
        <img src="https://thespinoff.co.nz/wp-content/uploads/2019/12/gris-1280-1536101730818_1280w.jpg" alt="" class="image-glry">
        <img src="https://c4.wallpaperflare.com/wallpaper/364/306/326/pc-gaming-games-art-video-games-video-game-art-gris-video-game-hd-wallpaper-preview.jpg" alt="" class="image-glry">
        <img src="https://66.media.tumblr.com/5cef5e4def6e179563c3c8e701a2c829/tumblr_pjy0ryktqf1qdt2dio3_r1_500.png" alt="" class="image-glry">
    </div>

    <h2 class="inside-box">Comments</h2>
    <div class="borderline"></div>

    <?php include 'comment-logic.php'; ?>

    <div class="inside-box comment-container">
        <img src="avatar.png" alt="" class="feed-avatar">
            <form action="" method="post">
                <div class="comment-area">
                    <textarea name="comment" class="comment" cols="30" rows="10" placeholder="Share a comment.."></textarea>
                </div>
                <input type="submit" name="comment" value="Post Comment" class="button-comment">
            </form>
    </div>

    <div class="inside-box">
    <div class="show-comment">
            <img src="avatar.png" alt="" class="feed-avatar">
            <div class="comment-area comment">
                <?php echo $nama." posted : ".$comment?>
            </div>   
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
    
</body>
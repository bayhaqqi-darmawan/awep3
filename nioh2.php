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
            <img src="https://gamespot1.cbsistatic.com/uploads/screen_large/104/1049837/3644313-nioh-2-review-promo.jpg" alt="Nioh 2" class="g-img">
            <div class="description">
                <h2 class="g-title">Nioh 2</h2>
                <br>
                <p class="g-desc">Master the lethal arts of the samurai as a mysterious half-human, half-supernatural Yokai warrior, in this challenging action RPG sequel.
                Explore violent Sengoku-era Japan and the deadly Dark Realm, both plagued with grotesque, merciless demons.
                Unsheathe your deadly weapons and cut down all enemies in your path using a revamped combat system and the ability to transform into a full Yokai to unleash devastating paranormal powers.</p>
            </div>
        </div>
    </div>

    <h2 class="inside-box">Image gallery</h2>
    <div class="borderline"></div>

    <?php include 'comment-logic.php'; ?>

    <div class="inside-box">
        <img src="https://thumbs.gfycat.com/PointlessBeautifulDarklingbeetle-poster.jpg" alt="" class="image-glry">
        <img src="https://thumbs.gfycat.com/FavoriteHideousFlyingfox-poster.jpg" alt="" class="image-glry">
        <img src="https://www.futuregamereleases.com/wp-content/uploads/2017/01/nioh-gameplay.jpg" alt="" class="image-glry">
        <img src="https://switchedongamer.ca/wp-content/uploads/2019/05/Nioh_2_Banner_Image.jpg" alt="" class="image-glry">
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
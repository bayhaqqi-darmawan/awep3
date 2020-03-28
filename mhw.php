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
            <img src="https://cdn-ext.fanatical.com/production/product/original/7f6e4bbc-69a4-4910-a424-8b4f14100c12.jpeg?w=1200" alt="Monster Hunter World" class="g-img">
            <div class="description">
                <h2 class="g-title">Monster Hunter World</h2>
                <br>
                <p class="g-desc">Battle gigantic monsters in epic locales.

                    As a hunter, you'll take on quests to hunt monsters in a variety of habitats.
                    Take down these monsters and receive materials that you can use to create stronger weapons and armor in order to hunt even more dangerous monsters.

                    In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.</p>
            </div>
        </div>
    </div>

    <h2 class="inside-box">Image gallery</h2>
    <div class="borderline"></div>

    <div class="inside-box">
        <img src="https://monsterhunterworld.wiki.fextralife.com/file/Monster-Hunter-World/monster-hunter-world-iceborne-namielle-01-29-08-2019_0903d4000000933708.jpg" alt="" class="image-glry">
        <img src="https://images.tweaktown.com/news/6/5/65480_01_monster-hunter-world-adds-high-res-textures-29gb-patch.jpg" alt="" class="image-glry">
        <img src="https://www.windowscentral.com/sites/wpcentral.com/files/styles/mediumplus/public/field/image/2019/11/monster-hunter-world-iceborne-stygian-zinogre.jpg?itok=b9WgjpfX" alt="" class="image-glry">
        <img src="https://static.techspot.com/images2/news/bigimage/2019/05/2019-05-11-image-8.jpg" alt="" class="image-glry">
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
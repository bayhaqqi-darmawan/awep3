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
            <img src="https://gamespot1.cbsistatic.com/uploads/screen_kubrick/1578/15789366/3642067-3580370-cvsmjpjdcvytq5rbbo7hcg.jpg" alt="Borderlands 3" class="g-img">
            <div class="description">
                <h2 class="g-title">Borderlands 3</h2>
                <br>
                <p class="g-desc">At the hard edge of the galaxy lies a group of planets ruthlessly exploited by militarized corporations. Brimming with loot and violence, this is your home—the Borderlands. Now, a crazed cult known as The Children of the Vault has emerged and is spreading like an interstellar plague. Play solo or co-op as one of four unique Vault Hunters, score loads of loot, and save the galaxy from this fanatical threat.</p>
            </div>
        </div>
    </div>

    <h2 class="inside-box">Image gallery</h2>
    <div class="borderline"></div>

    <div class="inside-box">
        <img src="https://images.idgesg.net/images/article/2019/09/desktop-screenshot-2019.09.13-14.32.21.34-100810995-large.3x2.jpg" alt="" class="image-glry">
        <img src="https://i.ytimg.com/vi/mX_bOGgCoW0/maxresdefault.jpg" alt="" class="image-glry">
        <img src="https://images.idgesg.net/images/article/2019/09/desktop-screenshot-2019.09.13-18.30.23.78-100811001-large.jpg" alt="" class="image-glry">
        <img src="https://cdn.mos.cms.futurecdn.net/ec5eb3798f5ac701480d2e4ababc024a.jpg" alt="" class="image-glry">
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
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
            <img src="https://i.ytimg.com/vi/7iOD39p0stI/maxresdefault.jpg" alt="Ori and the Will of the Wisps'" class="g-img">
            <div class="description">
                <h2 class="g-title">Ori and the Will of the Wisps'</h2>
                <br>
                <p class="g-desc">Play the critically acclaimed masterpiece. Embark on a new journey in a vast, exotic world where you’ll encounter towering enemies and challenging puzzles on your quest to unravel Ori’s destiny.</p>
            </div>
        </div>
    </div>

    <h2 class="inside-box">Image gallery</h2>
    <div class="borderline"></div>

    <div class="inside-box">
        <img src="https://twinfinite.net/wp-content/uploads/2020/03/how-to-save-ori-and-the-will-of-the-wisps-scaled.jpg" alt="" class="image-glry">
        <img src="https://www.windowscentral.com/sites/wpcentral.com/files/styles/mediumplus/public/field/image/2020/03/ori-and-the-will-of-the-wisps-review-pics_6.jpg?itok=znirAPz6" alt="" class="image-glry">
        <img src="https://twinfinite.net/wp-content/uploads/2020/03/ori-download-install-size-scaled.jpg" alt="" class="image-glry">
        <img src="https://gamespot1.cbsistatic.com/uploads/screen_small/1574/15746725/3639360-gameplay_orifirst20min_20200225_site.jpg" alt="" class="image-glry">
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
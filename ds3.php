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
            <img src="https://steamcdn-a.akamaihd.net/steam/apps/374320/header_japanese.jpg?t=1580308221" alt="Dark Souls 3" class="g-img">
            <div class="description">
                <h2 class="g-title">Dark Souls 3</h2>
                <br>
                <p class="g-desc">As fires fade and the world falls into ruin, journey into a universe filled with more colossal enemies and environments. Players will be immersed into a world of epic atmosphere and darkness through faster gameplay and amplified combat intensity. Fans and newcomers alike will get lost in the game hallmark rewarding gameplay and immersive graphics. Now only embers remain… Prepare yourself once more and Embrace The Darkness!</p>
            </div>
        </div>
    </div>

    <h2 class="inside-box">Image gallery</h2>
    <div class="borderline"></div>

    <?php 
        $comment = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST['comment'])){
                $comment = $comment;
            } else {
                $comment = $_POST['comment'];
            }
        }
    ?>

    <div class="inside-box">
        <img src="https://i.ytimg.com/vi/P11v6DzAZrE/maxresdefault.jpg" alt="" class="image-glry">
        <img src="https://i.ytimg.com/vi/bJcJnVP08oo/maxresdefault.jpg" alt="" class="image-glry">
        <img src="https://i.ytimg.com/vi/uk02AYGWYyw/maxresdefault.jpg" alt="" class="image-glry">
        <img src="https://lh3.googleusercontent.com/proxy/mW43JdV2Y4pX1UHlHK9Do8s0b3j4MYtQ9x3FDIIA8iAW000K7r69ReU-NjrZsc_-gbZONWMWXf9z24BfXW9hmWyZkWoy7NObhvH1TKE5_hgMKiJvE2LLiWKQyRWg3g" alt="" class="image-glry">
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
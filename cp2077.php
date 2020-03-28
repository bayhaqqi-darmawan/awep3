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
            <img src="https://www.cyberpunk.net/build/images/social-thumbnail-en-ab9301da.jpg" alt="CyberPunk 2077" class="g-img">
            <div class="description">
                <h2 class="g-title">CyberPunk 2077</h2>
                <br>
                <p class="g-desc">Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality. You can customize your character’s cyberware, skillset and playstyle, and explore a vast city where the choices you make shape the story and the world around you.</p>
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
        <img src="https://specials-images.forbesimg.com/imageserve/5e209e67a854780006e8ad90/960x0.jpg?fit=scale" alt="" class="image-glry">
        <img src="https://cdn.player.one/sites/player.one/files/2020/03/02/cyberpunk-2077.jpg" alt="" class="image-glry">
        <img src="https://images.tweaktown.com/news/7/0/70844_47_cyberpunk-2077-ownership-carries-forward-to-xbox-series.jpg" alt="" class="image-glry">
        <img src="https://www.vgr.com/wp-content/uploads/2019/12/Cyberpunk-2077-4%C3%86M-Music-Video-Grimes-600x300.jpg" alt="" class="image-glry">
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
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
            <img src="https://steamcdn-a.akamaihd.net/steam/apps/817540/capsule_616x353.jpg?t=1559307304" alt="SpellForce 3" class="g-img">
            <div class="description">
                <h2 class="g-title">SpellForce 3</h2>
                <br>
                <p class="g-desc">Three years after the Purity Wars, Nortander is on the cusp of a new era. However, things aren’t as peaceful as they seem – when the Queen calls you, a disgraced General, back to your homeland, you’re plunged in a war on many fronts: While a hatemonger threatens to tear apart the Dwarven realm, an enigmatic cult of Dark Elves harvests the souls of people for reasons unknown.</p>
            </div>
        </div>
    </div>

    <h2 class="inside-box">Image gallery</h2>
    <div class="borderline"></div>

    <div class="inside-box">
        <img src="https://images.gamewatcherstatic.com/image/file/1/23/100121/SpellForce-3-Soul-Harvest-2.jpg" alt="" class="image-glry">
        <img src="https://www.pcgames.de/screenshots/medium/2019/06/Spellforce3SoulHarvest-PCGAMES-Test-Review014-pc-games.jpg" alt="" class="image-glry">
        <img src="https://images.gamewatcherstatic.com/image/file/0/be/100120/SpellForce-3-Soul-Harvest-1.jpg" alt="" class="image-glry">
        <img src="https://spellforce.com/wp-content/uploads/2018/01/Elementalism_Skill-Tree.jpg" alt="" class="image-glry">
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
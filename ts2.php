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
            <img src="https://static.wixstatic.com/media/e41865_33c19889d5f84f7b9766bdf66c6a5a6b~mv2.jpg" alt="The Surge 2" class="g-img">
            <div class="description">
                <h2 class="g-title">The Surge 2</h2>
                <br>
                <p class="g-desc">In a bid to survive, explore the sprawling, devastated city of Jericho. Fight its numerous, ferocious threats in brutal, unforgiving combat, slashing and tearing the limbs off your opponents to steal valuable equipment that will make you stronger - strong enough to face the most fearsome, imposing foes lurking in the city.</p>
            </div>
        </div>
    </div>

    <h2 class="inside-box">Image gallery</h2>
    <div class="borderline"></div>

    <div class="inside-box">
        <img src="https://lh3.googleusercontent.com/83JfT7VuDfaZtuWmIq5B-phIsANWhEvHWDbBSG1ub89PzdA48rXRZu1N4RfSzfr3TNx44RlWLrok7fBNEvUZQKUOElhhqfA48hsAbTQvcS_xmRXO-j_QvoYq4GCzRGD1jsraM33T" alt="" class="image-glry">
        <img src="https://www.gamerevolution.com/assets/uploads/2019/06/The-Surge-2-Dev-Gameplay-Video-1280x720.jpg" alt="" class="image-glry">
        <img src="https://www.justpushstart.com/wp-content/uploads/2019/09/The-Surge-2-Screen-Shot-9-21-19-2.14-AM-890x606.png" alt="" class="image-glry">
        <img src="https://cdn.player.one/sites/player.one/files/styles/lg/public/2019/09/23/ts2-opener.jpg" alt="" class="image-glry">
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
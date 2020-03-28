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
            <img src="https://www.powerpyx.com/wp-content/uploads/resident-evil-3-remake-wallpaper.jpg" alt="Resident Evil 3" class="g-img">
            <div class="description">
                <h2 class="g-title">Resident Evil 3</h2>
                <br>
                <p class="g-desc">Resident Evil 3: Nemesis is a survival horror video game developed by Capcom and released for the PlayStation in 1999. It is the third installment in the Resident Evil series and takes place in two parts, before and after the events of Resident Evil 2.</p>
            </div>
        </div>
    </div>

    <h2 class="inside-box">Image gallery</h2>
    <div class="borderline"></div>

    <div class="inside-box">
        <img src="https://cdn.vox-cdn.com/thumbor/kgJpK_SnZ_QYr-MAOaf9JrQwLzk=/0x0:1920x1080/1200x800/filters:focal(807x387:1113x693)/cdn.vox-cdn.com/uploads/chorus_image/image/66372616/residentevil3remake.0.jpg" alt="" class="image-glry">
        <img src="https://cdn.mos.cms.futurecdn.net/43WBfo3SWL5eCLL7W62KjF.jpg" alt="" class="image-glry">
        <img src="https://www.residentevil.com/re3/assets/images/news/re3_200226_thumb.jpg" alt="" class="image-glry">
        <img src="https://honknews.com/wp-content/uploads/2020/03/resident-evil-3-remake-nemesis-carlos-jill-uhdpaper.com-4K-7.594-wp.thumbnail.jpg" alt="" class="image-glry">
    </div>

    <h2 class="inside-box">Comments</h2>
    <div class="borderline"></div>

    <?php include 'comment-logic.php'; ?>

    <div class="inside-box comment-container">
        <img src="avatar.png" alt="" class="feed-avatar">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="comment-area">
                    <textarea name="comment" class="comment" cols="30" rows="10" placeholder="Share a comment.."></textarea>
                </div>
                <input type="submit" name="submitComment" value="Post Comment" class="button-comment">
            </form>
        <br>
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
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
    <div class="line">
        <h2>highlights</h2>

        <div class="borderline"></div>
    </div>

    <div class="slide-container">
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>

        <div class="image-container">
            <a href="tw3.php"><img src="https://games.mxdwn.com/wp-content/uploads/2018/10/tile_witcher3_load_tiny.png" alt="The Witcher 3" class="slider-image"></a>
            <a href="cp2077.php"><img src="https://www.cyberpunk.net/build/images/social-thumbnail-en-ab9301da.jpg" alt="Cyberpunk 2077" class="slider-image"></a>
            <a href="mhw.php"><img src="https://cdn-ext.fanatical.com/production/product/original/7f6e4bbc-69a4-4910-a424-8b4f14100c12.jpeg?w=1200" alt="Monster Hunter World" class="slider-image"></a>
            
        </div>
        
        <div class="button-container">
            <a href="#slider-image-1" class="slider-button"></a>
            <a href="#slider-image-2" class="slider-button"></a>
            <a href="#slider-image-3" class="slider-button"></a>
        </div>
    </div>

    
    <h3>Recommended for you</h3>
    <div class="borderline"></div>
    

    <div class="inside-box">
        <div class="games">
        <a href="ts2.php">
            <div class="game-details">
                <img src="https://cdn.staticneo.com/ew/thumb/a/ab/The_Surge_2_titel.jpg/662px-The_Surge_2_titel.jpg" alt="The Surge 2" class="image-w-title">
                <div class="details">The Surge 2</div>
            </div>
        </a>
            
            <div class="game-details">
                <a href="ds3.php">
                <img src="https://i.ytimg.com/vi/0WL0AnOsNY8/maxresdefault.jpg" alt="Dark Souls 3" class="image-w-title">
                    <div class="details">Dark Souls 3</div>
                </a>
            </div>
            <div class="game-details">
            <a href="sf3.php">
                <img src="https://steamcdn-a.akamaihd.net/steam/apps/817540/capsule_616x353.jpg?t=1559307304" alt="SpellForce 3: Soul Harvest" class="image-w-title">
                <div class="details">SpellForce 3</div>
            </a>
            </div>
            <div class="game-details">
            <a href="bl3.php">
                <img src="https://cdn.player.one/sites/player.one/files/2020/02/12/borderlands-3.jpg" alt="Borderlands 3" class="image-w-title">
                <div class="details">Borderlands 3</div>
            </a>
            </div>
        </div>
    </div>

    <h3>Popular</h3>
    <div class="borderline"></div>

    <div class="inside-box popular">
    <a href="gris.php" style="text-decoration: none;
    color: black;">
    <div class="most-pop">
        <img src="https://cdn02.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_download_software_1/H2x1_NSwitchDS_Gris_image1600w.jpg" id="gris" alt="GRIS">
        <div class="details-pop">GRIS</div>
        </div>
    </a>
        <div class="second-half">
            <a href="doom.php" style="text-decoration: none;
    color: black;">
            <div class="game-details">
            <img src="https://steamcdn-a.akamaihd.net/steam/apps/782330/header.jpg?t=1583535123" alt="Doom Eternal" class="image-w-title">
            <div class="details">Doom Eternal</div>
            </div>
            </a>
            
            <a href="ori.php" style="text-decoration: none;
    color: black;">
            <div class="game-details">
            <img src="https://o.aolcdn.com/images/dims?quality=85&image_uri=https%3A%2F%2Fo.aolcdn.com%2Fimages%2Fdims%3Fresize%3D2000%252C2000%252Cshrink%26image_uri%3Dhttps%253A%252F%252Fs.yimg.com%252Fos%252Fcreatr-uploaded-images%252F2019-06%252Fe9b37c00-8af7-11e9-bf69-fcb449f62030%26client%3Da1acac3e1b3290917d92%26signature%3D063cdd40f3dc57f75d3aa649cb637867b536a267&client=amp-blogside-v2&signature=89ea438c8040e519fe6938cd8e017a4a34222dae" alt="Ori and the Will of the Wisps'" class="image-w-title">
            <div class="details">Ori and the Will of the Wisps'</div>
            </div>
            </a>

            <a href="nioh2.php" style="text-decoration: none;
    color: black;">
            <div class="game-details">
            <img src="https://cdn.wccftech.com/wp-content/uploads/2020/03/nioh-2-art.jpg" alt="Nioh 2" class="image-w-title">
            <div class="details">Nioh 2</div>
            </div>
            </a>

            <a href="re3.php" style="text-decoration: none;
    color: black;">
            <div class="game-details">
            <img src="https://steamcdn-a.akamaihd.net/steam/apps/952060/header.jpg?t=1583732360" alt="Resident Evil 3" class="image-w-title">
            <div class="details">Resident Evil 3</div>
            </div>
            </a>
        </div>
    </div>

    <div class="inside-box news">
        <img src="" alt="">
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
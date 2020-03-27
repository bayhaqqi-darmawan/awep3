<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: signin.php");
        exit;
    } else {
        $nama = $_SESSION["username"];
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
    <title>Activity</title>
</head>
<body>
    <?php include 'nav-user.php'; ?>

    <div class="profile-container">
        <div class="avatar-container">
            <img src="avatar.png" class="avatar" alt="Avatar">
        </div>

        <div class="profile-username">
            <?php echo $_SESSION["username"]; ?>
        </div>
    </div>

    <div class="inside-box">
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'profile-feed')">Activity Feed</button>
            <button class="tablinks" onclick="openTab(event, 'profile-about')">About</button>
            <button class="tablinks" onclick="openTab(event, 'profile-games')">Games</button>
            <button class="tablinks" onclick="openTab(event, 'profile-friends')">Friends</button>
            <button class="tablinks" onclick="openTab(event, 'profile-edit')">Edit Profile</button>
        </div>

        <div class="borderline" style="width:100%; margin-left:auto;"></div>

        <div id="profile-feed" class="tabcontent">

            <div class="status-post">
                <img src="avatar.png" alt="Avatar" id="feed-avatar">
                <textarea name="post_status" id="status-textarea"></textarea>
            </div>

            <div style="margin-top:40px">
                <h3 style="margin-left:auto;">Recent Activity</h3>
                <div class="borderline" style="width:100%; margin-left:auto;"></div>

                <div class="act-container">
                    <div id="game-i">
                    
                    </div>
                </div>
            </div>

        </div>

        <div id="profile-about" class="tabcontent">

            <div class="about-you-prof">
                <p class="warna-lain">About you</p>
                <div>
                    info
                </div>

                <p class="warna-lain">Location</p>
                <div>
                    Brunei Darussalam
                </div> 

                <p class="warna-lain">Birth date</p>
                <div>
                    dd/mm/yyyy
                </div>
            </div>
        </div>

        <div id="profile-games" class="tabcontent">

            <h3>Games you owned</h3>
            <div class="games-container"> 

            </div>
        </div>

        <div id="profile-friends" class="tabcontent">
            <h3>Your friends</h3>
            <div></div>
            <div></div>
        </div>

        <div id="profile-edit" class="tabcontent">
        <div class="about-you-prof">
                <p class="warna-lain">About you</p>
                <div>
                    info
                </div>

                <p class="warna-lain">Location</p>
                <div>
                    Brunei Darussalam
                </div> 

                <p class="warna-lain">Birth date</p>
                <div>
                    dd/mm/yyyy
                </div>
            </div>
        </div>
    </div>
    
<script>
    function openTab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
    

    
    
</body>
</html>
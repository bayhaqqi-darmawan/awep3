<?php
    session_start();

    require_once 'connect.php';
    $username = "";
    $aboutyou = "";
    $location = "";
    $birthdate = "";
    $status = "";



    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: signin.php");
        exit;
    } else {
        $nama = $_SESSION["username"];

        $sql = "SELECT id FROM bio WHERE username = :username";

            if ($stmt = $connection->prepare($sql)) {
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

                $param_username = trim($_SESSION['username']);

                if($stmt->execute()){
                    if($stmt->rowCount() == 1){
                        unset($stmt);
                    } else{
                        $sql = "INSERT INTO bio (username) VALUES (:username)";
                        $stmt = $connection->prepare($sql);
                        $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

                        $stmt->execute(['username'=>$nama]);
                        
                        unset($stmt);
                    }
                } else{
                    $u_err = "Oops! Something went wrong. Please try again later.";
                }

                unset($stmt);
            }
        
    }

    if (empty($_POST['status'])){
        $status = "";
    } else {
        $status = $_POST['status'];
    }

    unset($stmt);

    if (empty($aboutyou) || empty($location) || empty($birthdate)){
        $aboutyou = $aboutyou;
        $location = $location;
        $birthdate = $birthdate;
    } else {
        $sql = "UPDATE bio SET about='$aboutyou', location='$location', date='$birthdate'";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':about',$param_aboutyou, PDO::PARAM_STR);
        $stmt->bindParam(':location',$param_location, PDO::PARAM_STR);
        $stmt->bindParam(':date',$param_birthdate, PDO::PARAM_STR);
        $stmt->execute();
        unset($stmt);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST['aboutyou'])){
            $aboutyou = "";
        } else {
            $aboutyou = $_POST['aboutyou'];
        }
        if(empty($_POST['birthdate'])){
            $birthdate = "";
        } else {
            $birthdate = $_POST['birthdate'];
        }
        if(empty($_POST['location'])){
            $location = "";
        } else {
            $location = $_POST['location'];
        }
    }

    $sql = "SELECT * FROM bio";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    
    unset($stmt);
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
                <img src="avatar.png" alt="Avatar" class="feed-avatar">

                <div id="status-textarea">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <textarea name="status" cols="100" rows="3" placeholder="What's up, <?php echo $nama; ?>?"></textarea>
                        <input type="submit" name="submitStatus" value="Submit">
                    </form>
                </div>
                
            </div>

            <div class="show-status">
                <p><span style="text-transform:uppercase;"><?php echo $nama; ?></span> said, <?php echo $status; ?></p>
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
                <h4 class="warna-lain">About you</h4>
                <div class="show-info">
                <?php echo $aboutyou; ?>
                </div>

                <h4 class="warna-lain">Location</h4>
                <div class="show-info">
                <?php echo $location; ?>
                </div> 

                <h4 class="warna-lain">Birth date</h4>
                <div class="show-info">
                <?php echo $birthdate; ?>
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

        <?php 

        ?>

        <div id="profile-edit" class="tabcontent">
        <div class="about-you-prof">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <p for="" class="warna-lain">About you</p><br>
                <textarea name="aboutyou" id="" cols="30" rows="10" value="<?php echo $aboutyou; ?>"></textarea><br>
                <p for="" class="warna-lain">Location</p><br>
                <input type="text" name="location" value="<?php echo $location; ?>"><br>
                <p for="" class="warna-lain">Birth Date</p><br>
                <input type="date" name="birthdate" <?php echo $birthdate; ?>>
                <br>
                <input type="submit" name="submitEdit">
            </form>
            
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
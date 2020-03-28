<?php
    $u_err = "username";
    $p_err = "password";

    session_start();

    // if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    //     header("location: about-us.php");
    //     exit;
    // }

    require_once 'connect.php';

    $username = $password = "";
    $username_err = $password_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
            $u_err = $username_err;
        } else{
            $username = trim($_POST["username"]);
        }

        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
            $p_err = $password_err;
        } else {
            $password = trim($_POST["password"]);
        }

        if(empty($username_err) && empty($password_err)){
            $sql = "SELECT id, username, password FROM users WHERE username = :username";

            if ($stmt = $connection->prepare($sql)){
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

                $param_username = trim($_POST['username']);

                if($stmt->execute()){
                    if($stmt->rowCount() == 1){
                        if($row = $stmt->fetch()){
                            $id = $row["id"];
                            $username = $row["username"];
                            $hashed_password = $row["password"];
                            if(password_verify($password, $hashed_password)){
                                session_start();
                                
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;                            
                                
                                header("location: index.php");
                            } else{
                                $password_err = "The password you entered was not valid.";
                                $p_err = $password_err;
                            }
                        }
                    } else{
                        $username_err = "No account found with that username.";
                        $u_err = $username_err;
                    }
                } else{
                    $u_err = $p_err = "Oops! Something went wrong. Please try again later.";
                }
    
                unset($stmt);

            }
        }
        unset($pdo);
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
    <title>Sign-in</title>
</head>
<body>
<?php include 'nav.php' ?>
    
    <div class="sign-inup-container">
        <img src="logo.jpg" alt="GameLab Logo" class="logo-signinup">
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="username" class="form-control input-form" placeholder="<?php echo $u_err; ?>" value="">
            </div>    
            <div class="form-group">
                <input type="password" name="password" class="form-control input-form" placeholder="<?php echo $p_err; ?>">
            </div>
            <div class="form-group" >
                <input type="submit" class="btn btn-primary input-form" style="background-color: #45A29E;
                color: white;" value="Login" name="login">
            </div>
            <br>
            <p id="signup-css"><a href="signup.php" >Sign up</a></p>
        </form>
    </div>

    <?php include 'footer.php' ?>
</body>
</html>
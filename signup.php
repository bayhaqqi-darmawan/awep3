<?php 
    $u_err = "username";
    $p_err = "password";

    session_start();

    require_once 'connect.php';

    $username = $password = "";
    $username_err = $password_err = "";
    

    if (isset($_POST['signup'])) {

        if (empty(trim($_POST['username']))){
            $username_err = "Please enter a username.";
            $u_err = $username_err;
        } else {
            $sql = "SELECT id FROM users WHERE username = :username";

            if ($stmt = $connection->prepare($sql)) {
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

                $param_username = trim($_POST['username']);

                if($stmt->execute()){
                    if($stmt->rowCount() == 1){
                        $username_err = "This username is already taken.";
                        $u_err = $username_err;
                    } else{
                        $username = trim($_POST["username"]);
                    }
                } else{
                    $u_err = "Oops! Something went wrong. Please try again later.";
                }

                unset($stmt);
            }
        }

        if(empty(trim($_POST['password']))){
            $password_err = "Please enter a password.";
        } elseif(strlen(trim($_POST['password'])) < 6){
            $password_err = "Password must have atleast 6 characters.";
            $p_err = $password_err;
        } else {
            $password = trim($_POST["password"]);
        }

        if (empty($username_err) && empty($password_err)){
            $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";

            if ($stmt = $connection->prepare($sql)){
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
                $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

                $param_username = $username;
                $param_password = password_hash($password, PASSWORD_DEFAULT);

                if($stmt->execute()){
                    header("location: signin.php");
                } else {
                    echo "Something went wrong. Please try again.";
                }

                unset($stmt);
            }
        }

        unset($connection);
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
        <form action="signup.php" method="post">
            <div class="form-group">
                <input type="text" name="username" class="form-control input-form" placeholder="<?php echo $u_err; ?>" value="">
            </div>    
            <div class="form-group">
                <input type="email" name="email" class="form-control input-form" placeholder="Email" value="">
            </div>    
            <div class="form-group">
                <input type="password" name="password" class="form-control input-form" placeholder="<?php echo $p_err; ?>">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary input-form" style="background-color: #45A29E;
                color: white; cursor: pointer;" name="signup" value="Sign Up">
            </div> 
            <br>
            <p style="color: white;">Already have an account? <a href="signin.php" style="color: #45A29E; text-decoration: none;">sign-in</a> here.</p>
        </form>
    </div>

    <?php include 'footer.php' ?>
</body>
</html> 
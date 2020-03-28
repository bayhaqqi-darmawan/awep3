<?php

session_start();

include 'connection.php';


if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $navigation_bar = "nav.php";
    } else {
        $nama = $_SESSION["username"];
        $navigation_bar = "nav-user.php";
    }

if(isset($_POST['submit']))
{
	$replycont = $_POST['replycont'];
	$id = $_GET['id'];

	$sql = 'INSERT INTO posts(post_cont, post_date, post_topic, post_by) VALUES (:replycont, CURRENT_DATE(), :id , $_SESSION["user_id"]   ) ';

	$result = $connection->prepare($sql);
	$result->bindParam(':replycont',$replycont, PDO::PARAM_STR);
	$result->bindParam(':id',$id, PDO::PARAM_STR);

	$result->execute();
	if(!$result)
    {
        echo 'Error, reply is not saved.';
    }
    else
    {
        echo 'Reply has been saved <a href="topic.php?id='.htmlentities($_GET['id']).'">here</a> ';
    }


} 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Reply</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style-forum.css">
</head>
<body>

<?php include $navigation_bar; ?> 

<div class="post-content">
    <form method="post" action="">

        <p> Message:  </p>
        <p> <textarea name="replycont"> </textarea> </p>
        <p> <input type="submit" name="submit" value="Submit Reply" > </p>
        
    </form>    
</div>





</body>
</html>


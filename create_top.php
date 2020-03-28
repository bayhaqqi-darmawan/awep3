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
	$catname = $_POST['top_name'];
	$catdesc = $_POST['top_desc'];
    $id = $_GET['id'];


	$sql = 'INSERT INTO topics(topic_name, topic_date, topic_cat, topic_by ) VALUES (:topname, CURRENT_DATE(), :id, $_SESSION["user_id"] )';

	$result = $connection->prepare($sql);
	$result->bindParam(':topname',$topname, PDO::PARAM_STR);
    $result->bindParam(':id',$id, PDO::PARAM_STR);
    

	$result->execute();
	if(!$result)
    {
        //something went wrong, display the error
        echo 'Error, please try again';
    }
    else
    {
        $topicid = $connection->lastInsertId();

        $sql = 'INSERT INTO topics(post_cont, post_date, post_topic, post_by ) VALUES (:postcont, CURRENT_DATE(), $topicid , $_SESSION["user_id"] )';

        $result = $connection->prepare($sql);
        $result->bindParam(':postcont',$postcont, PDO::PARAM_STR);

        $result->execute();
        if (!$result) {
            echo 'Error, please try again';
        }else{
            echo "You have created a <a href='topic.php?id= $topicid'>topic</a>" ;

        }

    }

}         

?>


<!DOCTYPE html>
<html>
<head>
	<title>Create topic</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style-forum.css">
</head>
<body>

<?php include $navigation_bar; ?> 

<div class="post-content">
    <form method='post' action=''>
        <p>
            Topic name: 
        </p>
        <p> 
            <input type='text' name='topname' />
        </p>
        <br/>
        <p>
           Post: 
        <p>
            <textarea name="postcont"></textarea>
        </p>
        </p>
        
            <input type='submit' name="submit" value='Add topic' />
    </form>    
</div>




<?php include 'footer.php'; ?> 


</body>
</html>



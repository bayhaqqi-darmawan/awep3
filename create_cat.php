<?php

session_start();

include 'connection.php';

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $navigation_bar = "nav.php";

        header("location: signin.php");
        exit;
    } else {
        $nama = $_SESSION["username"];
        $navigation_bar = "nav-user.php";
    }

if(isset($_POST['submit']))
{
	$catname = $_POST['cat_name'];
	$catdesc = $_POST['cat_desc'];

	$sql = "INSERT INTO categories(cat_name, cat_desc) VALUES (:catname, :catdesc) ";

	$result = $connection->prepare($sql);
	$result->bindParam(':catname',$catname, PDO::PARAM_STR);
	$result->bindParam(':catdesc',$catdesc, PDO::PARAM_STR);

	$result->execute();
	if(!$result)
    {
        //something went wrong, display the error
        echo 'Error, please try again';
    }
    else
    {
        echo 'New category successfully added.';
    }

}         


?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Category</title>
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
        <p> Category name: </p> 
        <p> <input type='text' name='cat_name' /> </p>
        <br/>
        
        <p>
            Category description: 
        </p>
        <p>
            <textarea name='cat_desc'></textarea>
        </p>
        
            <input type='submit' name="submit" value='Add category' />
    </form>
</div>




<?php include 'footer.php'; ?> 


</body>
</html>



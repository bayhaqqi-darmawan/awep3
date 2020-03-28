<?php
    session_start();

	include 'connection.php';


    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $navigation_bar = "nav.php";
    } else {
        $nama = $_SESSION["username"];
        $navigation_bar = "nav-user.php";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forum Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style-forum.css">
</head>
<body>

<?php include $navigation_bar; ?> 

<a class="item" href='create_cat.php'>Create category</a>


<div class="content">
	

<?php 
	
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		echo "";
    } else {
        $nama = $_SESSION["username"];
        echo "<p> <a href='create_cat.php'>Create category</a> </p> ";
    }

 ?>


	<table>   
		<tr>
			<th class="leftpart" >Forum</th>
			<th>Topic</th>
			<th>Post</th>
		</tr>

<?php

$sql = "SELECT cat_id, cat_name, cat_desc FROM categories";

$result = $connection->prepare($sql);

$result->execute();
	if(!$result)
    {
        echo 'The categories sould not be displayed, please try again';
    }
    else
    {

    	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            $query = "SELECT COUNT(*) FROM topics";
            $toprow =  $connection->prepare($query);
            $toprow->execute();

            $toprownum = $toprow->fetchColumn();

            $pquery = "SELECT COUNT(*) FROM posts";
            $posrow =  $connection->prepare($pquery);
            $posrow->execute();

            $posrownum = $posrow->fetchColumn();

 			echo '<tr>';
                echo '<td class="leftpart">';
                    echo '<h3><a href="category.php?id='.$row['cat_id'].'">' . $row['cat_name'] . '</a></h3>' . $row['cat_desc'];
                echo '</td>';
                echo '<td class="rightpart">';
                            echo $toprownum;
                echo '</td>';
                echo '<td class="rightpart">';
                            echo $posrownum;
                echo '</td>';
            echo '</tr>';

    	}

    }

?>

</table>

</div>

</body>
</html>


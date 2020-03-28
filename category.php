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
	<title>Topic Page</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

<?php include $navigation_bar; ?> 

<a class="item" href='create_top.php'>Create Topics</a>
	

<div class="content">
<?php

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		echo "";
    } else {
        $nama = $_SESSION["username"];
        echo "<a href='create_top.php'>Create topic</a>";
    }
?>

	<table>   
		<tr>
			<th class="leftpart" >Topic</th>
			<th>Post</th>
			<th>Created at</th>
		</tr>

<?php 
$id = $_GET['id'];

$sql = 'SELECT * FROM categories WHERE cat_id = :id ';
$result = $connection->prepare($sql);
$result->bindParam(':id',$id, PDO::PARAM_STR);

$result->execute();
if (!$result) {
	echo "Category could not be displayed, please try again.";
}else{

$sql = "SELECT topic_id, topic_name, topic_date, topic_cat FROM topics";

$result = $connection->prepare($sql);

	$result->execute();
		if(!$result)
	    {
	        echo 'The topics could not be displayed, please try again';
	    }
	    else
	    {

	    	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

	    	$pquery = "SELECT COUNT(*) FROM posts";
            $posrow =  $connection->prepare($pquery);
            $posrow->execute();

            $posrownum = $posrow->fetchColumn();

	 			echo '<tr>';
	                echo '<td class="leftpart">';
	                    echo '<h3><a href="topic.php?id=' .$row['topic_id']. '">' . $row['topic_name'] . '</a><h3>';
	                echo '</td>';
	                echo '<td class="rightpart">';
	                    echo $posrownum;
	                echo '</td>';
	                echo '<td class="rightpart">';
	                    echo date('d-m-Y', strtotime($row['topic_date']));
	                echo '</td>';
	            echo '</tr>';

	    	}


	    }

}




?>
</div>



</body>
</html>


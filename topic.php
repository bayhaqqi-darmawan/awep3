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
    <link rel="stylesheet" type="text/css" href="style-forum.css">
</head>
<body>

<?php include $navigation_bar; ?> 

<a class="item" href='reply.php'>Add reply</a>

<div class="content">
<?php

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		echo "";
    } else {
        $nama = $_SESSION["username"];
        echo "<a class='item' href='reply.php'>Add reply</a>";
    }


$sql = "SELECT post_id, post_cont, post_date, post_topic, post_by FROM posts";

$result = $connection->prepare($sql);

$result->execute();
	if(!$result)
    {
        echo 'The posts could not be displayed, please try again';
    }
    else
    {
    	echo '
			<table>
				<tr>
					<th class="leftpart" colspan = "2" >Topics</th>
				</tr>
    	';

    	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
 			echo '<tr>';
                echo '<td class="rightpart">';
                    echo '<h3><a href="topic.php?id=' .$row['post_id']. '">' . $row['post_cont'] . '</a><h3>';
                echo '</td>';
                echo '<td class="leftpart">';
                    echo date('d-m-Y', strtotime($row['post_date']));
                echo '</td>';
            echo '</tr>';

    	}
    	echo "</table>";

    }

?>
</div>


</body>
</html>


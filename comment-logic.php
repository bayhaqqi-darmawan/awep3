<?php 
        $comment = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST['comment'])){
                $comment = $comment;
            } else {
                $comment = $_POST['comment'];
            }
        }

        
    ?>
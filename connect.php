<?php
        try {
            $username = 'root';
            $password = '';
            $connection = new PDO('mysql:host=localhost;dbname=awep3', $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
?>
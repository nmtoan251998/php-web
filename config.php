<?php
    function getDb(){
        $servername = "localhost";
        $username = "root";
        $password = "miNhtoaN135";
        $db = "blog";
        try {
            $conn = mysqli_connect($servername, $username, $password, $db);
            echo "Connected successfully"; 
        }
        catch(exception $e) {
            echo "Connection failed: " . $e->getMessage();
        }
            
        return $conn;
    }
?>
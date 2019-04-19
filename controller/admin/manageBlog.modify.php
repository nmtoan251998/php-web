<?php require "../../config/db.config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap4/bootstrap.min.css">
</head>
<body>
    <?php
        $query = $_SERVER["QUERY_STRING"];
        $id = (int)substr($query, -1); 

        $conn = getDb();
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "";

        if(mysqli_query($conn, $sql)){
            ?>
            <script>
                // alert("Deleted!");
                // window.location.href="/view/admin/page/manageBlog.php"
            </script>
        <?php 
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    ?>
</body>
</html>

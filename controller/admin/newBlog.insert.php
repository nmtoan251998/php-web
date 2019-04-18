<?php require "../../config/db.config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap4/bootstrap.min.css">
</head>
<body>
    <?php
        if(isset($_POST['submit'])) { 
            // retrieve the form data by using the element's name attributes value as key 
            $blog_id = $_POST['blog_id']; 
            $title = $_POST['title']; 
            $description = $_POST['description'];    
            $author = $_POST['author']; 
            $post_date = $_POST['post_date']; 

            $conn = getDb();
            $sql = "INSERT INTO post VALUES($blog_id, '$title', '$description', '$author', '$post_date')";
            
            if(mysqli_query($conn, $sql)){
                ?>
                <script>
                    alert("Inserted!");
                    window.location.href="/view/admin/index.php"
                </script>
            <?php 
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
            
        } else {
            echo "Fail";
        }
    ?>
</body>
</html>

<?php require "../../config/db.config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap4/bootstrap.min.css">
</head>
<body>
    <?php
        $conn = getDb();
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if(isset($_POST['submit'])) {
            $updateBlogId = $_POST['blog_id']; 
            $updateTitle = $_POST['title']; 
            $updateDescription = $_POST['description'];    
            $updateAuthor = $_POST['author']; 
            $updatePostDate = $_POST['post_date']; 

            $updateSql = "UPDATE post SET title='$updateTitle' WHERE blog_id=$updateBlogId";

            if(mysqli_query($conn, $updateSql)){
                ?>
                <script>
                    alert("Updated!");
                    window.location.href="/view/admin/page/manageBlog.php"
                </script>
            <?php 
            } else{
                echo "ERROR: Could not able to execute $updateSql " . mysqli_error($conn);
            }
        }

        
    ?>
</body>
</html>

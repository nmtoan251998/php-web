<?php require "../../../config/db.config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap 4.0.0 -->
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-fix.css">

    <title>Welcome to Noooat blogspot</title>
</head>
<body>
    <div class="container-fluid">
        <?php include "../component/navbar.php"?>
        <!-- <?php require "../includes/manageBlog.modify.php"?>     -->
        <?php require "../../../controller/admin/queryBlog.controller.php"?>

        <div class="container-fluid blog__management">                
            <?php 
                $conn = getDb();
                $sql = "SELECT * FROM post";

                if($result = mysqli_query($conn, $sql)) {
                    if(mysqli_num_rows($result) > 0) {
                        echo'<table class="table table-striped table-hover mt-5">';
                        echo'<thead>';
                                echo'<tr>';
                                    echo'<th scope="col">#</th>';
                                    echo'<th scope="col">Title</th>';
                                    echo'<th scope="col">Description</th>';
                                    echo'<th scope="col">Author</th>';
                                    echo'<th scope="col">Release day</th>';
                                    echo'<th scope="col">Manage</th>';
                                    echo'</tr>';
                        echo'</thead>';
                        echo'<tbody>';

                        while($row = mysqli_fetch_array($result)) {
                            echo'<tr>';
                                echo"<th scope='row'>".$row['blog_id']."</th>";
                                echo"<td>".$row['title']."</td>";
                                echo"<td>".$row['description']."</td>";
                                echo"<td>".$row['author']."</td>";
                                echo"<td>".$row['post_date']."</td>";
                                echo'<td>';
                                    echo'<div class="dropdown">';
                                        echo'<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">';
                                            echo'Actions';
                                        echo'</button>';
                                        echo'<div class="dropdown-menu">';
                                            echo'<a class="dropdown-item" href="#">Modify</a>';
                                            echo'<a class="dropdown-item" href="#">Delete</a>';
                                            echo'<a class="dropdown-item" href="#">View</a>';
                                        echo'</div>';
                                    echo'</div>';             
                                echo'</td>';
                            echo'</tr>';
                        }
                            echo'</tbody>';
                        echo '</table>';
                    }
                    else {
                        echo "No matching records are found."; }
                }  
                else {
                    echo "ERROR: Could not able to execute $sql. " .$mysqli->error;  }
            ?>
        </div>
    </div>
    
    <script src="/public/js/jquery-3.4.0.min.js"></script>
    <script src="/public/js/popper.min.js"></script>
    <script src="/public/js/bootstrap4/bootstrap.min.js"></script>
    <script src="/public/js/navbar.js"></script>
</body>
</html>
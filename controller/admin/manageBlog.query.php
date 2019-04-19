<?php 
    $conn = getDb();
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
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
                    echo"<th width='5%'scope='row'>".$row['blog_id']."</th>";
                    echo"<td width='20%'>".$row['title']."</td>";
                    echo"<td width='45%'>".$row['description']."</td>";
                    echo"<td width='10%'>".$row['author']."</td>";
                    echo"<td width='15%'>".$row['post_date']."</td>";
                    echo'<td>';
                        echo'<div class="dropdown">';
                            echo'<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">';
                                echo'Actions';
                            echo'</button>';
                            echo'<div class="dropdown-menu">';
                                echo'<a class="dropdown-item" href="./manageBlog.modify.php?blog_id='.$row['blog_id'].'">Modify</a>';
                                echo'<a class="dropdown-item" href="/controller/admin/manageBlog.delete.php?blog_id='.$row['blog_id'].'">Delete</a>';
                                echo'<a class="dropdown-item" href="/controller/admin/manageBlog.view.php?blog_id='.$row['blog_id'].'">View</a>';
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
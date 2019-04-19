<?php require "../../../config/db.config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

     <!-- Bootstrap 4.0.0 -->
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-fix.css">

    <title>Edit blog</title>
</head>
<body>

    <?php
        $query = $_SERVER["QUERY_STRING"];
        $id = substr($query, strpos($query, "=")+1); 

        $conn = getDb();
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT * FROM post WHERE blog_id=$id";
        if($result = mysqli_query($conn, $sql)) {
            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);

                $title = $row['title'];
                $description = $row['description'];
                $author = $row['author'];
                $postDate = $row['post_date'];
            } else {
                echo "ERROR: No matching records are found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    ?>
    

    <?php include "../component/navbar.php"?>
    <div class="container-fluid">
        <h1 class="text-center mt-2 text-capitalize">Blog information</h1>
        <div class="container-fluid mt-4 w-75 blog__insertion">
            <form method="POST" action="../../../controller/admin/manageBlog.modify.php" class="bg-light p-3 rounded clearfix">
                <div class="form-group">                    
                    <input 
                        type="number" 
                        class="form-control" 
                        id="blog_id" 
                        placeholder="Title of the blog"
                        name="blog_id"                                    
                        hidden
                        <?php echo "value=$id"?> 
                        >
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="title" 
                        placeholder="Title of the blog"
                        name="title"
                        <?php echo "value=$title"?>
                        >
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="author" 
                        placeholder="Author of the blog"
                        name="author"
                        <?php echo "value=$author"?>
                        >
                </div>
                <div class="form-group">
                    <label for="post_date">Release day</label>
                    <input 
                        type="date" 
                        class="form-control" 
                        id="post_date" 
                        placeholder="Release date of the blog"
                        name="post_date"
                        <?php echo "value=$postDate"?>
                        >
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea 
                        class="form-control" 
                        id="description" 
                        rows="5" 
                        name="description"><?php echo "$description"?> 
                        </textarea>
                </div>        
                <input 
                    type="submit" 
                    class="float-right btn btn-primary"
                    name="submit"
                    value="Save">
                <a href="./manageBlog.php" class="btn btn-dark float-right mr-3">Back</a>
            </form>
        </div>
    </div>
</body>
</html>

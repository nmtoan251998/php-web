<!-- <?php include "config.php" ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap 4.0.0 -->
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-fix.css">

    <title>New blog</title>
</head>
<body>
    <div class="container-fluid">
        <?php include "../component/navbar.php"?>

        <h1 class="text-center mt-2 text-capitalize">Blog information</h1>
        <div class="container-fluid mt-4 w-75 blog__insertion">
            <form class="bg-light p-3 rounded">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="title" 
                        placeholder="Title of the blog">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="author" 
                        placeholder="Author of the blog">
                </div>
                <div class="form-group">
                    <label for="post_date">Release day</label>
                    <input 
                        type="date" 
                        class="form-control" 
                        id="post_date" 
                        placeholder="Release date of the blog">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="5"></textarea>
                </div>
                </form>
        </div>
    </div>
    
    <script src="/public/js/jquery-3.4.0.min.js"></script>
    <script src="/public/js/popper.min.js"></script>
    <script src="/public/js/bootstrap4/bootstrap.min.js"></script>
    <script src="/public/js/navbar.js"></script>
</body>
</html>
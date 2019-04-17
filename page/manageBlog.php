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

        <div class="container-fluid blog__management">
            <table class="table table-striped table-hover mt-5">
                <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Author</th>
                            <th scope="col">Release day</th>
                            <th scope="col">Manage</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>This is my first blog</td>
                        <td>This is the demo of my blogspot</td>
                        <td>Noooat</td>
                        <td>2019-03-26</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Modify</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">View</a>
                                </div>
                            </div>             
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>This is my first blog</td>
                        <td>This is the demo of my blogspot</td>
                        <td>Noooat</td>
                        <td>2019-03-26</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Modify</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">View</a>
                                </div>
                            </div>             
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>This is my first blog</td>
                        <td>This is the demo of my blogspot</td>
                        <td>Noooat</td>
                        <td>2019-03-26</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Modify</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">View</a>
                                </div>
                            </div>             
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>This is my first blog</td>
                        <td>This is the demo of my blogspot</td>
                        <td>Noooat</td>
                        <td>2019-03-26</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Modify</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">View</a>
                                </div>
                            </div>             
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="/public/js/jquery-3.4.0.min.js"></script>
    <script src="/public/js/popper.min.js"></script>
    <script src="/public/js/bootstrap4/bootstrap.min.js"></script>
    <script src="/public/js/navbar.js"></script>
</body>
</html>
<?php require_once "../config/db.config.php"?>
<?php 
    $conn = getDb();
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $createTableSql = "CREATE TABLE IF NOT EXISTS post(
	    blog_id INT AUTO_INCREMENT ,
        title VARCHAR(255) NOT NULL,
	    description TEXT,
        author VARCHAR(255) NOT NULL,
        post_date DATE,
        PRIMARY KEY (blog_id)
    )"; 

    try {
        if(mysqli_query($conn, $createTableSql)) {
            echo "Created table post!";
        } else {
            echo "Error occurred!";
        }
    } catch (Exception $e) {
        echo "$e";
    }
    
    mysqli_close($conn);
?>
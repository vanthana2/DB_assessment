<?php
session_start(); 

// Connect to the database
$servername = "localhost";
$username = "dckap"; 
$password = "Dckap2023Ecommerce"; 
$dbname = "db_assessment";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch blogs from the database
$sql = "SELECT * FROM Blog";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        a{
            color: #fff;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        section {
            padding: 20px;
        }
        .blog-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .blog-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
            cursor: pointer; 
        }
        .blog-item h3 {
            margin-top: 0;
        }
        footer {
            background-color: darkgreen;
            color: #fff;
            text-align: center;
            padding: 7px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <a href="home.php">
        <h1>YourSite</h1>
        </a>
        <nav>
            <ul>
                <li><a href="product.php">Shop Products</a></li>
                <li><a href="blog.php">Blogs</a></li>
            </ul>
        </nav>
    </header>
    
    <section>
        <h2>Blog Posts</h2>
        <ul class="blog-list">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li class='blog-item' onclick='viewBlogDetails(\"{$row["title"]}\", \"{$row["content"]}\")'>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p>" . $row["content"] . "</p>";
                    echo "</li>";
                }
            } else {
                echo "No blog posts found";
            }
            ?>
        </ul>
    </section>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> YourSite. All Rights Reserved.</p>
    </footer>

    <script>
       function viewBlogDetails(title, content) {
            sessionStorage.setItem('blogTitle', title);
            sessionStorage.setItem('blogContent', content);
            window.location.href = 'blog_details.php';
        }
    </script>
</body>
</html>

<?php
$conn->close();
?>



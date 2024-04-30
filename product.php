<?php
// Connect to the database
$servername = "localhost";
$username = "dckap"; 
$password = "Dckap2023Ecommerce"; 
$dbname = "db_assessment";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from the database
$sql = "SELECT * FROM Product";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Products</title>
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
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .product {
            border: 1px solid #ddd;
            padding: 20px;
        }
        .product img {
            max-width: 100%;
            height: auto;
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
                <!-- <li><a href="index.php">Home</a></li> -->
                <li><a href="product.php">Shop Products</a></li>
                <li><a href="blog.php">Blogs</a></li>
            </ul>
        </nav>
    </header>
    
    <section>
       
<h2>Our Products</h2>
        <div class="product-grid">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product'>";
                    echo "<h3>" . $row["name"] . "</h3>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "<p>Price: $" . $row["price"] . "</p>";
                    echo "<img src='" . $row["image_url"] . "' alt='" . $row["name"] . "' />";
                    echo "</div>";
                }
            } else {
                echo "No products found";
            }
            ?>
        </div>
    </section>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> YourSite. All Rights Reserved.</p>
    </footer>
    <script>
        function showProductDetails(productId) {
           
            sessionStorage.setItem('productId', productId);
       
            window.location.href = 'product_detail.php';
        }
    </script>
</body>
</html>

<?php
$conn->close();
?>





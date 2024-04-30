<style>
    a{
        color: black;
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


if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $product_id = $_GET['id'];
    
    $sql = "SELECT * FROM Product WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['product_name'] = $row["name"];
        $_SESSION['product_description'] = $row["description"];
        $_SESSION['product_price'] = $row["price"];
        $_SESSION['product_image'] = $row["image_url"];
    } else {
        echo "Product not found";
        exit();
    }
} else {
    echo "Invalid product ID";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['product_name']; ?></title>
   
</head>
<body>
    <header>
        <a href="home.php"><h1>YourSite</h1>
        </a>
        <nav>
           
        </nav>
    </header>
    <main>
        <h2><?php echo $_SESSION['product_name']; ?></h2>
        <p><?php echo $_SESSION['product_description']; ?></p>
        <p>Price: $<?php echo $_SESSION['product_price']; ?></p>
        <img src="<?php echo $_SESSION['product_image']; ?>" alt="<?php echo $_SESSION['product_name']; ?>">
    </main>
 <footer>
        <p>&copy; <?php echo date("Y"); ?> YourSite. All Rights Reserved.</p>
    </footer>
</body>
</html>




<?php
session_start();

$blogTitle = isset($_SESSION['blogTitle']) ? $_SESSION['blogTitle'] : '';
$blogContent = isset($_SESSION['blogContent']) ? $_SESSION['blogContent'] : '';

if (empty($blogTitle) || empty($blogContent)) {
    // header("Location: blog.php");
    exit;
}

unset($_SESSION['blogTitle']);
unset($_SESSION['blogContent']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $blogTitle; ?></title>
    <style>
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

    </header>
    
    <section>
        <h2><?php echo $blogTitle; ?></h2>
        <div><?php echo $blogContent; ?></div>
    </section>
    
    <footer>
    <p>&copy; <?php echo date("Y"); ?> YourSite. All Rights Reserved.</p>
    </footer>
</body>
</html>






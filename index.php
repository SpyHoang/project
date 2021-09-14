<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web </title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/product.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/6dffcff37b.js" crossorigin="anonymous"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
</head>

<body>
    <div class="wrapper">
        <?php
        session_start();
        include("admincp/config/config.php");
        include("pages/header.php");
        // include("pages/menu.php");
        include("pages/main.php");
        include("pages/footer.php");
        ?>
    </div>
    <script src="js/index.js"></script>
</body>

</html>
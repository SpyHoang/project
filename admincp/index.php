<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleadmincp.css" type="text/css">
</head>
<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
    header("Location:login.php");
}
?>

<body>
    <div class="wrapper">
        <h3 class="title_admin">Welcome Admin</h3>
        <?php

        include("config/config.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");
        ?>
    </div>
</body>

</html>
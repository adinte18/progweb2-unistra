<?php
session_start();
?>
<!DOCTYPE HTML>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css" type="text/css">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="assets/css/footer.css" type="text/css">
    <link rel="stylesheet" href="assets/css/blog.css" type="text/css">
    <script src="https://kit.fontawesome.com/fc27174e98.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <?php
        include "header.php";
        include "main.php";
        include "footer.php";
    ?>

    <script src="assets/js/blogAjax.js"></script>
    <script src = "assets/js/header.js"></script>
</body>
</html>
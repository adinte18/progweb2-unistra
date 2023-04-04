<?php
session_start();
include "assets/php/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login_page.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css" type="text/css">
    <script src="https://kit.fontawesome.com/fc27174e98.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php
include "header.php"
?>

<div class = "login">
    <div class = "input-field">

        <?php
            if (isset($_SESSION['nom']))
            {
                $user = $_SESSION['username'];
                header("location: /profile.php");
            }
        ?>

        <form action="assets/php/login_handler.php" method = "post" id = "register-form">
            <label for="username"><?php echo $lang['username'];?></label>
            <input id="username" type="text" name="username" placeholder="<?php echo $lang['username'];?>">
            <?php
            if (isset($_GET["error"]))
            {
                if($_GET['error'] == "user_does_not_exist")
                {
                    echo "<p id = 'errors'>Username does not exist. You can register <a href='/register.php'>here</a></p>";
                }

                if($_GET['error'] == "wrong_password")
                {
                    echo "<p id = 'errors'> Wrong password </p>";
                }
            }
            ?>

            <label for="password"><?php echo $lang['mdp'];?></label>
            <input id="password"  type="password" name="password" placeholder="<?php echo $lang['mdp'];?>">

            <input type="submit" value="Login">

            <h3><?php echo $lang['dont_have_account'];?><a href="register.php"><?php echo $lang['sign_up'];?></a></h3>
        </form>
    </div>
</div>

</body>

</html>
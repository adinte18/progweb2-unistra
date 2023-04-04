
<?php
include "assets/php/config.php"
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

    <?php include "header.php"?>

    <div class = "login">
        <div class = "input-field">
            <form action="assets/php/register_handler.php" method="post" id="register-form">

                <div class = "form-field">
                    <label for="username"><?php echo $lang['username']?></label>
                    <input id="username" type="text" name="username" placeholder="<?php echo $lang['username'];?>">
                    <?php
                    if (isset($_GET["error"]))
                    {
                        if($_GET['error'] == "user_exists")
                        {
                            echo "<p id = 'errors'>Username already exists, try another one :)</p>";
                        }
                        if($_GET['error'] == "email_exists")
                        {
                            echo "<p id = 'errors'>Email already exists, <a href = 'login.php'>log in </a> right now :)</p>";
                        }
                    }
                    ?>
                    <small>Error message</small>
                </div>

                <br>

                <div class = "form-field">
                    <label for="email">E-Mail</label>
                    <input id="email" type="text" name="email" placeholder="example@example.com">
                    <small>Error message</small>
                </div>

                <br>

                <div class = "form-field">
                    <label for="nom"><?php echo $lang['nom']?></label>
                    <input id="nom" type="text" name="nom" placeholder="<?php echo $lang['nom'];?>">
                    <small>Error message</small>
                </div>

                <br>

                <div class = "form-field">
                    <label for="prenom"><?php echo $lang['prenom']?></label>
                    <input id="prenom" type="text" name="prenom" placeholder="<?php echo $lang['prenom'];?>">
                    <small>Error message</small>
                </div>

                <br>

                <div class = "form-field">
                    <label for="password"><?php echo $lang['mdp']?></label>
                    <input id="password"  type="password" name="password" placeholder="<?php echo $lang['mdp'];?>">
                    <small>Error message</small>
                </div>


                <br>


                <input id="button" type="submit" value="<?php echo $lang['inscrire']?>">

                <h3><?php echo $lang['have_account']?><a href="login.php">Log in</a></h3>
            </form>
        </div>
    </div>

<script src = "assets/js/header.js"></script>
<script src = "assets/js/register-page-script.js"></script>
</body>

</html>
<?php
include ('assets/php/ORM.php');
include "assets/php/config.php";

$orm = new ORM();

session_start();

$email = $_SESSION['email'];

if (!isset($_SESSION['username']))
{
    header("location: /login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css" type="text/css">
    <script src="https://kit.fontawesome.com/fc27174e98.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

<script async defer src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>

<?php include "header.php" ?>

<div class = "profile-content">

    <div id = "myModal" class="modal">
        <span class="close">&times;</span>
        <div class = "modal-content">
            <form action="/assets/php/appointment_handler.php" method="post" id = "book">
                <div class = "form-field">
                    <label id ='lbl_date' for="date"><?php echo $lang['choose_date'];?></label>
                    <input id="date" type="date" name="date">
                    <small>Error message</small>
                </div>

                <br>

                <label id='option' for="option"><?php echo $lang['choose_option'];?></label>
                    <select name = "coupures" id = "coupures">
                    <option value="homme"><?php echo $lang['coiffure_homme']?></option>
                    <option value="femme"><?php echo $lang['coiffure_femme']?></option>
                    <option value="enfant"><?php echo $lang['coiffure_enfant']?></option>
                </select>
                <input class = "button" type="submit" name = 'book' value="<?php echo $lang['reserver']?>">
            </form>
        </div>
    </div>

    <h4><?php echo $lang['glad_to_see_u'];?> <?php echo $_SESSION['username'];?> ! </h4>

    <div class = "button-wrapper">
        <div class = "book-appointment">
            <button class = "profile-button" id = "myBtn">
                <lord-icon
                        src="https://cdn.lordicon.com/kbtmbyzy.json"
                        trigger="hover"
                        colors="primary:#ffffff,secondary:#ffffff"
                        style="width:75px;height:75px">
                </lord-icon>
                <?php echo $lang['reserver']?></button>
        </div>

        <div class ="articles">
            <button class = "profile-button" id = "blogs">
                <lord-icon
                        src="https://cdn.lordicon.com/nocovwne.json"
                        trigger="hover"
                        colors="primary:#ffffff,secondary:#ffffff"
                        style="width:75px;height:75px">
                </lord-icon>
                <?php echo $lang['connect']?>
            </button>
        </div>

        <div class = "table">

            <button class = "profile-button" id = "appointment_button">
                <lord-icon
                        src="https://cdn.lordicon.com/mekvzgwx.json"
                        trigger="hover"
                        colors="primary:#ffffff,secondary:#ffffff"
                        style="width:75px;height:75px">
                </lord-icon>
                <?php echo $lang['verifiez']?>
            </button>
        </div>
    </div>

    <div class = "appointmentClass" id = "appointments">
        <br>
        <table border='1' id = 'appointment_table' class = "styled-table">
            <tr>
                <th>Nom</th>
                <th>Date</th>
                <th>Service</th>
                <th>Id</th>
            </tr>
            <?php
            $orm->getAppointments($email);
            ?>
        </table>
    </div>

</div>

<script src="assets/js/profile.js"></script>
<script src = "assets/js/header.js"></script>
</body>

</html>
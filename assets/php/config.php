<?php

    $_SESSION['lang'] = "en";

    if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
    {
        if ($_GET['lang'] == "en") $_SESSION['lang'] = "en";
        if ($_GET['lang'] == "fr") $_SESSION['lang'] = "fr";
    }

    require_once "assets/languages/".$_SESSION['lang'].".php";
?>

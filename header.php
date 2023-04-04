<?php

include "assets/php/config.php";

?>

<header>
    <nav  class="header">
        <div class="logo-container">
            <img src="/assets/img/medusa-logo.png" alt="Medusa logo">
        </div>

        <input type="checkbox" id="check" onchange="iconChange()">
        <label for="check" class="hamburger-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul class="nav-list">
            <?php
            if (isset($_SESSION['username']) && isset($_SESSION['lang']))
            {
                if ($_SESSION['lang'] == "en")
                {
                    echo "<li><a href='index.php?lang=en'>home</a></li>";
                    echo "<li> <a href='/profile.php?lang=en'>profile</a> </li>";
                    echo "<li><a href='mailto:example@example.com'>contact</a></li>";
                    echo "<li> <a href='/assets/php/logout.php'>log out</a> </li>";
                    echo "<li><a href='?lang=fr'>french</a> </li>";
                }
                if ($_SESSION['lang'] == "fr")
                {
                    echo "<li><a href='index.php?lang=fr'>accueil</a></li>";
                    echo "<li> <a href='/profile.php?lang=fr'>profile</a> </li>";
                    echo "<li><a href='mailto:example@example.com'>contact</a></li>";
                    echo "<li> <a href='/assets/php/logout.php'>log out</a> </li>";
                    echo "<li><a href='?lang=en'>anglais</a> </li>";
                }
            }
            else
            {
                if ($_SESSION['lang'] == "en")
                {
                    echo "<li><a href='/index.php?lang=en'>home</a></li>";
                    echo "<li><a href='mailto:example@example.com'>contact</a></li>";
                    echo "<li><a href='?lang=fr'>french</a> </li>";
                }
                if ($_SESSION['lang'] == "fr")
                {
                    echo "<li><a href='/index.php?lang=fr'>accueil</a></li>";
                    echo "<li><a href='mailto:example@example.com'>contact</a></li>";
                    echo "<li><a href='?lang=en'>anglais</a> </li>";
                }
            }
            ?>
        </ul>
    </nav>
</header>
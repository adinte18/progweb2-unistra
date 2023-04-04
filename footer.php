<?php
include "assets/php/config.php"
?>

<footer>
    <div>
        <div class="contact">
            <h4>Contact</h4>
            <div>
                <div>
                    <img src="/assets/img/emplacement.png" alt="Icône localisation">
                    <p>8 rue de Penthièvre<br>67100 Strasbourg</p>
                </div>
                <div>
                    <img src="/assets/img/iphone.png" alt="Icône localisation">
                    <a href="tel:01-23-45-67-89">01 23 45 67 89</a>
                </div>
                <div>
                    <img src="/assets/img/email.png" alt="Icône localisation">
                    <a href="mailto:example@example.com">example@example.com</a>
                </div>
            </div>
        </div>

        <div class="social-network">
            <h4>Suivez-nous</h4>
            <div>
                <a href="https://www.instagram.com/" target="_blank" rel="noreferrer noopener">
                    <img src="/assets/img/facebook.png" alt="Logo facebook">
                </a>
                <a href="https://www.facebook.com/" target="_blank" rel="noreferrer noopener">
                    <img src="/assets/img/instagram.png" alt="Logo instagram">
                </a>
            </div>
        </div>

        <div class="opening-hours">
            <h4>Nos horaires</h4>
            <div>
                <div>
                    <p><?php echo $lang['lundi']; ?></p>
                    <p>9h - 18h</p>
                </div>
                <div>
                    <p><?php echo $lang['mardi']; ?></p>
                    <p>9h - 18h</p>
                </div>
                <div>
                    <p><?php echo $lang['mercredi']; ?></p>
                    <p>9h - 18h</p>
                </div>
                <div>
                    <p><?php echo $lang['jeudi']; ?></p>
                    <p>9h - 18h</p>
                </div>
                <div>
                    <p><?php echo $lang['vendredi']; ?></p>
                    <p>9h - 18h</p>
                </div>
                <div>
                    <p><?php echo $lang['samedi']; ?></p>
                    <p>10h - 17h</p>
                </div>
                <div>
                    <p><?php echo $lang['dimanche']; ?></p>
                    <p>9h - 12h</p>
                </div>
            </div>
        </div>
    </div>


    <p>Copyright © 2021 MEDUSA | Réalisé par <a href="mailto:alexandru.dinte18@gmail.com">Dinte Alexandru</a></p>
</footer>

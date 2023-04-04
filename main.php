<?php

include "assets/php/config.php";

?>

<main>
    <section class="landing-img">
        <h1>MEDUSA</h1>
        <p>house of beauty</p>
        <a href="register.php">
            <?php echo $lang['reserver']; ?>
        </a>
    </section>

    <!-- Notre salon -->
    <section>
        <div class="section-title">
            <h2 class="title"><?php echo $lang['notre_salon']; ?></h2>
            <span></span>
        </div>
        <div class="salon-info">
            <img src="/assets/img/salon.jpg" alt="Medusa salon photo">
            <div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <a class="button" href="mailto:example@example.com">
            <?php echo $lang['contact']; ?>
        </a>
    </section>

    <!-- Nos préstations -->
    <section>
        <div class="container">
            <div class="prestations-img box">
            </div>
            <div class="section-title box stack-top">
                <h2 class="title">Nos préstations</h2>
                <span></span>
            </div>
        </div>

        <div class="services">
            <div>
                <img src="/assets/img/hairstyle.svg" alt="Icône femme">
                <h3><?php echo $lang['coiffure_femme']; ?></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <button class="button" onclick="window.location.href = 'register.php' ">
                    <?php echo $lang['reserver']; ?>
                </button>
            </div>

            <div>
                <img src="/assets/img/curly-hair.svg" alt="Icône enfant">
                <h3><?php echo $lang['coiffure_enfant']; ?></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <button class="button" onclick="window.location.href = 'register.php' ">
                    <?php echo $lang['reserver']; ?>
                </button>
            </div>

            <div>
                <img src="/assets/img/moustache.svg" alt="Icône homme">
                <h3><?php echo $lang['coiffure_homme']; ?></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <button class="button" onclick="window.location.href = 'register.php'">
                    <?php echo $lang['reserver']; ?>
                </button>
            </div>
        </div>

    </section>

    <!-- Les avis -->
    <section class="avis-img">
        <div class="section-title">
            <h2 class="title"><?php echo $lang['avis']; ?></h2>
            <span></span>
        </div>


        <div id="slider">
            <input type="radio" name="slider" id="slide1" checked>
            <input type="radio" name="slider" id="slide2">
            <input type="radio" name="slider" id="slide3">
            <input type="radio" name="slider" id="slide4">
            <div id="slides">
                <p class="quote-top">“</p>
                <div id="overflow">
                    <div class="inner">
                        <div class="slide slide_1">
                            <div class="slide-content">
                                <p class="avis">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p class="username">François</p>
                            </div>
                        </div>
                        <div class="slide slide_2">
                            <div class="slide-content">
                                <p class="avis">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p class="username">Christelle</p>
                            </div>
                        </div>
                        <div class="slide slide_3">
                            <div class="slide-content">
                                <p class="avis">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p class="username">Marion</p>
                            </div>
                        </div>
                        <div class="slide slide_4">
                            <div class="slide-content">
                                <p class="avis">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p class="username">Constance</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="quote-bottom">”</p>
            </div>
            <div id="controls">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
            <div id="bullets">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
        </div>
    </section>

    <section class = "blog-affichage">
        <div class = "blog-title">
            <h2 class="title">Blogs</h2>
            <span></span>
        </div>
        <div class="blogs" id="blog_div"></div>
    </section>
</main>
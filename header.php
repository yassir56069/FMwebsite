<?php

session_start();


// pages



?>

<nav class="navbar-container">
    <div class="navigation-bar" >
        <img class="logo" src="assets/FM_logo.png" onclick="window.location.href='home.php'" alt="Fantastic Mind Logo">
        <ul class="page-link-box ">
        <?php

            $about_us       = 'about_us.php';
            $services       = 'services.php';
            $iot_solution   = 'iot_solution.php';
            $rnd_usecase    = 'r&d_use_case.php';

            echo '<li>';
            echo "<a  class='page-link' href='{$about_us}'>about us</a>";
            echo '</li>';
            echo '<li>';
            echo "<a class='page-link' href='{$services}'>services</a>";
            echo '';
            echo '</li>';
            echo '<li>';
            echo "<a class='page-link' href='{$iot_solution}'>iot solution</a>";
            echo '';
            echo '</li>';
            echo '<li>';
            echo "<a class='page-link' href='{$iot_solution}'>research & design</a>";
            echo '</li>';
        ?>
        </ul>
        <button class="o-btn nav-button">Contact Us</button>
    </div>
    
    <section class="megamenu">
            TEST 
    </section>
</nav>


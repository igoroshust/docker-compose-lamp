<?php

/* Ассоциативный массив с ссылками на навигацию */
$navLinks = [
    "Projects" => "/index.php",
    "Skills" => "/skills.php",
    "Contacts" => "/contacts.php"
];


?>
    
    
    <nav class="nav">
        <div class="container">
            <div class="nav-row">
                <a href="./index.php" class="logo"><strong>Freelancer</strong> portfolio</a>

                <button class="night-mode-btn">
                    <img src="./img/nightmode/Sun.svg" class="night-mode-btn__icon" alt="Sun icon">
                    <img src="./img/nightmode/Moon.svg" class="night-mode-btn__icon" alt="Moon icon">
                </button>

                <ul class="nav-list">

                <?php foreach($navLinks as $title => $link):

                    $className = "nav-list__link";
                    if ($_SERVER['REQUEST_URI'] == $link) $className .= " nav-list__link--active";

                ?>

                    <li class="nav-list__item">
                        <a href="<?=HOST. $link ?>" class="<?= $className?>">
                            <?= $title ?>
                        </a>
                    </li>

                <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </nav>
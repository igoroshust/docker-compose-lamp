<?php

    require("config.php");

    $page_title = "Contacts";

    include(ROOT . 'templates/head.tpl');

    include(ROOT . 'templates/nav.tpl');

?>

    <main class="section">
        <div class="container">
            <h1 class="title-1">Contacts</h1>


            <ul class="content-list">
                <li class="content-list__item">
                    <h2 class="title-2">Location</h2>
                    <p>Moscow, Russia</p>
                </li>
                <li class="content-list__item">
                    <h2 class="title-2">Telegram / WhatsApp</h2>
                    <p><a href="tel:+79051234567">+7 (924) 372-11-10</a></p>
                </li>
                <li class="content-list__item">
                    <h2 class="title-2">Email</h2>
                    <p><a href="mailto:igoroshust@yandex.ru">igoroshust@yandex.ru</a></p>
                </li>
            </ul>

        </div>
    </main>

<?php

    include(ROOT . 'templates/footer.tpl');

?>
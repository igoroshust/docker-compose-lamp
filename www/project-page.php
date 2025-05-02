<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Подключаем стили -->
    <link rel="stylesheet" href="./css/main.css" type="text/css">

    <!-- Подключаем скрипты -->
    <script defer src="./js/main.js"></script>

    <title>Project Page</title>
</head>
<body>

    <nav class="nav">
        <div class="container">
            <div class="nav-row">
                <a href="./index.html" class="logo"><strong>Freelancer</strong> portfolio</a>

                <button class="night-mode-btn">
                    <img src="./img/nightmode/Sun.svg" class="night-mode-btn__icon" alt="Sun icon">
                    <img src="./img/nightmode/Moon.svg" class="night-mode-btn__icon" alt="Moon icon">
                </button>

                <ul class="nav-list">
                    <li class="nav-list__item"><a class="nav-list__link nav-list__link--active" href="./index.html">Projects</a></li>
                    <li class="nav-list__item"><a class="nav-list__link" href="./skills.html">Skills</a></li>
                    <li class="nav-list__item"><a class="nav-list__link" href="./contacts.html">Contacts</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="section">
        <div class="container">
            <div class="project-details">
                <h1 class="title-1">Gaming streaming portal</h1>

                <img src="./img/page/01-big.jpg" alt="Gaming streaming portal" class="project-details__cover">

                <div class="project-details__desc">
                    <p>Skills: React, Node.js, MongoDB</p>
                </div>

                <a href="#!" class="btn-outline" role="button">
                    <img src="./img/projects/git.png" alt="github repo">
                    GitHub repo
                </a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper"> <!-- Отступы для блока -->
                <ul class="social">
                    <li class="social__item"><a href="#!"><img src="./img/socials/vk.svg" alt="Vkontakte"></a></li>
                    <li class="social__item"><a href="#!"><img src="./img/socials/instagram.svg" alt="Instagram"></a></li>
                    <li class="social__item"><a href="#!"><img src="./img/socials/twitter.svg" alt="Twitter"></a></li>
                    <li class="social__item"><a href="#!"><img src="./img/socials/gitHub.svg" alt="GitHub"></a></li>
                    <li class="social__item"><a href="#!"><img src="./img/socials/linkedIn.svg" alt="LinkedIn"></a></li>
                </ul>
                <div class="copyright">
                    <p>© 2025 frontend-dev.com</p>
                </div>
            </div>

        </div>
    </footer>

</body>
</html>
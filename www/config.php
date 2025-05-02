<?php

// Физический путь на сервере к папке с доменом (определяем физический путь к файлам на сервере)
define('ROOT', dirname(__FILE__) . '/'); /* /var/www/html/ */

// Домен сайта (путь к сайту)
define('HOST', 'http://' . $_SERVER['HTTP_HOST']); /* http://localhost:443/ */


?>
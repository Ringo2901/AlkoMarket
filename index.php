<?php
// подгружаем и активируем авто-загрузчик Twig-а
require_once 'vendor/autoload.php';
Twig_Autoloader::register();

try {
    // указывае где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');

    // инициализируем Twig
    $twig = new Twig_Environment($loader);

    // подгружаем шаблон
    $template = $twig->loadTemplate('thanks.tmpl');

    // передаём в шаблон переменные и значения
    // выводим сформированное содержание
    echo $twig->render('base.html.twig');

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
?>
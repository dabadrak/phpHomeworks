<?php
$title = "Главная страница - страница обо мне";
$h1 = "Информация обо мне";
$year = 2019;
$img = "<img src='plane.jpg' alt='самолёт'>";

$template = file_get_contents("site.tpl");

$template = str_replace("{{TITLE}}", $title, $template);
$template = str_replace("{{H1}}", $h1, $template);
$template = str_replace("{{IMG}}", $img, $template);
$template = str_replace("{{YEAR}}", $year, $template);

echo $template;
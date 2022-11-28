<?php

declare(strict_types=1);

require_once('autoload.php');

use Object\Technics\Transport\AutoToyota;
use Object\Human\StudentWeb;
use Object\Technics\Appliances\TvHome;

echo "Домашняя работа по теме 'Понятие класса и объекта'(Второе и третье задание в одном проекте) \n" . "\n";
//Студент
$student = new StudentWeb(15, 'Валерий', 'Соколов');
$student->setAge(35);
StudentWeb::setCourse('Продвинутый PHP');

echo "--Информация о студенте-- \n";
echo "Имя: $student->name \n";
echo "Фамилия: $student->surname \n";
echo "Возраст: $student->age \n";
echo 'Курс: ' . $student->getCourse() . "\n";
echo 'Профессия: ' . StudentWeb::PROFESSION . "\n" . "\n";

echo "------------------- \n" . "\n";
//Авто
$auto1 = new AutoToyota(2020, 'Camry', 'Red');
$auto2 = new AutoToyota(2015, 'Corolla', 'Black');

$arrAuto = [];

array_unshift($arrAuto, $auto1, $auto2);

foreach ($arrAuto as $elem) {
    echo '--Информация о ' . AutoToyota::MODEL . " " . $elem->mark . "-- \n";
    echo 'Модель: ' . AutoToyota::MODEL . "\n";
    echo "Год выпуска: $elem->yearRelease \n";
    echo "Марка: $elem->mark \n";
    echo "Цвет: $elem->color \n" . "\n";
}
echo "------------------- \n" . "\n";
//Телевизор
$tv1 = new TvHome(108, 'LG', 50000);
$arrTv = [];
array_unshift($arrTv, $tv1);
$tv2 = new TvHome(52, 'Samsung', 25000);
array_unshift($arrTv, $tv2);

foreach ($arrTv as $elem) {
    echo '--Информация о ' . TvHome::NAME . "-- \n";
    echo 'Назначение: ' . $elem->getPurpose() . "\n";
    echo "Модель: $elem->model \n";
    echo "Диагональ: $elem->diagonal \n";
    echo "Цена: $elem->rate руб. \n";
    echo "\n";
}


// Подклоючение без автозагрузчика
//include_once 'Object/Human/StudentWeb.php';
//include_once 'Object/Technics/Transport/AutoToyota.php';
//include_once 'Object/Technics/Appliances/TvHome.php';
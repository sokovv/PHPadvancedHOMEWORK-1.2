<?php

declare(strict_types=1);

class AutoToyota
{
    public int $yearRelease;
    public string $mark;
    public string $color;
    public const MODEL = 'Toyota';

    public function __construct(int $yearRelease, string $mark, string $color)
    {
        $this->yearRelease = $yearRelease;
        $this->mark = $mark;
        $this->color = $color;
    }
}

$auto1 = new AutoToyota(2020, 'Camry', 'Red');
$auto2 = new AutoToyota(2015, 'Corolla', 'Black');

$arrAuto = [];

array_unshift($arrAuto, $auto1, $auto2);

foreach ($arrAuto as $elem) {
    echo '--Информация о ' . AutoToyota::MODEL . " " . $elem->mark . "-- \n";
    echo 'Модель: ' . AutoToyota::MODEL . "\n";
    echo "Год выпуска: $elem->yearRelease \n";
    echo "Марка: $elem->mark \n";
    echo "Цвет: $elem->color \n";
}








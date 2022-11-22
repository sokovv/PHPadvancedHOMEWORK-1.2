<?php

declare(strict_types=1);

class TvHome
{
    public int $diagonal;
    public int $rate;
    public string $model;
    public static string $purpose= 'Домашний';
    public const NAME = 'Телевизор';

    public function __construct(int $diagonal, string $model,  int $rate)
    {
        $this->diagonal = $diagonal;
        $this->model = $model;
        $this->rate = $rate;
    }

    public static function setPurpose(string $name): void
    {
        self::$purpose = $name;
    }

    public function getPurpose(): string
    {
        return self::$purpose;
    }

}

$tv1 = new TvHome(108, 'LG', 50000);

$arrTv = [];

array_unshift($arrTv, $tv1);

$tv2 = new TvHome(52, 'Samsung', 25000);

array_unshift($arrTv, $tv2);

foreach ($arrTv  as $elem) {
    echo '--Информация о ' . TvHome::NAME . "-- \n";
    echo 'Назначение: ' . $elem->getPurpose() . "\n";
    echo "Модель: $elem->model \n";
    echo "Диагональ: $elem->diagonal \n";
    echo "Цена: $elem->rate руб. \n";
    echo "\n";
}






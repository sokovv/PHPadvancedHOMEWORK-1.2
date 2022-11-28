<?php

declare(strict_types=1);

namespace  Object\Technics\Appliances;

class TvHome
{
    public int $diagonal;
    public int $rate;
    public string $model;
    public static string $purpose = 'Домашний';
    public const NAME = 'Телевизор';

    public function __construct(int $diagonal, string $model, int $rate)
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







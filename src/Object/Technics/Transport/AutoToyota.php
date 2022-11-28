<?php

declare(strict_types=1);

namespace Object\Technics\Transport;

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






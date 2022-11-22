<?php

declare(strict_types=1);

class StudentWeb
{
    public int $age;
    public string $name;
    public string $surname;
    public static string $course = 'Основы PHP';
    public const PROFESSION = 'Web-разработчик';

    public function __construct(int $age, string $name, string $surname)
    {
        $this->age = $age;
        $this->name = $name;
        $this->surname = $surname;
    }

    public static function setCourse(string $name): void
    {
        self::$course = $name;
    }

    public function getCourse(): string
    {
        return self::$course;
    }

    public function setAge(int $age): void
    {
        if ($age > 0) {
            $this->age = $age;
        }
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

$student = new StudentWeb(15, 'Валерий', 'Соколов');
$student->setAge(35);
StudentWeb::setCourse('Продвинутый PHP');

echo "--Информация о студенте-- \n";
echo "Имя: $student->name \n";
echo "Фамилия: $student->surname \n";
echo "Возраст: $student->age \n";
echo 'Курс: ' . $student->getCourse() . "\n";
echo 'Профессия: ' . StudentWeb::PROFESSION;




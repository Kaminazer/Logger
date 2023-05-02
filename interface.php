<?php

// Абстрактный класс может иметь свойства и реализованные методы
abstract class Animal
{
    protected $age;

    public function sayHello()
    {
        return 'I am ' . $this->age . ' old';
    }

    abstract protected function maxSpeed(): int;
}

// Интерфейс - описывает только поведение (или способ взаимодействия если быть точнее)
// Это полностью абстрактный класс - он не может содержать свойств и реализованных методов
interface MovableInterface
{
    // Методы интерфейса не могут иметь других модификаторов доступа кроме public
    public function move();
}

class Cat extends Animal implements MovableInterface
{
    // Реализация абстрактного метода
    protected function maxSpeed(): int
    {
        return 20;
    }

    // Реализация интерфейса
    public function move()
    {
        return 'I am running';
    }
}

$cat = new Cat();
manage($cat);

// Другой класс (из другой иерархии наследования), реализующий тот же интерфейс
class Guard implements MovableInterface
{
    public function move()
    {
        return 'I am going';
    }
}

$guard = new Guard();
manage($guard);



// Подсистема обрабатывает всех, реализующих интерфейс MovableInterface
function manage(MovableInterface $movable)
{
    echo $movable->move() . PHP_EOL;
}

$result = $cat instanceof MovableInterface;
var_dump($result);

// Отношение is A - Cat являєтся Animal
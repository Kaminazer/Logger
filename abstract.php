<?php

abstract class Animals
{
    protected $age;

    public function sayHello()
    {
        return 'I am ' . $this->age . ' old';
    }

    // Абстрактный метод без реализации - только сигнатура
    abstract public function move();
}

class Dog extends Animals
{
    public function move()
    {
        return 'I am running';
    }
}

class Fish extends Animals
{
    // Реализация абстрактного метода
    public function move()
    {
        return 'I am swimming';
    }
}

// $animal = new Animal(); // Так нельзя
$dog = new Dog();
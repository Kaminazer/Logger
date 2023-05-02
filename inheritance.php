<?php

class Animal
{
    public $age;

    public function sayHello()
    {
        echo 'I am animal. I am ' . $this->age . ' years old' . PHP_EOL;
    }
}

class Beast extends Animal
{
    public $coundOfTeeth;

    public function howMuch()
    {
        echo 'I have ' . $this->coundOfTeeth . PHP_EOL;
    }
}

class Dog extends Beast
{
    public $countOfPaws;

    // Переопределение родительского метода - Override
    public function howMuch(string $what = '')
    {
        echo 'I have ' . $this->countOfPaws . ' paws' . PHP_EOL;
    }

    public function changeCountOfPaws($count)
    {
        $this->countOfPaws = $count;
    }
}

$dog = new Dog();
// Класс Dog наследовал свойство от одного из предков
$dog->age = 5;
// Класс Dog наследовал свойство от другого предков
$dog->coundOfTeeth = 20;
// Свое собственное свойство класса Dog
$dog->countOfPaws = 4;

echo $dog->age . PHP_EOL;

// Класс Dog наследовал метод от одного из предков
$dog->sayHello();
// Вызов переопределенного метода - вызывается тот метод, который ближе к данному классу
$dog->howMuch();

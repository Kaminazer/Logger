<?php

class Animal
{
    public function move()
    {
        return 'I am moving';
    }
}

class Dog extends Animal
{
    protected $paws;

    public function __construct($paws)
    {
        $this->paws = $paws;
    }

    public function move()
    {
        return 'I am running with ' . $this->paws . ' paws';
    }
}

class Fish extends Animal
{
    public function move()
    {
        return 'I am swimming';
    }
}

class Bird extends Animal
{
    protected $winds;

    public function __construct($winds)
    {
        $this->winds = $winds;
    }

    public function move()
    {
        return 'I am flying using its ' . $this->winds . ' winds';
    }
}

$animals = [
    new Dog(4),
    new Bird(1000),
    new Fish()
];

foreach ($animals as $animal) {
    manage($animal);
}

// Сложная подсистема
// Написали заранее
function manage(Animal $animal)
{
    echo $animal->move() . PHP_EOL;
}
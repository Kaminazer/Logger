<?php

class User
{
    public $name;

    public $age;

    public $gender;

    public function __construct(string $name, int $age, string $gender = 'male')
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function __destruct()
    {
        echo 'Destructor is running' . PHP_EOL;
    }

    public function introduce()
    {
        echo 'Hello.' . PHP_EOL;
        $this->sayName();
        $this->sayAge();
    }

    public function sayName()
    {
        echo 'My name is ' . $this->name . PHP_EOL;
    }

    public function sayAge()
    {
        echo 'I am ' . $this->age . ' years old' . PHP_EOL;
    }
}

// обьект = экземпляр класса = instance
$user1 = new User('John', 20);

echo $user1->name . PHP_EOL;






















//$user1->introduce();


/*$user2 = new User();
$user2->name = 'Petro';
$user2->age = 40;*/
//$user2->introduce();

/*$users = [
    $user1,
    $user2
];
echo $users[0]->age . PHP_EOL;*/
// some code

//echo 'Пользователь ' . $user->name . ', возраст ' . $user->age;
//echo PHP_EOL;

/*var_dump($user1);
var_dump($user2);*/

<?php

namespace itea\vehicle\sportCars\company;

class Lamborgini
{
    protected string $model = "Lamborgini F-120";
    public function showModel()
    {
        echo $this->model.PHP_EOL;
    }
}
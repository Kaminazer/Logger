<?php

namespace itea\vehicle\sportCars;

class Ferrari
{
    protected string $model = "Ferrari G-200";
    public function showModel()
    {
        echo $this->model.PHP_EOL;
    }
}
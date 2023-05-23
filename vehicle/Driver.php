<?php

namespace itea\vehicle;

class Driver
{
    public function drive (MovableInterface $movable)
    {
       return $movable->start();
    }
}
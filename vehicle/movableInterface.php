<?php
 namespace itea\vehicle;
 interface movableInterface
{
    public function start();
    public function stop();
    public function up(int $unit);
    public function down(int $unit);
}
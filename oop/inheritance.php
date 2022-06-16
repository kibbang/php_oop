<?php

class Animal
{
    public function run()
    {
        print('running...<br>');
    }

    public function breathe()
    {
        print('breathing...<br>');
    }
}

$animal = new Animal();
$animal->run();
$animal->breathe();

class Human extends Animal
{
    public function think()
    {
        print('think...<br>');
    }

    public function talk()
    {
        print('talk...<br>');
    }
}

$hu = new Human();
$hu->run();
$hu->talk();
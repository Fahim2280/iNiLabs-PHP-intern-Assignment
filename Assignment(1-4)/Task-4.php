<?php
class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function makeSound()
    {
        return "The {$this->name} makes a sound.";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        return "The {$this->name} barks.";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        return "The {$this->name} meows.";
    }
}

class Cow extends Animal
{
    public function makeSound()
    {
        return "The {$this->name} mooes.";
    }
}

$dog = new Dog('Dog');
$cat = new Cat('Cat');
$cow = new Cow('Cow');

$animals = [$dog, $cat, $cow];

foreach ($animals as $animal) {
    echo $animal->makeSound() . "<br>";
}

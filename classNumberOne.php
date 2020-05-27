<?php

/*¿Por qué necesitamos clases y objetos?*/
class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person1 = new Person('Johan', 'Freitez');

$person2 = new Person('Mariannys', 'Aguilera');

echo "Hello, my name is {$person1->fullName()}, and my wife es  {$person2->fullName()}.";

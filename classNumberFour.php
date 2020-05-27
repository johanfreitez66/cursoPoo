<?php

define('DEBUG', true);
error_reporting(E_ALL);
ini_set('display_errors', DEBUG ? 'On' : 'Off');

function show($menssage)
{
    echo "<p>{$menssage}</p>";
}

abstract class Unit {
    protected $hp = 20;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        parent::__construct()
    }

    public function takeDamage($damage)
    {
        $this->setHp($this->hp - $damage);

        if ($this->hp <= 0) {
            $this->die();
        }
    }
    public function die()
    {
        show("{$this->name} Muere");
    }
    private function setHp($points)
    {
        $this->hp = $points;
        show("{$this->name} now you have {$this->hp} life points");
    }
    public function move($direction)
    {
        show("{$this->name} camina hacia $direction");
    }
    abstract public function attack(Unit $opponent);
}

class Soldier extends Unit
{
    protected $damage = 40;

    public function attack(Unit $opponent)
    {
        show("{$this->name} short a {$opponent->getName()} in two Parts.");
        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        return parent::takeDamage($damage / 2);
    }
}

class Archer extends Unit
{
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
       show("{$this->name} shoot an arrow {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        if (rand(0, 1)) {
            return parent::takeDamage($damage);
        }
    }
}
$mariannys=  new Soldier('Mariannys');

$gamerOne = new Archer('Johan');

$gamerOne->move('el centro');

$gamerOne->attack($mariannys);

$mariannys->attack($gamerOne);


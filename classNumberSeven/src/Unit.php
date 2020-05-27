<?php

namespace Game;


abstract class Unit
{
    protected $hp = 40;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function move($direction)
    {
        show("{$this->name} camina hacia $direction");
    }

    abstract public function attack(Unit $opponent);

    public function takeDamage($damage)
    {
        $this->hp = $this->hp - $this->absorbDamage($damage);


        if ($this->hp <= 0) {
            $this->die();
            exit();
        }
        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    }

    public function die()
    {
        show("{$this->name} ha Muerto");

        exit();
    }

    protected function absorbDamage($damage)
    {
        return $damage;
    }
}

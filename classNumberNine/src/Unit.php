<?php

namespace Game;

class Unit
{
    protected $hp = 40;
    protected $name;
    protected $weapon;
    protected $armor;

    public function __construct($name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
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

    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();

        show($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack)
    {
        $this->hp = $this->hp - $this->armor->absorbDamage($attack);


        if ($this->hp <= 0) {
            $this->die();
        }
        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    }

    public function die()
    {
        show("{$this->name} muere");

        exit();
    }

    protected function absorbDamage(Attack $attack)
    {
        if ($this->armor) {
            return $this->armor->absorbDamage($attack);
        }

        return $attack->getDamage();
    }
}

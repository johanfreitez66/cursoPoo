<?php
define('DEBUG', true);
error_reporting(E_ALL);
ini_set('display_errors', DEBUG ? 'On' : 'Off');

/*
 * POLIMORFIRMO, IMPLEMENTACIONES, INTERFACES
 */
function show($message)
{
    echo "<p>$message</p>";
}

abstract class Unit {
    protected $hp = 40;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
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
        show("{$this->name} ha muerto");

        exit();
    }

    protected function absorbDamage($damage)
    {
        return $damage;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }
}

class Soldier extends Unit
{
    protected $damage = 40;
    protected $armor;

    public function __construct($name)
    {
        parent::__construct($name);
    }



    public function attack(Unit $opponent)
    {
        show(
            "{$this->name} ataca con la espada a {$opponent->getName()}"
        );

        $opponent->takeDamage($this->damage);
    }

    protected function absorbDamage($damage)
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}

class Archer extends Unit
{
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show(
            "{$this->name} dispara una flecha a {$opponent->getName()}"
        );

        $opponent->takeDamage($this->damage);
    }
}

interface Armor
{
    public function absorbDamage($damage);
}

class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}

class SilverArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 4;
    }
}

class CursedArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage * 2;
    }
}

$armor = new BronzeArmor();

$johan= new Soldier('Johan');

$mariannys = new Archer('Mariannys');

$johan->move('el norte');

$mariannys->attack($johan);

$johan->setArmor(new CursedArmor);
//$johan->setArmor(new BronzeArmor);
$mariannys->setArmor(new SilverArmor);


$mariannys->attack($johan);
$johan->attack($mariannys);

/*
 * Polimorfismo: muchas formas (sordado, armaduras)
 * un sordado siempre va a hacer un sordado pero puede o no tener un armadura,
 * la armadura puede ser de diferente tipos.
 * */
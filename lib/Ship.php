<?php

class Ship
{
    public $name;

    public $weapon_power = 0;

    public $jedi_factor = 0;

    public $strength = 0;

    public function sayHello()
    {
        echo 'Hello';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs($useShortForm = false)
    {
        if ($useShortForm) {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weapon_power,
                $this->jedi_factor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s/j:%s/s:%s',
                $this->name,
                $this->weapon_power,
                $this->jedi_factor,
                $this->strength
            );
        }
    }

    public function doesGivenShipHasMoreStrenght($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }
}
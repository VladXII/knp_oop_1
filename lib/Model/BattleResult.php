<?php

class BattleResult
{
    private $usedJediPowers;

    private $winningShip;

    private $losingShip;

    public function __construct($usedJediPowers, AbstractShip $winningShip = null, AbstractShip $losingShip= null)
    {
        $this->usedJediPowers = $usedJediPowers;

        $this->winningShip = $winningShip;

        $this->losingShip = $losingShip;
    }

    /**
     * @return boolean
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    /**
     * @return AbstractShip/Null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @return AbstractShip/Null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

     public function isThereAWinner()
     {
         return $this->getWinningShip() !== null;
     }
}
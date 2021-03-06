<?php

class Container
{
    private $configuration;

    private $pdo;

    private $shipLoader;

    private $shipStorage;

    private $battleManager;

    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return PDO
     */
    public function getPDO()
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                $this->configuration['db_Dns'],
                $this->configuration['db_User'],
                $this->configuration['db_Pass']
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->pdo;
    }

    /**
     * @return ShipLoader
     */

    public function getShipLoader()
    {
        if ($this->shipLoader === null) {
            $this->shipLoader = new ShipLoader($this->getShipsStorage());
        }

        return $this->shipLoader;
    }

    /**
     * @return ShipStorageInterface
     *
     */

    public function getShipsStorage()
    {
        if ($this->shipStorage === null) {
            //$this->shipStorage = new PdoShipStorage($this->getPDO());
            $this->shipStorage = new JsonFileShipStorage(__DIR__.'/../../resources/ships.json');
        }

        return $this->shipStorage;
    }

    public function getBattleManager()
    {
        if ($this->battleManager === null) {
            $this->battleManager = new BattleManager();
        }

        return $this->battleManager;
    }
}
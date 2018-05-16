<?php

class Container
{
    private $configuration;

    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return PDO
     */
    public function getPDO()
    {
        $pdo = new PDO(
            $this->configuration['db_Dns'],
            $this->configuration['db_User'],
            $this->configuration['db_Pass']
        );

        return $pdo;
    }
}
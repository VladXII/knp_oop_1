<?php

interface ShipStorageInterface
{
    /**
     * Returns an array of ships arrays with keys id, name, weaponPower, jediFactor, defence.
     * @return mixed
     */
    public function fetchAllShipsData();

    /**
     * @param $id
     * @return mixed
     */
    public function fetchSingleShipData($id);
}
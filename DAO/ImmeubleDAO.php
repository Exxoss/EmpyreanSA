<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 25/09/2016
 * Time: 11:23
 */
class ImmeubleDAO
{
    function __construct()
    {

    }

    function getImmeubleFribourg() {
        $DB = new DataBase();
        $Immeubles = array();

        $query = "SELECT * FROM Immeuble WHERE ImmeubleCity=1";

        $DBResult = $DB->DBrunner($query);

        while ($row = $DBResult->fetch()) {

            $Immeuble = new Immeuble();

            $Immeuble->setImmeubleAdress($row["ImmeubleAdress"]);
            $Immeuble->setImmeubleDescription($row["ImmeubleDescription"]);
            $Immeuble->setImmeubleFreeSlot($row["ImmeubleFreeSlot"]);
            $Immeuble->setImmeublePathImg($row["ImmeublePathImg"]);
            $Immeuble->setImmeubleLvl($row["ImmeubleLvl"]);
            $Immeuble->setTechId($row["TechId"]);

            array_push($Immeubles, $Immeuble);

        }

        return $Immeubles;
    }

    function getImmeubleVaud() {
        $DB = new DataBase();
        $Immeubles = array();

        $query = "SELECT * FROM Immeuble WHERE ImmeubleCity=2";

        $DBResult = $DB->DBrunner($query);

        while ($row = $DBResult->fetch()) {

            $Immeuble = new Immeuble();

            $Immeuble->setImmeubleAdress($row["ImmeubleAdress"]);
            $Immeuble->setImmeubleDescription($row["ImmeubleDescription"]);
            $Immeuble->setImmeubleFreeSlot($row["ImmeubleFreeSlot"]);
            $Immeuble->setImmeublePathImg($row["ImmeublePathImg"]);
            $Immeuble->setImmeubleLvl($row["ImmeubleLvl"]);
            $Immeuble->setTechId($row["TechId"]);

            array_push($Immeubles, $Immeuble);

        }

        return $Immeubles;
    }
    function getImmeubleAll() {
        $DB = new DataBase();
        $Immeubles = array();

        $query = "SELECT * FROM Immeuble";

        $DBResult = $DB->DBrunner($query);

        while ($row = $DBResult->fetch()) {

            $Immeuble = new Immeuble();

            $Immeuble->setImmeubleAdress($row["ImmeubleAdress"]);
            $Immeuble->setImmeubleDescription($row["ImmeubleDescription"]);
            $Immeuble->setImmeubleFreeSlot($row["ImmeubleFreeSlot"]);
            $Immeuble->setImmeublePathImg($row["ImmeublePathImg"]);
            $Immeuble->setImmeubleLvl($row["ImmeubleLvl"]);
            $Immeuble->setTechId($row["TechId"]);

            array_push($Immeubles, $Immeuble);

        }

        return $Immeubles;
    }

}
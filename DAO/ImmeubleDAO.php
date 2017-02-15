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

        $query = "SELECT * FROM Immeuble WHERE ImmeubleCity=1 ORDER BY ImmeubleFreeSlot ASC";

        $DBResult = $DB->DBrunner($query);

        while ($row = $DBResult->fetch()) {

            $Immeuble = new Immeuble();

            $Immeuble->setImmeubleId($row["ImmeubleId"]);
            $Immeuble->setImmeubleCity($row["ImmeubleCity"]);
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

        $query = "SELECT * FROM Immeuble WHERE ImmeubleCity=2 ORDER BY ImmeubleFreeSlot ASC";

        $DBResult = $DB->DBrunner($query);

        while ($row = $DBResult->fetch()) {

            $Immeuble = new Immeuble();

            $Immeuble->setImmeubleId($row["ImmeubleId"]);
            $Immeuble->setImmeubleCity($row["ImmeubleCity"]);
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

        $query = "SELECT * FROM Immeuble ORDER BY ImmeubleFreeSlot ASC";

        $DBResult = $DB->DBrunner($query);

        while ($row = $DBResult->fetch()) {

            $Immeuble = new Immeuble();

            $Immeuble->setImmeubleId($row["ImmeubleId"]);
            $Immeuble->setImmeubleCity($row["ImmeubleCity"]);
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

    function getImmeubleById($Id) {
        $DB = new DataBase();
        $Immeuble = new Immeuble();

        $query = "SELECT * FROM Immeuble WHERE ImmeubleId=".$Id;

        $DBResult = $DB->DBrunner($query);

        while ($row = $DBResult->fetch()) {

            $Immeuble->setImmeubleId($row["ImmeubleId"]);
            $Immeuble->setImmeubleCity($row["ImmeubleCity"]);
            $Immeuble->setImmeubleAdress($row["ImmeubleAdress"]);
            $Immeuble->setImmeubleDescription($row["ImmeubleDescription"]);
            $Immeuble->setImmeubleFreeSlot($row["ImmeubleFreeSlot"]);
            $Immeuble->setImmeublePathImg($row["ImmeublePathImg"]);
            $Immeuble->setImmeubleLvl($row["ImmeubleLvl"]);
            $Immeuble->setTechId($row["TechId"]);


        }

        return $Immeuble;
    }

}

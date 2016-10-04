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

        $query = "SELECT * FROM Immeuble WHERE ImmeubleCity=2";

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

        $query = "SELECT * FROM Immeuble";

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

    function updateImmeuble($Immeuble) {
        $DB = new DataBase();

        $query = "UPDATE Immeuble set ImmeubleCity='".$Immeuble->getImmeubleCity()."', ImmeubleAdress='".$Immeuble->getImmeubleAdress()."', ImmeubleDescription='".$Immeuble->getImmeubleDescription()."', ImmeubleFreeSlot='".$Immeuble->getImmeubleFreeSlot()."', ImmeublePathImg='".$Immeuble->getImmeublePathImg()."', ImmeubleLvl='".$Immeuble->getImmeubleLvl()."', TechId='".$Immeuble->getTechId()."'WHERE ImmeubleId=".$Immeuble->getImmeubleId();

        $DB->DBrunner($query);
    }

}
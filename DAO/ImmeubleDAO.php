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
        $Immeubles = [];

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

            $Immeubles->append($Immeuble);

        }

        return $Immeubles;
    }

}
<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 26/09/2016
 * Time: 15:37
 */
class TechDAO
{
    function __construct()
    {

    }

    function getTech() {
        $DB = new DataBase();
        $Techs = [];

        $query = "SELECT * FROM Tech";

        $DBResult = $DB->DBrunner($query);

        while ($row = $DBResult->fetch()) {

            $Tech = new Tech();

            $Tech->setTechId($row["TechId"]);
            $Tech->setTechName($row["TechName"]);
            $Tech->setTechAdress($row["TechAdress"]);
            $Tech->setTechPhoneNumber($row["TechPhoneNumber"]);

            $Techs->append($Tech);
        }

        return $Techs;
    }

}
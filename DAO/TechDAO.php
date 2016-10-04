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
        $Techs = array();

        $query = "SELECT * FROM Tech";

        $DBResult = $DB->DBrunner($query);

        while ($row = $DBResult->fetch()) {

            $Tech = new Tech();

            $Tech->setTechId($row["TechId"]);
            $Tech->setTechName($row["TechName"]);
            $Tech->setTechAdress($row["TechAdress"]);
            $Tech->setTechPhoneNumber($row["TechPhoneNumber"]);

            array_push($Techs, $Tech);
        }

        return $Techs;
    }

    function updateTech($Tech){

        $DB = new DataBase();

        $query = "UPDATE Tech set TechName='".$Tech->getTechName()."', TechAdress='".$Tech->getTechAdress()."', TechPhoneNumber='".$Tech->getTechPhoneNumber()." WHERE TechId = ".$Tech->getTechId();

        $DB->DBrunner($query);

    }

}
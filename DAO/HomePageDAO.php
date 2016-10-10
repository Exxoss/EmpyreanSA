<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 23/09/2016
 * Time: 16:20
 */
class HomePageDAO
{
    function __construct()
    {

    }

    function getHomeData(){
        $DB = new DataBase();
        $home = new Home();

        $query = "SELECT HomeFax, HomeInf, HomeMess, HomeTel FROM Home LIMIT 1";

        $DBResult = $DB->DBrunner($query);

        while ($row = $DBResult->fetch()) {
            $home->setHomeFax($row["HomeFax"]);
            $home->setHomeInf($row["HomeInf"]);
            $home->setHomeMess($row["HomeMess"]);
            $home->setHomeTel($row["HomeTel"]);
        }

        return $home;

    }
    function getAdminPwd() {
        $DB = new DataBase();
        $pwd = "";

        $query = "SELECT HomePwd FROM Home LIMIT 1";

        $DBResult = $DB->DBrunner($query);

        while ($row = $DBResult->fetch()) {
            $pwd = $row["HomePwd"];
        }

        return $pwd;
    }

}
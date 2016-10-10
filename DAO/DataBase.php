<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 23/09/2016
 * Time: 15:33
 */


class DataBase
{
    private $host = 'localhost'; // a remplacer par empyreansaangency.com.mysql avant push (host name hébergeur);
    private $user = 'root';//empyreansaangen
    private $pass = 'root';//aTPQufXz

    function __construct()
    {

    }

    function DBrunner ($query) {
        try {
            $base = new PDO('mysql:host='.$this->host.';dbname=empyreansaangen;charset=utf8', $this->user, $this->pass);
        }

        catch (PDOException $e) {
            echo $e->getMessage();
        }


        
        $result = $base->query($query);

        return $result;
    }

    function updateHomeData ($home) {
        try {
            $base = new PDO('mysql:host='.$this->host.';dbname=empyreansaangen;charset=utf8', $this->user, $this->pass);
        }

        catch (PDOException $e) {
            echo $e->getMessage();
        }

        $query = "UPDATE Home set HomeFax= :HomeFax , HomeInf= :HomeInf , HomeMess= :HomeMess , HomeTel= :HomeTel  WHERE HomeId = 1";

        $stmt = $base->prepare($query);
        $fax = $home->getHomeFax();
        $inf = $home->getHomeInf();
        $mess = $home->getHomeMess();
        $tel = $home->getHomeTel();

        $stmt->bindParam(':HomeFax', $fax, PDO::PARAM_STR);
        $stmt->bindParam(':HomeInf', $inf, PDO::PARAM_STR);
        $stmt->bindParam(':HomeMess', $mess, PDO::PARAM_STR);
        $stmt->bindParam(':HomeTel', $tel, PDO::PARAM_STR);

        $stmt->execute();

    }
}
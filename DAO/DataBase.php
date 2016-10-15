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

    function updateImmeubleOne ($Immeuble) {
        try {
            $base = new PDO('mysql:host='.$this->host.';dbname=empyreansaangen;charset=utf8', $this->user, $this->pass);
        }

        catch (PDOException $e) {
            echo $e->getMessage();
        }

        $query = "UPDATE Immeuble set ImmeubleCity= :ImmeubleCity, ImmeubleAdress= :ImmeubleAdress, ImmeubleDescription= :ImmeubleDescription, ImmeubleFreeSlot= :ImmeubleFreeSlot, ImmeublePathImg= :ImmeublePathImg, ImmeubleLvl= :ImmeubleLvl, TechId= :TechId WHERE ImmeubleId= :ImmeubleId";

        $stmt = $base->prepare($query);

        $city = $Immeuble->getImmeubleCity();
        $adress = $Immeuble->getImmeubleAdress();
        $description = $Immeuble->getImmeubleDescription();
        $freeSlot = $Immeuble->getImmeubleFreeSlot();
        $pathImg = $Immeuble->getImmeublePathImg();
        $lvl = $Immeuble->getImmeubleLvl();
        $techId = $Immeuble->getTechId();
        $id = $Immeuble->getImmeubleId();

        $stmt->bindParam(':ImmeubleCity', $city, PDO::PARAM_INT);
        $stmt->bindParam(':ImmeubleAdress', $adress, PDO::PARAM_STR);
        $stmt->bindParam(':ImmeubleDescription', $description, PDO::PARAM_STR);
        $stmt->bindParam(':ImmeubleFreeSlot', $freeSlot, PDO::PARAM_INT);
        $stmt->bindParam(':ImmeublePathImg', $pathImg, PDO::PARAM_STR);
        $stmt->bindParam(':ImmeubleLvl', $lvl, PDO::PARAM_INT);
        $stmt->bindParam(':TechId', $techId, PDO::PARAM_INT);
        $stmt->bindParam(':ImmeubleId', $id, PDO::PARAM_INT);

        $stmt->execute();

    }


}
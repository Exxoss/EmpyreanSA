localhost<?php

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

    function addImmeuble ($Immeuble) {
        try {
            $base = new PDO('mysql:host='.$this->host.';dbname=empyreansaangen;charset=utf8', $this->user, $this->pass);
        }

        catch (PDOException $e) {
            echo $e->getMessage();
        }

        $query = "INSERT INTO Immeuble (ImmeubleCity, ImmeubleAdress, ImmeubleDescription, ImmeubleFreeSlot, ImmeublePathImg, ImmeubleLvl, TechId) VALUES (:ImmeubleCity, :ImmeubleAdress, :ImmeubleDescription, :ImmeubleFreeSlot,:ImmeublePathImg, :ImmeubleLvl, :TechId)";

        $stmt = $base->prepare($query);

        $city = $Immeuble->getImmeubleCity();
        $adress = $Immeuble->getImmeubleAdress();
        $description = $Immeuble->getImmeubleDescription();
        $freeSlot = $Immeuble->getImmeubleFreeSlot();
        $pathImg = $Immeuble->getImmeublePathImg();
        $lvl = $Immeuble->getImmeubleLvl();
        $techId = $Immeuble->getTechId();

        $stmt->bindParam(':ImmeubleCity', $city, PDO::PARAM_INT);
        $stmt->bindParam(':ImmeubleAdress', $adress, PDO::PARAM_STR);
        $stmt->bindParam(':ImmeubleDescription', $description, PDO::PARAM_STR);
        $stmt->bindParam(':ImmeubleFreeSlot', $freeSlot, PDO::PARAM_INT);
        $stmt->bindParam(':ImmeublePathImg', $pathImg, PDO::PARAM_STR);
        $stmt->bindParam(':ImmeubleLvl', $lvl, PDO::PARAM_INT);
        $stmt->bindParam(':TechId', $techId, PDO::PARAM_INT);

        $stmt->execute();
    }

    function DelImmeuble ($id) {
        try {
            $base = new PDO('mysql:host='.$this->host.';dbname=empyreansaangen;charset=utf8', $this->user, $this->pass);
        }

        catch (PDOException $e) {
            echo $e->getMessage();
        }

        $query = "DELETE FROM Immeuble WHERE ImmeubleId= :ImmeubleId";

        $stmt = $base->prepare($query);

        $stmt->bindParam(':ImmeubleId', $id, PDO::PARAM_INT);

        $stmt->execute();
    }
    function updateRT($tech) {
        try {
            $base = new PDO('mysql:host='.$this->host.';dbname=empyreansaangen;charset=utf8', $this->user, $this->pass);
        }

        catch (PDOException $e) {
            echo $e->getMessage();
        }

        $query = "UPDATE Tech set TechName= :TechName, TechAdress= :TechAdress, TechPhoneNumber= :TechPhoneNumber WHERE TechId= :TechId";

        $stmt = $base->prepare($query);

        $name = $tech->getTechName();
        $adress = $tech->getTechAdress();
        $tel= $tech->getTechPhoneNumber();
        $id= $tech->getTechId();

        $stmt->bindParam(':TechName', $name, PDO::PARAM_STR);
        $stmt->bindParam(':TechAdress', $adress, PDO::PARAM_STR);
        $stmt->bindParam(':TechPhoneNumber', $tel, PDO::PARAM_STR);
        $stmt->bindParam(':TechId', $id, PDO::PARAM_INT);

        $stmt->execute();
    }

    function delRT($id) {
        try {
            $base = new PDO('mysql:host='.$this->host.';dbname=empyreansaangen;charset=utf8', $this->user, $this->pass);
        }

        catch (PDOException $e) {
            echo $e->getMessage();
        }
        $query = "DELETE FROM Tech WHERE TechId= :TechId";

        $stmt = $base->prepare($query);
        $stmt->bindParam(':TechId', $id, PDO::PARAM_INT);

        $stmt->execute();

        


    }
    function addRT($tech) {
        try {
            $base = new PDO('mysql:host='.$this->host.';dbname=empyreansaangen;charset=utf8', $this->user, $this->pass);
        }

        catch (PDOException $e) {
            echo $e->getMessage();
        }

        $query = "INSERT INTO Tech (TechName, TechAdress, TechPhoneNumber) VALUES (:TechName, :TechAdress, :TechPhoneNumber)";

        $stmt = $base->prepare($query);

        $name = $tech->getTechName();
        $adress = $tech->getTechAdress();
        $tel = $tech->getTechPhoneNumber();

        $stmt->bindParam(':TechName', $name, PDO::PARAM_STR);
        $stmt->bindParam(':TechAdress', $adress, PDO::PARAM_STR);
        $stmt->bindParam(':TechPhoneNumber', $tel, PDO::PARAM_STR);

        $stmt->execute();

    }


}
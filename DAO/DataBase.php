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
}
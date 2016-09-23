<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 23/09/2016
 * Time: 15:33
 */


class DataBase
{
    private $host = 'localhost'; // a remplacer par empyreansaangen avant push (host name hébergeur);
    private $user = 'root';
    private $pass = 'root';

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
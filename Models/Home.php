<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 23/09/2016
 * Time: 16:01
 */
class Home
{
    private $HomeFax;
    private $HomeId;
    private $HomeInf;
    private $HomeMess;
    private $HomePwd;
    private $HomeTel;

    /**
     * @return mixed
     */
    public function getHomeFax()
    {
        return $this->HomeFax;
    }

    /**
     * @param mixed $HomeFax
     */
    public function setHomeFax($HomeFax)
    {
        $this->HomeFax = $HomeFax;
    }

    /**
     * @return mixed
     */
    public function getHomeInf()
    {
        return $this->HomeInf;
    }

    /**
     * @param mixed $HomeInf
     */
    public function setHomeInf($HomeInf)
    {
        $this->HomeInf = $HomeInf;
    }

    /**
     * @return mixed
     */
    public function getHomeMess()
    {
        return $this->HomeMess;
    }

    /**
     * @param mixed $HomeMess
     */
    public function setHomeMess($HomeMess)
    {
        $this->HomeMess = $HomeMess;
    }

    /**
     * @return mixed
     */
    public function getHomePwd()
    {
        return $this->HomePwd;
    }

    /**
     * @param mixed $HomePwd
     */
    public function setHomePwd($HomePwd)
    {
        $this->HomePwd = $HomePwd;
    }

    /**
     * @return mixed
     */
    public function getHomeTel()
    {
        return $this->HomeTel;
    }

    /**
     * @param mixed $HomeTel
     */
    public function setHomeTel($HomeTel)
    {
        $this->HomeTel = $HomeTel;
    }

    /**
     * @return mixed
     */
    public function getHomeId()
    {
        return $this->HomeId;
    }

    /**
     * @param mixed $HomeId
     */
    public function setHomeId($HomeId)
    {
        $this->HomeId = $HomeId;
    }

    
}
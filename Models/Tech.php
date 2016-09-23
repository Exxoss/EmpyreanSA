<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 23/09/2016
 * Time: 16:12
 */
class Tech
{
    private $TechAdress;
    private $TechId;
    private $TechName;
    private $TechPhoneNumber;

    /**
     * @return mixed
     */
    public function getTechAdress()
    {
        return $this->TechAdress;
    }

    /**
     * @param mixed $TechAdress
     */
    public function setTechAdress($TechAdress)
    {
        $this->TechAdress = $TechAdress;
    }

    /**
     * @return mixed
     */
    public function getTechId()
    {
        return $this->TechId;
    }

    /**
     * @param mixed $TechId
     */
    public function setTechId($TechId)
    {
        $this->TechId = $TechId;
    }

    /**
     * @return mixed
     */
    public function getTechName()
    {
        return $this->TechName;
    }

    /**
     * @param mixed $TechName
     */
    public function setTechName($TechName)
    {
        $this->TechName = $TechName;
    }

    /**
     * @return mixed
     */
    public function getTechPhoneNumber()
    {
        return $this->TechPhoneNumber;
    }

    /**
     * @param mixed $TechPhoneNumber
     */
    public function setTechPhoneNumber($TechPhoneNumber)
    {
        $this->TechPhoneNumber = $TechPhoneNumber;
    }


}
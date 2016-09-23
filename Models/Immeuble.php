<?php

/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 23/09/2016
 * Time: 16:09
 */
class Immeuble
{
    private $ImmeubleAdress;
    private $ImmeubleCity;
    private $ImmeubleDescription;
    private $ImmeubleFreeSlot;
    private $ImmeubleId;
    private $ImmeublePathImg;
    private $ImmeubleLvl;
    private $TechId;

    /**
     * @return mixed
     */
    public function getImmeubleAdress()
    {
        return $this->ImmeubleAdress;
    }

    /**
     * @param mixed $ImmeubleAdress
     */
    public function setImmeubleAdress($ImmeubleAdress)
    {
        $this->ImmeubleAdress = $ImmeubleAdress;
    }

    /**
     * @return mixed
     */
    public function getImmeubleCity()
    {
        return $this->ImmeubleCity;
    }

    /**
     * @param mixed $ImmeubleCity
     */
    public function setImmeubleCity($ImmeubleCity)
    {
        $this->ImmeubleCity = $ImmeubleCity;
    }

    /**
     * @return mixed
     */
    public function getImmeubleDescription()
    {
        return $this->ImmeubleDescription;
    }

    /**
     * @param mixed $ImmeubleDescription
     */
    public function setImmeubleDescription($ImmeubleDescription)
    {
        $this->ImmeubleDescription = $ImmeubleDescription;
    }

    /**
     * @return mixed
     */
    public function getImmeubleFreeSlot()
    {
        return $this->ImmeubleFreeSlot;
    }

    /**
     * @param mixed $ImmeubleFreeSlot
     */
    public function setImmeubleFreeSlot($ImmeubleFreeSlot)
    {
        $this->ImmeubleFreeSlot = $ImmeubleFreeSlot;
    }

    /**
     * @return mixed
     */
    public function getImmeubleId()
    {
        return $this->ImmeubleId;
    }

    /**
     * @param mixed $ImmeubleId
     */
    public function setImmeubleId($ImmeubleId)
    {
        $this->ImmeubleId = $ImmeubleId;
    }

    /**
     * @return mixed
     */
    public function getImmeublePathImg()
    {
        return $this->ImmeublePathImg;
    }

    /**
     * @param mixed $ImmeublePathImg
     */
    public function setImmeublePathImg($ImmeublePathImg)
    {
        $this->ImmeublePathImg = $ImmeublePathImg;
    }

    /**
     * @return mixed
     */
    public function getImmeubleLvl()
    {
        return $this->ImmeubleLvl;
    }

    /**
     * @param mixed $ImmeubleLvl
     */
    public function setImmeubleLvl($ImmeubleLvl)
    {
        $this->ImmeubleLvl = $ImmeubleLvl;
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
    

}
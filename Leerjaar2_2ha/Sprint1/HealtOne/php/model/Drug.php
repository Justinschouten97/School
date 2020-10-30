<?php

namespace model;

class Drug{
    private $id;
    private $maker;
    private $name;
    private $compensated;
    private $side_effects;
    private $benefits;

    protected function __construct($id,$maker,$name,$compensated,$side_effects,$benefits){
        $this->id = $id;
        $this->maker = $maker;
        $this->name = $name;
        $this->compensated = $compensated;
        $this->side_effects = $side_effects;
        $this->benefits = $benefits;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getMaker()
    {
        return $this->maker;
    }

    /**
     * @param mixed $maker
     */
    public function setMaker($maker): void
    {
        $this->maker = $maker;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCompensated()
    {
        return $this->compensated;
    }

    /**
     * @param mixed $compensated
     */
    public function setCompensated($compensated): void
    {
        $this->compensated = $compensated;
    }

    /**
     * @return mixed
     */
    public function getSideEffects()
    {
        return $this->side_effects;
    }

    /**
     * @param mixed $side_effects
     */
    public function setSideEffects($side_effects): void
    {
        $this->side_effects = $side_effects;
    }

    /**
     * @return mixed
     */
    public function getBenefits()
    {
        return $this->benefits;
    }

    /**
     * @param mixed $benefits
     */
    public function setBenefits($benefits): void
    {
        $this->benefits = $benefits;
    }
}
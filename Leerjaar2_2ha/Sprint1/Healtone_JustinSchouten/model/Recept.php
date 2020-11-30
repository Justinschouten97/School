<?php

namespace model;

class Recept
{
    private $receptID;
    private $patientID;
    private $medicijnID;
    private $medicijnDosis;
    private $medicijnDuur;
    private $receptHerhalingen;
    private $receptUitgeschreven;
    private $receptOpgehaald;
    private $artsID;

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }
}
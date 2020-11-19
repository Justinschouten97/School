<?php

namespace model;

class Medicijn
{
    private $medicijnID;
    private $medicijnNaam;
    private $medicijnWerking;
    private $medicijnBijwerking;


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
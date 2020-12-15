<?php

namespace model;

class Arts
{
    private $artsID;
    private $voornaam;
    private $achternaam;
    private $soortarts;
    private $straat;
    private $postcode;
    private $plaats;
    private $email;
    private $telefoonnummer;

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
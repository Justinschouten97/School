<?php

namespace model;
use model\MedicatieDoos;
include_once("model/MedicatieDoos.php");

class Medicijn extends MedicatieDoos
{
    private $werking;
    private $bijwerking;



    public function __construct($id, $naam, $prijs, $werking , $bijwerking)
    {
        parent::__construct($id,$naam,$prijs);

        $this->werking = $werking;
        $this->bijwerking = $bijwerking;
    }

    /**
     * @return mixed
     */
    public function getWerking()
    {
        return $this->werking;
    }

    /**
     * @param mixed $werking
     */
    public function setWerking($werking): void
    {
        $this->werking = $werking;
    }

    /**
     * @return mixed
     */
    public function getBijwerking()
    {
        return $this->bijwerking;
    }

    /**
     * @param mixed $bijwerking
     */
    public function setBijwerking($bijwerking): void
    {
        $this->bijwerking = $bijwerking;
    }
}
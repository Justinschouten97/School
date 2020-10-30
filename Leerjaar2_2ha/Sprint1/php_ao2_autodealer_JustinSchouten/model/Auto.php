<?php

namespace model;
use model\Voertuig;
include_once("model/Voertuig.php");

class Auto extends Voertuig
{
    private $serieUitvoering;



    public function __construct($id, $naam, $prijs, $serieUitvoering)
    {
        parent::__construct($id,$naam,$prijs);

        $this->serieUitvoering = $serieUitvoering;
    }


    /**
     * @return mixed
     */
    public function getSerieUitvoering()
    {
        return $this->serieUitvoering;
    }

    /**
     * @param mixed $serieUitvoering
     */
    public function setSerieUitvoering($serieUitvoering): void
    {
        $this->serieUitvoering = $serieUitvoering;
    }
}
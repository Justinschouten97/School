<?php


namespace model;

use model\Voertuig;
include_once("model/Voertuig.php");

class Motor extends Voertuig
{
    private $modelUitvoering;



    public function __construct($id, $naam, $prijs, $modelUitvoering)
    {
        parent::__construct($id,$naam,$prijs);

        $this->modelUitvoering = $modelUitvoering;
    }

    /**
     * @return mixed
     */
    public function getModelUitvoering()
    {
        return $this->modelUitvoering;
    }

    /**
     * @param mixed $modelUitvoering
     */
    public function setModelUitvoering($modelUitvoering): void
    {
        $this->modelUitvoering = $modelUitvoering;
    }



}
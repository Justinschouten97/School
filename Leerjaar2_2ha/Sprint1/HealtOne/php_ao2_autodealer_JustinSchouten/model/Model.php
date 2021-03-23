<?php

namespace model;
use model\Auto as Koek;
include_once("model/Auto.php");
use model\Motor as Brood;
include_once("model/Motor.php");
include_once ("model/Aanbieding.php");

class Model implements Aanbieding
{
    private $content;
    private $artikel;
    private $aanbieding;
    private $einddatum;

    public function __construct(){
        $this->content = "Welkom bij de Auto Dealer";
        $this->setArtikel('1','BMW',150000.50 ,"stuk", "auto", 0);
    }
    /**
     * @return mixed
     */
    public function getArtikel()
    {
        return $this->artikel;
    }

    public function getContent(){
        return $this->content;
    }
    public function setArtikel ($id, $naam,$prijs, $extraEigenschap, $type, $aanbieding){
       switch($type)
       {
           case "motor":
               $artikel = new Motor($id, $naam, $prijs, $extraEigenschap);
               break;
           case "auto":
               $artikel = new Auto($id, $naam, $prijs, $extraEigenschap);
               break;
       }
        $this->artikel = $artikel;
       if($aanbieding == 1){
           $this->setAanbieding();
       }
    }
    public function setAanbieding()
    {
        $this->aanbieding = $this->artikel;
        $this->setEinddatum();
    }
    public function getAanbieding()
    {
        return $this->aanbieding;
    }

    public function setEinddatum()
    {
        date_default_timezone_set('Europe/Amsterdam');
        $this->einddatum  = date("j F  Y",  mktime(0, 0,
            0, date("m")  , date("d")+14, date("Y")));

    }

    public function getEinddatum()
    {
        return $this->einddatum;
    }


}
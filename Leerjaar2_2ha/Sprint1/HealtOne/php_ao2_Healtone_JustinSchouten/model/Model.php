<?php

namespace model;
use model\Medicijn as Medicijnen;
include_once("model/Medicijn.php");

include_once ("model/Aanbieding.php");

class Model implements Aanbieding
{
    private $content;
    private $artikel;
    private $aanbieding;
    private $einddatum;

    public function __construct(){
        $this->content = "Welkom bij de Medicijnen afdeling";
        $this->setArtikel('1','test',1 ,"test", "test", 0, 0);
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
    public function setArtikel ($id, $naam,$prijs, $werking, $bijwerking, $type, $aanbieding){
       switch($type)
       {
//           case "motor":
//               $artikel = new Motor($id, $naam, $prijs, $extraEigenschap);
//               break;
           case "medicijn":
               $artikel = new Medicijn($id, $naam, $prijs, $werking, $bijwerking);
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
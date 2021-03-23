<?php


namespace mvc;

use model\Koek as Koek;
include_once ("model/Koek.php");
use model\Brood as Brood;
include_once ("model/Brood.php");
include_once ("model/Aanbieding.php");


class model implements Aanbieding
{
    private $content;
    private $artikel;
    private $aanbieding;
    private $einddatum;

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
        date_default_timezone_set("Europe/Amsterdam");
        $this->einddatum = date("j F Y", mktime(0,0,
            0, date('m'),date("d")+14, date("Y")));
    }
    public function getEinddatum()
    {
        return $this->einddatum;
    }


    public function setArtikel($id, $naam, $prijs, $extraEigenschap, $type, $aanbieding)
    {
        switch ($type)
        {
            case "brood":
                $artikel = new Brood($id, $naam, $prijs, $extraEigenschap);
                break;
            case "koek":
                $artikel = new Koek($id, $naam, $prijs, $extraEigenschap);
                break;
        }
        $this->artikel = $artikel;
        if ($aanbieding == 1){
            $this->setAanbieding();
        }
    }
}
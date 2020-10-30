<?php

namespace view;
use model\Model;

class View
{
    private $model;
    private $content;

    public function __construct(Model $model){
        $this->model = $model;

        echo "<h2>".$this->model->getContent()."</h2>";
    }

    public function viewContent()
    {
        $this->content = $this->model->getContent();
        $artikel = $this->model->getArtikel();

//        echo "<p>";
//        var_dump(get_class($artikel));
//        echo "</p>";
        echo "<br /><br />Artikel is: " . $artikel->getNaam();

        if (get_class($artikel) == "model\Auto") {
            echo "<br />Prijs van de auto is: " . $artikel->getSerieUitvoering() . " is: &euro;  " . number_format($float = $artikel->getPrijs(), $decimals = 2, $dec_point = ",", $thousands_sep = ".");

        }
        if (get_class($artikel) == "model\Motor") {
            echo "<br />Prijs van de motor is: &euro;  " . number_format($float = $artikel->getPrijs(), $decimals = 2, $dec_point = ",", $thousands_sep = ".");
            echo"<br />De samenstelling is: ".$artikel->getModelUitvoering();
        }
    }
    public function viewSold(){

        if($this->model->getAanbieding() != NULL){
            echo "<h1>Het artikel in de aanbieding  is ".$this->model->getAanbieding()->getNaam()."</h1>";
            echo "<h2>De aanbieding loopt tot ".strtolower($this->model->getEinddatum())  ."</h2>";
        }
    }
}

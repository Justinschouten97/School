<?php


namespace mvc;


class view
{

    public function viewContent()
    {
        $this->content = $this->getContent();
        $artikel = $this->model->getArtikel();

//        echo "<p>";
//        var_dump(get_class($artikel));
//        echo "<p>";
        echo "<br /><br />Artikel is: ". $artikel->getNaam();

        if (get_class($artikel) == "model\Koek"){
            echo "<br />Prijs per ". $artikel->getVerpakking() . "is: &euro; ". number_format($float = $artikel->getPrijs(), $decimals = 2, $dec_point = ",", $thousands_sep = ".");
        }
        if (get_class($artikel) == "model\Brood"){
            echo "<br />Prijs per brood is: &euro; ". number_format($float = $artikel->getPrijs(), $decimals = 2, $dec_point = ",", $thousands_sep = ".");
            echo "<br >De samestelling is: ".$artikel->getSamenstelling();
        }
    }
}
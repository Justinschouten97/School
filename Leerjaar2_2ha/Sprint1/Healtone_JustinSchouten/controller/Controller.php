<?php

namespace controller;
include_once "view/View.php";
use view\View;
include "model/Model.php";
use model\Model;

class Controller
{
    private $view;
    private $model;
    public function __construct(){
        $this->model = new Model();
        $this->view = new View($this->model);
    }

    // patient
    public function readPatientenAction(){
        $this->view->showPatienten();
    }

    public function showFormPatientAction($id=null){
        $this->view->showFormPatienten($id);
    }
    public function createPatientAction(){
        $naam = filter_input(INPUT_POST,'naam');
        $adres = filter_input(INPUT_POST,'adres');
        $woonplaats = filter_input(INPUT_POST,'woonplaats');
        $geboortedatum = filter_input(INPUT_POST,'geboortedatum');
        $soortverzekering = filter_input(INPUT_POST,'soortverzekering');
        $zknummer = filter_input(INPUT_POST,'zknummer');
        $result = $this->model->insertPatient($naam,$adres,$woonplaats,$geboortedatum,$zknummer,$soortverzekering);
        $this->view->showPatienten($result);
    }
    public function updatePatientAction(){
        $id = filter_input(INPUT_POST,'id');
        $naam = filter_input(INPUT_POST,'naam');
        $adres = filter_input(INPUT_POST,'adres');
        $woonplaats = filter_input(INPUT_POST,'woonplaats');
        $geboortedatum = filter_input(INPUT_POST,'geboortedatum');
        $zknummer = filter_input(INPUT_POST,'zknummer');
        $soortverzekering = filter_input(INPUT_POST,'soortverzekering');
        $result = $this->model->updatePatient($id,$naam,$adres,$woonplaats,$geboortedatum,$zknummer,$soortverzekering);
        $this->view->showPatienten($result);
    }
    public function deletePatientAction($id){
        $result = $this->model->deletePatient($id);
        $this->view->showPatienten($result);
    }

    // arts
    public function readArtsenAction(){
        $this->view->showArtsen();
    }

    public function showFormArtsAction($artsID=null){
        $this->view->showFormArtsen($artsID);
    }
    public function createArtsAction(){
        $artsID = filter_input(INPUT_POST,'artsID');
        $voornaam = filter_input(INPUT_POST,'voornaam');
        $achternaam = filter_input(INPUT_POST,'achternaam');
        $soortarts = filter_input(INPUT_POST,'soortarts');
        $straat = filter_input(INPUT_POST,'straat');
        $postcode = filter_input(INPUT_POST,'postcode');
        $plaats = filter_input(INPUT_POST,'plaats');
        $email = filter_input(INPUT_POST,'email');
        $telefoonnummer = filter_input(INPUT_POST,'telefoonnummer');
        $result = $this->model->insertArts($artsID,$voornaam,$achternaam,$soortarts,$straat,$postcode,$plaats,$email,$telefoonnummer);
        $this->view->showArtsen($result);
    }
    public function updateArtsAction(){
        $artsID = filter_input(INPUT_POST,'artsID');
        $voornaam = filter_input(INPUT_POST,'voornaam');
        $achternaam = filter_input(INPUT_POST,'achternaam');
        $soortarts = filter_input(INPUT_POST,'soortarts');
        $straat = filter_input(INPUT_POST,'straat');
        $postcode = filter_input(INPUT_POST,'postcode');
        $plaats = filter_input(INPUT_POST,'plaats');
        $email = filter_input(INPUT_POST,'email');
        $telefoonnummer = filter_input(INPUT_POST,'telefoonnummer');
        $result = $this->model->updateArts($artsID,$voornaam,$achternaam,$soortarts,$straat,$postcode,$plaats,$email,$telefoonnummer);
        $this->view->showArtsen($result);
    }
    public function deleteArtsAction($artsID){
        $result = $this->model->deleteArts($artsID);
        $this->view->showArtsen($result);
    }

    // medicijn
    public function readMedicijnenAction(){
        $this->view->showMedicijnen();
    }

    public function showFormMedicijnAction($medicijnID=null){
        $this->view->showFormMedicijnen($medicijnID);
    }
    public function createMedicijnAction(){
        $medicijnID = filter_input(INPUT_POST,'medicijnID');
        $medicijnNaam = filter_input(INPUT_POST,'medicijnNaam');
        $medicijnWerking = filter_input(INPUT_POST,'medicijnWerking');
        $medicijnBijwerking = filter_input(INPUT_POST,'medicijnBijwerking');

        $result = $this->model->insertMedicijn($medicijnID,$medicijnNaam,$medicijnWerking,$medicijnBijwerking);
        $this->view->showMedicijnen($result);
    }
    public function updateMedicijnAction(){
        $medicijnID = filter_input(INPUT_POST,'medicijnID');
        $medicijnNaam = filter_input(INPUT_POST,'medicijnNaam');
        $medicijnWerking = filter_input(INPUT_POST,'medicijnWerking');
        $medicijnBijwerking = filter_input(INPUT_POST,'medicijnBijwerking');

        $result = $this->model->updateMedicijn($medicijnID,$medicijnNaam,$medicijnWerking,$medicijnBijwerking);
        $this->view->showMedicijnen($result);
    }
    public function deleteMedicijnAction($medicijnID){
        $result = $this->model->deleteMedicijn($medicijnID);
        $this->view->showMedicijnen($result);
    }

    // recept
    public function readReceptenAction(){
        $this->view->showRecepten();
    }

    public function showFormReceptAction($receptID=null){
        $this->view->showFormRecepten($receptID);
    }
    public function createReceptAction(){
        $receptID = filter_input(INPUT_POST,'receptID');
        $patientID = filter_input(INPUT_POST,'patientID');
        $medicijnenID = filter_input(INPUT_POST,'medicijnID');
        $medicijnDosis = filter_input(INPUT_POST,'medicijnDosis');
        $medicijnDuur = filter_input(INPUT_POST,'medicijnDuur');
        $receptHerhalingen = filter_input(INPUT_POST,'receptHerhalingen');
        $receptUitgeschreven = filter_input(INPUT_POST,'receptUitgeschreven');
        $receptOpgehaald = filter_input(INPUT_POST,'receptOpgehaald');
        $artsID = filter_input(INPUT_POST,'artsID');

        $result = $this->model->insertRecept($receptID,$patientID,$medicijnenID,$medicijnDosis,
                                             $medicijnDuur,$receptHerhalingen,$receptUitgeschreven,
                                             $receptOpgehaald, $artsID);
        $this->view->showRecepten($result);
    }
    public function updateReceptAction(){
        $receptID = filter_input(INPUT_POST,'receptID');
        $patientID = filter_input(INPUT_POST,'patientID');
        $medicijnID = filter_input(INPUT_POST,'medicijnID');
        $medicijnDosis = filter_input(INPUT_POST,'medicijnDosis');
        $medicijnDuur = filter_input(INPUT_POST,'medicijnDuur');
        $receptHerhalingen = filter_input(INPUT_POST,'receptHerhalingen');
        $receptUitgeschreven = filter_input(INPUT_POST,'receptUitgeschreven');
        $receptOpgehaald = filter_input(INPUT_POST,'receptOpgehaald');
        $artsID = filter_input(INPUT_POST,'artsID');

        $result = $this->model->updateRecept($receptID,$patientID,$medicijnID,$medicijnDosis,
            $medicijnDuur,$receptHerhalingen,$receptUitgeschreven,
            $receptOpgehaald, $artsID);
        $this->view->showRecepten($result);
    }
    public function deleteReceptAction($receptID){
        $result = $this->model->deleteRecept($receptID);
        $this->view->showRecepten($result);
    }
}
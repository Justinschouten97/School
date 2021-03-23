<?php

namespace controller;
use model\Model;
use view\View;

class Controller
{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new Model();

        $this->view = new View($this->model);
    }
    /**
     * @return View
     */
    public function getView(): View
    {
        return $this->view;
    }

    public function updateModel($id, $naam,  $prijs,$werking,$bijwerking, $type, $aanbieding){
        $this->model->setArtikel($id, $naam,  $prijs, $werking, $bijwerking, $type, $aanbieding);

//        $naam = filter_input(INPUT_POST, ('naam'));
//        $prijs = filter_input(INPUT_POST, ('prijs'));
//        $werking = filter_input(INPUT_POST, ('werking'));
//        $bijwerking = filter_input(INPUT_POST, ('bijwerking'));
    }


//    public function updateModel($id, $naam,  $prijs,$extraEigenschap, $type){
//        $this->model->setArtikel($id, $naam,  $prijs, $extraEigenschap, $type);
//    }

    public function updateView(){
        $this->view->viewContent();
    }
}
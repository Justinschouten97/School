<?php
use mvc\Model;
include_once("mvc/Model.php");

use mvc\View;
include_once("mvc/View.php");

use mvc\Controller;
include_once("mvc/Controller.php");

//creeer de mvc drie-eenheid

$model = new Model();
//het is belangrijk dat de view en controller het model delen
$view = new View($model);
$controller = new Controller($model, $view);

//view raadpleegt content in model
$view->viewContent();
// controller update content in het model
$controller->updateModel("Nieuwe Content: [student naam], [student nr]!!");
// controller update view
$controller->updateView();
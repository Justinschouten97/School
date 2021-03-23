<?php

use model\Model;
include_once("model/Model.php");
use view\View;
include_once("view/View.php");
use controller\Controller;
include_once("controller/Controller.php");

$controller = new Controller();
$controller->updateView();

$controller->updateModel(2,"BMW",80000.0, "I3", "auto",0);
$controller->updateView();

$controller->updateModel(3,"Mercedes",40000.0,"a45", "auto",0);
$controller->updateView();

$controller->updateModel(4,"Ferrari",600000.0,"488", "auto",0);
$controller->updateView();

$controller->updateModel(5,"Bentley",298593.0,"Continental GT", "auto",1);
$controller->updateView();

$controller->updateModel(6,"BMW",30000.0,"F 900 R", "motor",1);
$controller->updateView();

$controller->updateModel(7,"Harley-Davidson",50000.0,"VRSC", "motor",1);
$controller->updateView();

$controller->getView()->viewSold();
?>
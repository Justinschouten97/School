<?php

use model\Model;
include_once("model/Model.php");
use view\View;
include_once("view/View.php");
use contoller\Controller;
include_once("controller/Controller.php");

$contoller = new Controller();
$contoller->updateView();

$contoller->updateModel();
$contoller->updateView();








$contoller->getView()->viewUitgegeven();

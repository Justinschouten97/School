<?php

use model\Model;
include_once("model/Model.php");
use view\View;
include_once("view/View.php");
use controller\Controller;
include_once("controller/Controller.php");

$controller = new Controller();
$controller->updateView();

$controller->updateModel(2,"Paracetamol",2.0, "Onstekking remmend", "Duizeligheid",0,1);
$controller->updateView();

$controller->updateModel(3,"Diclofenac",5.0, "Pijnstiller, koortsverlagende werking, ontstekingsremmende werking. Goed bij acute pijn en chronische ziektes zoals reuma en jicht", "pijn op de borst, kortademingheid, zwarte of zeer donkere ontlasting, ophoesten van bloed, blauwe plekken",0,0);
$controller->updateView();

$controller->updateModel(4,"Amoxicilline",10.0, "Breedspectrum antibioticum, actief tegen grampositieve en gramnegatieve bacteriën", "braken, buikpijn, diarree, spijsverteringsstoornissen, huidirritaties, maagdarm-stoornissen",0,0);
$controller->updateView();

$controller->updateModel(5,"Omeprazol",1.0, "Remt de productie van overmatig maagzuur. Omeprazol behoort tot de klasse van protonremmers. Omeprazol wordt ingezet ter preventie en behandeling van maagzweren.", "duizeligheid, verwarring, snelle en onregelmatige hartslag, schokkende spierbewegingen, zich schrikachtig voelen, spierkrampen, spierzwakte of slap gevoel.",0,0);
$controller->updateView();



$controller->getView()->viewSold();
?>
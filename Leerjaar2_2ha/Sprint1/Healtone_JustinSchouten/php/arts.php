<?php

use controller\Controller;
include_once 'controller/Controller.php';
$controller = new Controller();

// arts
/* formulier met gegevens tonen om een rij bij te werken */
if(isset($_POST['showForm']))
{
    $controller->showFormArtsAction( $_POST['showForm']);
}
/* UPDATE: formulier afhandeling om een rij bij te werken */
else if(isset($_POST['update']))
{
    $controller->updateArtsAction();
}
/* CREATE:  formulier afhandeling nieuwe rij */
else if(isset($_POST['create']))
{
    $controller->createArtsAction();
}
/* DELETE:  verwijderen rijen */
else if(isset($_POST['delete']))
{
    $controller->deleteArtsAction($_POST['delete']);
}
/*READ:  overzicht alle artsen */
else
{
    $controller->readArtsenAction();
}





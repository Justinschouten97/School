<?php

use controller\Controller;

include_once 'controller/Controller.php';
$controller = new Controller();
?>

<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
              integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
              crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
              integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ"
              crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
                integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
                crossorigin="anonymous"></script>


        <title>Home</title>
    </head>
    <body>

    <div class="container-fluid">

        <div class="jumbotron">
            <h1>Hello, <?php echo $_SESSION['name'] ?></h1>
        </div>


        <a class="btn btn-danger btn-block" href="zExtra/templates/login-system/logout.php">Logout</a>
        <hr>
        <br>

        <hr>
        <div class="col-4">

            <?php
            // patient
            /* formulier met gegevens tonen om een rij bij te werken */
            if (isset($_POST['showFormP'])) {
                var_dump($_POST['showFormP']);
                $controller->showFormPatientAction($_POST['showFormP']);
            } /* UPDATE: formulier afhandeling om een rij bij te werken */
            else if (isset($_POST['updateP'])) {
                $controller->updatePatientAction();
            } /* CREATE:  formulier afhandeling nieuwe rij */
            else if (isset($_POST['createP'])) {
                $controller->createPatientAction();
            } /* DELETE:  verwijderen rijen */
            else if (isset($_POST['deleteP'])) {
                $controller->deletePatientAction($_POST['deleteP']);
            } /*READ:  overzicht alle patienten */
            else {
                $controller->readPatientenAction();
            }
            ?>
        </div>
        <hr>

        <hr>
        <div class="col-4">
            <?php
            // arts
            /* formulier met gegevens tonen om een rij bij te werken */
            if (isset($_POST['showFormA'])) {
                $controller->showFormArtsAction($_POST['showFormA']);
            } /* UPDATE: formulier afhandeling om een rij bij te werken */
            else if (isset($_POST['updateA'])) {
                $controller->updateArtsAction();
            } /* CREATE:  formulier afhandeling nieuwe rij */
            else if (isset($_POST['createA'])) {
                $controller->createArtsAction();
            } /* DELETE:  verwijderen rijen */
            else if (isset($_POST['deleteA'])) {
                $controller->deleteArtsAction($_POST['deleteA']);
            } /*READ:  overzicht alle artsen */
            else {
                $controller->readArtsenAction();
            }
            ?>
        </div>
        <hr>

        <hr>
        <div class="col-4">
            <?php
            // medicijnen
            /* formulier met gegevens tonen om een rij bij te werken */
            if (isset($_POST['showFormM'])) {
                $controller->showFormMedicijnAction($_POST['showFormM']);
            } /* UPDATE: formulier afhandeling om een rij bij te werken */
            else if (isset($_POST['updateM'])) {
                $controller->updateMedicijnAction();
            } /* CREATE:  formulier afhandeling nieuwe rij */
            else if (isset($_POST['createM'])) {
                $controller->createMedicijnAction();
            } /* DELETE:  verwijderen rijen */
            else if (isset($_POST['deleteM'])) {
                $controller->deleteMedicijnAction($_POST['deleteM']);
            } /*READ:  overzicht alle medicijnen */
            else {
                $controller->readMedicijnenAction();
            }
            ?>
        </div>
        <hr>

        <hr>
        <div class="col-4"">
            <?php
            // recepten
            /* formulier met gegevens tonen om een rij bij te werken */
            if (isset($_POST['showFormR'])) {
                $controller->showFormReceptAction($_POST['showFormR']);
            } /* UPDATE: formulier afhandeling om een rij bij te werken */
            else if (isset($_POST['updateR'])) {
                $controller->updateReceptAction();
            } /* CREATE:  formulier afhandeling nieuwe rij */
            else if (isset($_POST['createR'])) {
                $controller->createReceptAction();
            } /* DELETE:  verwijderen rijen */
            else if (isset($_POST['deleteR'])) {
                $controller->deleteReceptAction($_POST['deleteR']);
            } /*READ:  overzicht alle medicijnen */
            else {
                $controller->readReceptenAction();
            }
            ?>



            <?php echo "<br>" ?>
            <footer class="card-footer">
                <div class="row">
                    <div class="col">
                        <p class="text-center">
                            Copyright Healtone - (C) 2020 Justin Schouten
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </body>
    </html>

    <?php
} else {
    header("Location: index_login.php");
    exit();
}

?>
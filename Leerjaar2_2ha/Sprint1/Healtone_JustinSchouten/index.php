<?php
use controller\Controller;

include_once 'controller/Controller.php';
$controller = new Controller();
?>

<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
          integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

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

    <div class="col-4">

        <?php
        // patient
        /* formulier met gegevens tonen om een rij bij te werken */
        if (isset($_POST['showForm'])) {
            $controller->showFormPatientAction($_POST['showForm']);
        } /* UPDATE: formulier afhandeling om een rij bij te werken */
        else if (isset($_POST['update'])) {
            $controller->updatePatientAction();
        } /* CREATE:  formulier afhandeling nieuwe rij */
        else if (isset($_POST['create'])) {
            $controller->createPatientAction();
        } /* DELETE:  verwijderen rijen */
        else if (isset($_POST['delete'])) {
            $controller->deletePatientAction($_POST['delete']);
        } /*READ:  overzicht alle patienten */
        else {
            $controller->readPatientenAction();
        }
        ?>
    </div>

    <div class="col-sm-4">
        <?php
        // arts
        /* formulier met gegevens tonen om een rij bij te werken */
        if (isset($_POST['showForm'])) {
            $controller->showFormArtsAction($_POST['showForm']);
        } /* UPDATE: formulier afhandeling om een rij bij te werken */
        else if (isset($_POST['update'])) {
            $controller->updateArtsAction();
        } /* CREATE:  formulier afhandeling nieuwe rij */
        else if (isset($_POST['create'])) {
            $controller->createArtsAction();
        } /* DELETE:  verwijderen rijen */
        else if (isset($_POST['delete'])) {
            $controller->deleteArtsAction($_POST['delete']);
        } /*READ:  overzicht alle artsen */
        else {
            $controller->readArtsenAction();
        }
        ?>
    </div>

    <div class="col-sm-4">
        <?php
        // medicijnen
        /* formulier met gegevens tonen om een rij bij te werken */
        if (isset($_POST['showForm'])) {
            $controller->showFormMedicijnAction($_POST['showForm']);
        } /* UPDATE: formulier afhandeling om een rij bij te werken */
        else if (isset($_POST['update'])) {
            $controller->updateMedicijnAction();
        } /* CREATE:  formulier afhandeling nieuwe rij */
        else if (isset($_POST['create'])) {
            $controller->createMedicijnAction();
        } /* DELETE:  verwijderen rijen */
        else if (isset($_POST['delete'])) {
            $controller->deleteMedicijnAction($_POST['delete']);
        } /*READ:  overzicht alle medicijnen */
        else {
            $controller->readMedicijnenAction();
        }
        ?>
    </div>

    <div class="col-sm-4">
        <?php
        // recepten
        /* formulier met gegevens tonen om een rij bij te werken */
        if (isset($_POST['showForm'])) {
            $controller->showFormReceptAction($_POST['showForm']);
        } /* UPDATE: formulier afhandeling om een rij bij te werken */
        else if (isset($_POST['update'])) {
            $controller->updateReceptAction();
        } /* CREATE:  formulier afhandeling nieuwe rij */
        else if (isset($_POST['create'])) {
            $controller->createReceptAction();
        } /* DELETE:  verwijderen rijen */
        else if (isset($_POST['delete'])) {
            $controller->deleteReceptAction($_POST['delete']);
        } /*READ:  overzicht alle medicijnen */
        else {
            $controller->readReceptenAction();
        }
        ?>
    </div>
</div>
</body>
</html>

<?php
}else{
    header("Location: index_login.php");
    exit();
}

?>
<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <!--        <link rel="stylesheet" href="../../css/bootstrap-grid.min.css">-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
              crossorigin="anonymous">
        <!---->
        <title>HOME</title>
    </head>
    <body>
    <div class="container">
                <h1>Hello, <?php echo $_SESSION['name'] ?></h1>
                <a href="../../../index.php" class="btn btn-primary btn-lg">Index</a>
                <br>
                <br>
                <a href="logout.php" class="btn btn-danger">Logout</a>

        <div class="row">
            <div class="col">
                <hr/>
                <p class="text-center">
                    Copyright Healtone - (C) 2020 Justin Schouten
                </p>
            </div>
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
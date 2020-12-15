<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="zExtra/css/global.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
          integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
            integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
            crossorigin="anonymous"></script>

    <title>Login Scherm</title>
</head>
<body>

<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <!--form start-->
            <form class="form-container" action="zExtra/templates/login-system/login.php" method="post">

                <div class="form-group">
                    <h2>Login Healtone</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error'] ?></p>
                    <?php } ?>
                </div>

                <div class="form-group text-donker">
                    <label>User Name</label>
                    <input type="text" name="uname" placeholder="User Name">
                </div>

                <div class="form-group text-donker">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>

                <button type="submit" class="btn btn-success btn-block">Login</button>

                <br>

                <div class="alert-info">
                    <a class="btn btn-info btn-block" href="zExtra/templates/regForm/index.php">Registreren</a>
                </div>

            </form>
            <!--form end-->
        </div>
    </div>
    <footer class="card-footer">
        <div class="row">
            <div class="col">
                <p class="text-center">
                    Copyright Healtone - (C) 2020 Justin Schouten
                </p>
            </div>
        </div>
    </footer>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
</div>
</body>
</html>
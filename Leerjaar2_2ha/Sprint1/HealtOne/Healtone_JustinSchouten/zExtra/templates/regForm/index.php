<?php
include('processForm.php');
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles_regForm.css">

    <title>Registration Form</title>
</head>
<body>
<div class="regForm" id="titleRegForm">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="col" id="status">
                    <?php echo $message_alert; ?>
                </div>
                <div class="regForm">
                    <h1>Registration Form</h1>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

                        <div class="form-group" id="fullname">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullName" placeholder="Enter your full name"
                                   required>
                        </div>
                        <div class="form-group" id="username">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="user_name" placeholder="Enter your username"
                                   required>
                        </div>
                        <div class="form-group" id="email">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                   required>
                        </div>
                        <div class="form-group" id="age">
                            <label>Age</label>
                            <input type="number" class="form-control" name="age" placeholder="Enter your age" required>
                        </div>
                        <div class="form-group" id="dob">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" name="dob" required>
                        </div>

                        <fieldset class="form-group" id="gender">
                            <div class="row">
                                <legend class="col-form col-sm-2 pt-0">Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="Male">
                                        <label class="form-check-label">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="Female">
                                        <label class="form-check-label">Female</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group">
                            <label id="titleDesigantion">Designation</label>
                            <select class="form-control" name="designation" required>
                                <option value="Patient">Patient</option>
                                <option value="Arts">Arts</option>
                                <option value="Appotheker">Appotheker</option>
                                <option value="Verzekeraar">Verzekeraar</option>
                            </select>
                        </div>

                        <fieldset class="form-group" id="soortarts">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Soort Arts</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="soortarts[]"
                                               value="knoArts">
                                        <label class="form-check-label">KNO Arts</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="soortarts[]"
                                               value="Oncoloog">
                                        <label class="form-check-label">Oncoloog</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="soortarts[]"
                                               value="kinderArts">
                                        <label class="form-check-label">Kinderarts</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group">
                            <label>Bio</label>
                            <textarea name="bio" class="form-control" rows="3"
                                      placeholder="Write you bio here..."></textarea>
                        </div>

                        <div class="formgroup">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password"
                                   placeholder="Enter your password" required>
                        </div>

                        <div class="formgroup">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword"
                                   placeholder="Re-enter your password" required>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-info btn-block" name="register">Register</button>

                        <br>

                        <a href="../../../index_login.php" class="btn btn-success btn-block" name="inlogscherm">Inlog
                            scherm</a>
                        <br>

                    </form>
                </div>
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
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#notification').delay(3000).fadeOut();
    });
</script>
</body>
</html>
<?php
//include("conn.php");
//
//$message_alert = "";
//
//if (isset($_POST['register'])){
//
////    $fullname = mysqli_real_escape_string($_POST['fullname']);
////    $email = mysqli_real_escape_string($_POST['email']);
////    $age = mysqli_real_escape_string($_POST['age']);
////    $dob = mysqli_real_escape_string($_POST['dob']);
////    $gender = mysqli_real_escape_string($_POST['gender']);
////    $designation = mysqli_real_escape_string($_POST['designation']);
//
//    $fullname = filter_input_array(INPUT_POST,'fullname');
//    $email = filter_input_array(INPUT_POST,'email');
//    $age = filter_input_array(INPUT_POST,'age');
//    $dob = filter_input_array(INPUT_POST,'dob');
//    $gender = filter_input_array(INPUT_POST,'gender');
//    $designation = filter_input_array(INPUT_POST,'designation');
//
//    if (!empty($_POST['languages'])){
//        $language = "";
//        foreach ($_POST['languages'] as $lang){
//            $language .= $lang." ";
//        }
//    }
//
////    $bio = mysqli_real_escape_string($_POST['bio']);
////    $password = mysqli_real_escape_string($_POST['password']);
////    $confirmPassword = mysqli_real_escape_string($_POST['confirmPassword']);
//
//    $bio = filter_input_array(INPUT_POST,'bio');
//    $password = filter_input_array(INPUT_POST,'password');
//    $confirmPassword = filter_input_array(INPUT_POST,'confirmPassword');
//
//    $insert = "INSERT INTO users(fullname, email, age, dob, designation, languages, bio, password)
//    VALUES('$fullname','$email','$age','$dob','$gender','$designation','$language','$bio',$password)";
//
//    if($password == $confirmPassword) {
//        if (mysqli_query($con, $insert)) {
//            $message_alert = '
//            <div class="alert alert-success">
//              <strong>Success!</strong> User Registered<br>
//            </div>';
//        } else {
//            $message_alert = '
//          <div class="alert alert-danger">
//            <strong>Failed!</strong> Not Registered!
//          </div>';
//        }
//    } else {
//        $message_alert = '
//          <div class="alert alert-warning">
//            <strong>Failed!</strong> Password does not match!
//          </div>';
//    }
//}
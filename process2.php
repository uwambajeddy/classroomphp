<?php

include('database.php');
session_start();
$array = array();
$username = "";
$phone = "";
$email = "";



if (isset($_POST['sig-submit'])) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    if (empty($username)) {
        array_push($array, "username required");
    }
    if (empty($phone)) {
        array_push($array, "phone number required");
    }
    if (empty($email)) {
        array_push($array, "email required");
    }

    if (empty($gender)) {
        array_push($array, "gender required");
    }

    if (empty($password_1)) {
        array_push($array, "password required");
    }

    if (strlen($password_1) <= 6) {
        array_push($array, "password should be more than 8 characters");
    }

    if ($password_1 != $password_2) {
        array_push($array, "The two passwords do not match");
    }

    if (count($array) == 0) {
        $sql = "SELECT * FROM `users` WHERE `username` = '$username' OR `email` ='$email' LIMIT 1";

        $result = mysqli_query($con, $sql);

        $user = mysqli_fetch_assoc($result);

        $sql_u = "SELECT * FROM `users` WHERE `username`='$username'";
        $sql_e = "SELECT * FROM `users` WHERE `email`='$email'";
        $res_u = mysqli_query($con, $sql_u);
        $res_e = mysqli_query($con, $sql_e);

        if (mysqli_num_rows($res_u) > 0) {
            array_push($array, "Username already taken");
        } else if (mysqli_num_rows($res_e) > 0) {
            array_push($array, "email already exists");
        } else {
            $password = md5($password_1);
            $query = "INSERT INTO `users` (`username`,`phone`, `email`,`gender` , `password`) 
  			  VALUES('$username','$phone','$email','$gender', '$password')";
            mysqli_query($con, $query);

            $_SESSION['username'] = $username;
            header('location: index.php');
        }
    }
}


<?php
include('database.php');
session_start();
$username = "";
$array = array();
if (isset($_POST['log-submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    if (empty($username)) {
        array_push($array, "Username is require");
    }
    if (empty($pass)) {
        array_push($array, "Password is require");
    }

    if (count($array) == 0) {
        $pass = md5($pass);
        $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` ='$pass'";

        $query = mysqli_query($con, $sql);


        if (mysqli_num_rows($query) > 0) {
            $_SESSION['username'] = $username;

            header("location: index.php");
        } else {
            array_push($array, "wrong user name or password");
        }
    }
}

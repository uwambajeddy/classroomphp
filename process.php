
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

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $phone=$_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['c_pass'];
    $bio = $_POST['bio'];
    $password = $_POST['password'];
    $add_image=$_FILES['image']['name'];
    $imagetmp=$_FILES['image']['tmp_name'];
    $folder="img/";

    if (empty($username)) {
        array_push($array, "Username is require");
    }
    if (empty($phone)) {
        array_push($array, "Phone is require");
    }
    if (empty($email)) {
        array_push($array, "Email is require");
    }
    if (empty($password)) {
        array_push($array, "Password is require");
    }
    if (count($array) == 0) {
        if ($pass == $cpass){

            $pass_c = md5($password);
            $sql = "SELECT * FROM `users` WHERE `id` = '$id' AND `password` ='$pass_c'";

            $query = mysqli_query($con, $sql);

            while ($row=mysqli_fetch_array($query)) { 
                $e_im=$row['image'];
                $e_b=$row['bio'];
            }

            if (empty($add_image)) {
                    $add_image= $e_im;
            }
            if (empty($bio)) {
                    $bio=$e_b;
            }


            if (mysqli_num_rows($query) > 0) {
                if(empty($pass) || empty($cpass)){
                    $npass = md5($password); 
                }else{
                    $npass = md5($pass);
                }
                
                move_uploaded_file($imagetmp,$folder.$add_image);
                $sql="UPDATE `users` SET `username`='$username',`password`='$npass',`email`='$email',`phone`='$phone',`image`='$add_image',`bio`='$bio' WHERE `id`=$id";
                $query=mysqli_query($con, $sql);
                if ($query) {
                    header('location: profile.php');
                }else{
                    array_push($array, "Update failed");
                }

            }else{
                array_push($array, "Incorrect Password");
            }

        }else{
            array_push($array, "Your password are not equal");
        }
        

    }
}
<?php

if (isset($_POST['profile-upload'])) {

    $bio = $_POST['bio'];
    $profileImageName = time() - '_' - $_FILES['profileImage']['name'];

    $target = 'img/' . $profileImageName;

    move_uploaded_file($_FILES['profileImage']['name'], $target);
}

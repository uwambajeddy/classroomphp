<?php include('process.php') ?>
<?php
if (!isset($_SESSION['username'])) {
    header('location: login.php');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style2.css">
    <title>Document</title>

</head>

<body>
    <div class="e_header">
        <div class="e_toplist">
            <a href="index.php" id="e_logo">Class Room</a>
            <a href="#" id="e_name"><?php echo $_SESSION['username']; ?></a>
            <div class="e_left">
                <a href="">Menu</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="flex-3"></div>
        <div class="flex-1">
            <h2>User Form</h2>
            <?php

                    if (count($array) > 0) {
                        for ($a = 0; $a <= sizeof($array) - 1; $a++) { ?>
                            <div class="m-danger">
                                <?php echo $array[$a]; ?>
                            </div>
                    <?php   }
                    } ?>
            <?php 
                $id_info=$_SESSION['username'];
                $sql="SELECT * FROM `users` WHERE `username`='$id_info'";
                $query=mysqli_query($con, $sql);
                while ($row=mysqli_fetch_array($query)) 
                { ?>
            <form class="form-style-9" method="post" action="profile.php" enctype="multipart/form-data">
                <ul>
                   <input type="hidden" name="id" value="<?php echo $row['id']?>">
                    <li>
                        <input type="text" name="username" class="field-style field-split align-left" value="<?php echo $row['username']?>" />
                        <input type="text" name="phone" class="field-style field-split align-right" value="<?php echo $row['phone']?>" />

                    </li>
                    <li>
                        <input type="password" name="pass" class="field-style field-split align-left" placeholder="Enter password" />
                        <input type="password" name="c_pass" class="field-style field-split align-right" placeholder="Confirm password" />
                    </li>
                    <li>
                        <input type="email" name="email" class="field-style field-full align-none" value="<?php echo $row['email']?>" />
                    </li>
                    <li>
                        <label for="profileImage">profile image</label>
                        <input type="file" name="image" class="field-style field-full align-none" />
                    </li>

                    <li>
                        <textarea name="bio" class="field-style" placeholder="your Biography" name="bio"></textarea>
                    </li>
                    <li>
                        <input type="password" name="password" class="field-style field-full align-none" style="border-color: green " placeholder="enter the old password to confirm changes" />
                    </li>
                    <li>
                    <li>
                        <input type="submit" name="save" value="save" />
                    </li>
                </ul>
            </form>
            <?php }?>
        </div>
        <div class="flex-2">
            <h2>User Profile</h2>
            <?php 
                $sql="SELECT * FROM `users` WHERE `username`='$id_info'";
                $query=mysqli_query($con, $sql);
                while ($row=mysqli_fetch_array($query)) 
                { ?>
            <div class="form-style-9">
                <div class="prof-img">
                    <img src="img/<?php echo $row['image']?>" alt="example">
                </div>
                <div class="field-style">
                    <h4>Your Biography:</h4>
                    <p><?php echo $row['bio']?></p>
                </div>
            </div>
                <?php  } ?>
        </div>

    </div>

</body>

</html>
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
            <form class="form-style-9" method="post" action="server.php" enctype="multipart/form-data">
                <ul>
                    <li>
                        <input type="text" name="username" class="field-style field-split align-left" placeholder="UserName" />
                        <input type="email" name="phone" class="field-style field-split align-right" placeholder="Phone number" />

                    </li>
                    <li>
                        <input type="text" name="phone" class="field-style field-split align-left" placeholder="enter old password" />
                        <input type="url" name="field4" class="field-style field-split align-right" placeholder="confirm password" />
                    </li>
                    <li>
                        <input type="email" name="email" class="field-style field-full align-none" placeholder="email" />
                    </li>
                    <li>
                        <label for="profileImage">profile image</label>
                        <input type="file" name="profileImage" class="field-style field-full align-none" />
                    </li>

                    <li>
                        <textarea name="bio" class="field-style" placeholder="your Biography"></textarea>
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
        </div>
        <div class="flex-2">
            <h2>User Profile</h2>
            <div class="form-style-9">
                <div class="prof-img">
                    <img src="img/" alt="example">
                </div>
                <div class="field-style">
                    <textarea name="" id="" cols="30" rows="10">njudsghuiequgeug</textarea>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
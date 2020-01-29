<?php include('process.php') ?>
<?php
if (empty($_SESSION['username'])) {
    header('location: login.php');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>

</head>

<body>
    <div class="e_header">
        <div class="e_toplist">
            <a href="" id="e_logo">Class Room</a>
            <a href="profile.php" id="e_name"><?php echo $_SESSION['username']; ?></a>
            <div class="e_left">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>
    <div class="e_body">
        <p class="e_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta placeat esse illo vitae
            tempore minima quasi odio obcaecati iste unde, aliquam voluptates quidem fugit rerum! Consectetur, ipsum.
            Quae, similique. Consequuntur sit quae aut voluptates distinctio omnis, id impedit illum velit labore hic
            neque itaque non aspernatur enim totam facilis placeat.</p>
        <div class="e_select">
            <form action="">
                <span class="e_select_span">select sector</span>
                <select>
                    <option value=""></option>
                    <option value="">software dev</option>
                    <option value="">cons</option>
                    <option value="">hotel</option>
                </select>
                <span class="e_select_span">select lesson</span>
                <select>
                    <option value=""></option>
                    <option value="">depedends</option>
                    <option value="">depedends</option>
                    <option value="">depedends</option>
                </select>
                <input type="submit" value="START">
            </form><br><br>
        </div>
    </div>
    <!-- <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function() {
            null
        };
    </script> -->
</body>

</html>
<?php
include("process.php");
?>


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
    <!-- login page -->
    <div class="m-container">
        <div class="m-intro-content">
            <div class="m-intro-context-text">
                <div class="m-intro-all-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi officiis
                    id sunt eligendi, soluta quo! Molestias tenetur animi cupiditate dolorem sit repudiandae, quos sunt
                    dolorum facere recusandae. A, rerum veritatis?</div>
            </div>
        </div>
        <div class="m-login-services">
            <div class="m-login-services-container">
                <div class="m-login-services-title">
                    <h1>LOGIN HERE</h1>
                    <?php

                    if (count($array) > 0) {
                        for ($a = 0; $a <= sizeof($array) - 1; $a++) { ?>
                            <div class="m-danger">
                                <?php echo $array[$a]; ?>
                            </div>
                    <?php   }
                    } ?>



                    <form action="login.php" method="post">
                        <input type="text" name="username" placeholder="username" value="<?php echo $username; ?>">
                        <input type="password" name="password" placeholder="password">
                        <input type="submit" name="log-submit" value="Sign in">
                        <div class="m-for-pass">
                            <a href="#">Forgot password</a>
                        </div>
                        <div class="clear"></div>
                    </form>
                    <div class="m-warning">
                        <p>If you don't have an account you can on the link below this will help you to access the main
                            page,thank you for visiting us</p>
                    </div>
                    <div class="m-link-reg">
                        <a href="signup.php">Create an account</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End login page-->
        <script src="js/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".m-danger").hover(function() {
                    $(".m-danger").slideUp(500);
                });
            });
        </script>
</body>

</html>
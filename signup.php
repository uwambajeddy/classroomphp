<?php include('process2.php'); ?>
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
                    <h1>SIGNUP HERE</h1>

                    <?php
                    if (count($array) > 0) {
                        for ($a = 0; $a <= count($array) - 1; $a++) { ?>
                            <div class="m-danger">
                                <?php echo $array[$a]; ?>
                            </div>
                    <?php }
                    } ?>



                    <form action="signup.php" method="post">
                        <input type="text" name="username" placeholder="username" value="<?php echo $username; ?>">
                        <input type="text" name="phone" placeholder="phone number" value="<?php echo $phone; ?>">
                        <input type="email" name="email" placeholder="email" value="<?php echo $email; ?>">
                        <div class="e-radio">
                            <span>select gender:</span><br>
                            <input type="radio" name="gender" value="male">male</radio>
                            <input type="radio" name="gender" value="female">female</radio>
                        </div>
                        <input type="password" name="password_1" placeholder="password">
                        <input type="password" name="password_2" placeholder="confirm password">
                        <input type="submit" name="sig-submit" value="Sign in">
                        <div class="m-for-pass">
                            <a href="login.php">Already have an account?</a>
                        </div>
                        <div class="clear"></div>
                    </form>

                </div>
            </div>
        </div>
        <!-- End signup page-->
        <script src="js/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".m-danger").hover(function() {
                    $(".m-danger").slideUp(700);
                });
            });
        </script>
</body>

</html>
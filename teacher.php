<?php if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $delter = $b * $b  - 4 * $a * $c;
    $sqrt = sqrt($delter);


    if ($delter < 0) {
        echo "no root";
    } elseif ($delter == 0) {

        echo "error";
    } else {
        $x1 = -$b - $sqrt / 2 * $a;
        $x2 = -$b + $sqrt / 2 * $a;

        echo "X1 = " . $x1;
        echo "<br>X2 = " . $x2 . "<br>";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        enter a<input type="number" name="a"><br>
        enter b<input type="number" name="b"><br>
        enter c<input type="number" name="c"><br>
        <input type="submit" name="submit" value="compute">

    </form>
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
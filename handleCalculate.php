<?php

if (isset($_GET['submit'])) {
    $x = $_GET['firstNumber'];
    $y = $_GET['secondNumber'];
    $op = $_GET['options'];


    function calc($x, $y, $op)
    {


        switch ($op) {
            case 'add':
                return (int) $x + (int) $y;
                break;
            case 'sub':
                return (int) $x - (int) $y;
                break;
            case 'mul':
                return (int) $x * (int) $y;
                break;
            case 'div':
                return (int) $x / (int) $y;
                break;
            default:
                return 'please enter a valid operation';
        }
    }

    echo calc($x, $y, $op);
} else {
    header("Location: calculate.php");
}

?>

<html>

<body>
    <a href="calculate.php">Back</a>
</body>

</html>
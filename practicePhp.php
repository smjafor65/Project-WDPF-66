<?php
if (isset($_GET['submit'])) {
    $number = $_GET['number'];
    positiveOrnegetive($number);

}
function positiveOrnegetive($number)
{

 

    if ($number > 0) {
        $result = "$number is a positive number";
    } else if ($number < 0) {
        $result = "$number is a negative number";

    } else {
        $result = "$number is a neutral number";

    }

    echo "<h1>$result </h1>";
}
;



// <!-- 	Check if a number is even or odd using ternary -->
if (isset($_GET['submit1'])) {
    $number = $_GET['number1'];
    evenOrodd($number);


}
function evenOrodd($number)
{
    $evenOdd = ($number % 2 == 0) ? "$number is a even number" : "$number is a odd number";
    echo "<h1>$evenOdd </h1>";
    echo "<h1>Ok</h1>";
}

// evenOrodd();




?>

<!-- Check if a number is positive or negative using if -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <form action="practicePhp.php" method="GET">
        <label for="">Number:</label>
        <input type="number" name="number"><br><br>
        <input type="submit" name="submit">
    </form>

    <!-- 	Check if a number is even or odd using ternary -->

    <form action="practicePhp.php" method="GET">
        <label for="">Number:</label>
        <input type="number" name="number1"><br><br>
        <input type="submit" name="submit1">
    </form>

    <!-- 3.	Find the largest of two numbers using if -->

    <form action="practicePhp.php" method="GET">
        <label for="">Number:</label>
        <input type="number" name="number2"><br><br>
        <label for="">Number:</label>
        <input type="number" name="number3"><br><br>
        <input type="submit" name="submit2">
    </form>

    <?php

    if (isset($_GET['submit2'])) {
        $number2 = $_GET['number2'];
        $number3 = $_GET['number3'];
        largestOne($number2, $number3);
    }

    function largestOne()
    {
        $largeNumber = null;
        $number2 = null;
        $number3 = null;
        if (isset($_GET['submit2'])) {
            $number2 = $_GET['number2'];
            $number3 = $_GET['number3'];
        }

        if ($number2 > $number3) {
            $largeNumber = "$number2 is the largest Number";
        } else {
            $largeNumber = "$number3 is the largest Number";
        }
        echo "<h1>$largeNumber </h1>";
    }


    ?>

    <!-- Check if a number is divisible by both 3 and 5 using if -->




</body>

</html>
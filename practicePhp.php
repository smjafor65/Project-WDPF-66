<?php

positiveOrnegetive();

function positiveOrnegetive(){

    $number=null;
    $result=null;
    if (isset($_GET['submit'])) {
    $number=$_GET['number'];

    if ($number>0) {
   $result ="$number is a positive number";
} else if($number<0){
 $result ="$number is a negative number";

}else{
     $result ="$number is a neutral number";

}
}
echo "<h1>$result </h1>" ;
};



   // <!-- 	Check if a number is even or odd using ternary -->

    function evenOrodd(){

        $evenOdd=null;
        $number=null;
        if (isset($_GET['submit1'])) {
            $number=$_GET['number1'];

            $evenOdd=($number%2==0)?"$number is a even number":"$number is a odd number";
        }
       echo "<h1>$evenOdd </h1>" ; 
    }

evenOrodd();




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
</body>
</html>